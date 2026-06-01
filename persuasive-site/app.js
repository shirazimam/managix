const revealItems = document.querySelectorAll('[data-reveal]');

if ('IntersectionObserver' in window) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.16 }
  );

  revealItems.forEach((item) => observer.observe(item));
} else {
  revealItems.forEach((item) => item.classList.add('is-visible'));
}

document.documentElement.classList.add('js-ready');

const calculatorRows = document.querySelector('#calculatorRows');
const addRowButton = document.querySelector('#addRow');
const currencySelect = document.querySelector('#currencySelect');
const projectTotal = document.querySelector('#projectTotal');
const currencyNote = document.querySelector('#currencyNote');
const usdToInrRate = 95;

const resourceRates = {
  'Project Manager': { min: 75000, max: 120000, default: 95000 },
  'UI Designer': { min: 40000, max: 90000, default: 65000 },
  Developer: { min: 80000, max: 120000, default: 100000 },
  'Sr Developer': { min: 100000, max: 150000, default: 125000 },
};

let currentCalculatorCurrency = 'INR';

const formatMoney = (amount, currency) =>
  new Intl.NumberFormat('en-IN', {
    style: 'currency',
    currency,
    maximumFractionDigits: currency === 'INR' ? 0 : 2,
  }).format(amount);

const convertAmount = (amount, fromCurrency, toCurrency) => {
  if (fromCurrency === toCurrency) return amount;
  return toCurrency === 'USD' ? amount / usdToInrRate : amount * usdToInrRate;
};

const updateTotals = () => {
  if (!calculatorRows || !projectTotal) return;

  let total = 0;
  calculatorRows.querySelectorAll('tr').forEach((row) => {
    const monthlyCost = Number(row.querySelector('[data-field="monthlyCost"]').value || 0);
    const months = Number(row.querySelector('[data-field="months"]').value || 0);
    const rowTotal = monthlyCost * months;
    total += rowTotal;
    row.querySelector('[data-field="rowTotal"]').textContent = formatMoney(
      rowTotal,
      currencySelect.value
    );
  });

  projectTotal.textContent = formatMoney(total, currencySelect.value);
  if (currencyNote) {
    currencyNote.textContent =
      'Disclaimer: The above costing is an estimate and final cost will depend on the actual requirements. Currency conversion assumes 1 USD = INR 95.';
  }
};

const defaultRateForCurrency = (role) =>
  convertAmount(resourceRates[role].default, 'INR', currencySelect?.value || 'INR');

const resourceOptions = () =>
  Object.entries(resourceRates)
    .map(([role, rate]) => `<option value="${role}">${role} (₹${rate.min.toLocaleString('en-IN')} - ₹${rate.max.toLocaleString('en-IN')})</option>`)
    .join('');

const addCalculatorRow = (role = 'Developer', months = 1) => {
  if (!calculatorRows) return;

  const row = document.createElement('tr');
  row.innerHTML = `
    <td>
      <select data-field="resource">${resourceOptions()}</select>
    </td>
    <td>
      <input data-field="monthlyCost" type="number" min="0" step="1000" />
    </td>
    <td>
      <input data-field="months" type="number" min="0" step="0.5" value="${months}" />
    </td>
    <td data-field="rowTotal">INR 0</td>
    <td>
      <button class="table-action" type="button" data-action="remove">Remove</button>
    </td>
  `;

  const resourceSelect = row.querySelector('[data-field="resource"]');
  const monthlyCostInput = row.querySelector('[data-field="monthlyCost"]');
  resourceSelect.value = role;
  monthlyCostInput.value = Math.round(defaultRateForCurrency(role));

  row.addEventListener('input', updateTotals);
  row.addEventListener('change', (event) => {
    if (event.target.matches('[data-field="resource"]')) {
      monthlyCostInput.value = Math.round(defaultRateForCurrency(event.target.value));
    }
    updateTotals();
  });
  row.querySelector('[data-action="remove"]').addEventListener('click', () => {
    row.remove();
    updateTotals();
  });

  calculatorRows.appendChild(row);
  updateTotals();
};

if (calculatorRows) {
  addCalculatorRow('Project Manager', 3);
  addCalculatorRow('UI Designer', 2);
  addCalculatorRow('Developer', 3);
  addCalculatorRow('Sr Developer', 2);
}

addRowButton?.addEventListener('click', () => addCalculatorRow());
currencySelect?.addEventListener('change', () => {
  const nextCurrency = currencySelect.value;
  calculatorRows?.querySelectorAll('[data-field="monthlyCost"]').forEach((input) => {
    input.value = Math.round(convertAmount(Number(input.value || 0), currentCalculatorCurrency, nextCurrency));
  });
  currentCalculatorCurrency = nextCurrency;
  updateTotals();
});

document.querySelectorAll('[data-slider]').forEach((slider) => {
  const track = slider.querySelector('.slider-track');
  const slides = Array.from(track?.querySelectorAll('figure') || []);
  const prevButton = slider.querySelector('[data-slider-prev]');
  const nextButton = slider.querySelector('[data-slider-next]');
  const current = slider.querySelector('[data-slider-current]');
  const total = slider.querySelector('[data-slider-total]');
  let autoplayId;

  if (!track || slides.length === 0) return;

  if (total) total.textContent = String(slides.length);

  const updateStatus = () => {
    const index = Math.round(track.scrollLeft / track.clientWidth);
    if (current) current.textContent = String(Math.min(index + 1, slides.length));
  };

  const moveTo = (direction) => {
    const index = Math.round(track.scrollLeft / track.clientWidth);
    const nextIndex = (index + direction + slides.length) % slides.length;
    track.scrollTo({ left: nextIndex * track.clientWidth, behavior: 'smooth' });
  };

  const stopAutoplay = () => {
    if (autoplayId) {
      window.clearInterval(autoplayId);
      autoplayId = null;
    }
  };

  const startAutoplay = () => {
    if (autoplayId) return;
    autoplayId = window.setInterval(() => moveTo(1), 4200);
  };

  prevButton?.addEventListener('click', () => moveTo(-1));
  nextButton?.addEventListener('click', () => moveTo(1));
  track.addEventListener('scroll', () => window.requestAnimationFrame(updateStatus), { passive: true });
  slider.addEventListener('mouseenter', stopAutoplay);
  slider.addEventListener('mouseleave', startAutoplay);
  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      stopAutoplay();
    } else {
      startAutoplay();
    }
  });
  window.addEventListener('resize', updateStatus);
  updateStatus();
  startAutoplay();
});
