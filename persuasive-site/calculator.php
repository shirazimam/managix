<?php
$pageTitle = 'Project Cost Calculator | Managix Technology';
$pageDescription = 'Estimate project team cost by role, monthly rate, duration and currency with Managix Technology.';
$activePage = 'calculator';
include __DIR__ . '/partials/header.php';
?>
    <main>
      <section class="page-hero">
        <div class="page-hero-inner" data-reveal>
          <p class="eyebrow">Project cost calculator</p>
          <h1>Build a quick team budget in minutes.</h1>
          <p>Select resources, adjust monthly cost, enter duration and instantly estimate the total project investment in INR or USD.</p>
          <div class="hero-actions">
            <a class="button button-primary" href="#calculator">Start Calculating</a>
            <a class="button button-ghost" href="contact.php">Discuss With Managix</a>
          </div>
        </div>
      </section>

      <section class="section calculator-section" id="calculator" data-reveal>
        <div class="section-heading">
          <div>
            <p class="eyebrow">Team estimator</p>
            <h2>Choose roles. Set months. See the project cost.</h2>
          </div>
          <p>Default rates use the ranges you provided. You can edit any monthly cost to match the exact seniority or engagement model.</p>
        </div>

        <div class="how-to-use">
          <article class="card"><span class="number">1</span><h3>Select resources</h3><p>Choose each team member role from the dropdown. Add more rows when the project needs more people.</p></article>
          <article class="card"><span class="number">2</span><h3>Set months</h3><p>Enter how many months each resource will work. The row total updates instantly.</p></article>
          <article class="card"><span class="number">3</span><h3>Switch currency</h3><p>Use INR or USD. USD estimates use the fixed conversion of 1 USD = INR 95.</p></article>
        </div>

        <div class="calculator-shell">
          <div class="calculator-toolbar">
            <label>
              Currency
              <select id="currencySelect" aria-label="Currency">
                <option value="INR">INR</option>
                <option value="USD">USD</option>
              </select>
            </label>
            <button class="button button-dark" type="button" id="addRow">Add Resource</button>
          </div>

          <div class="calculator-table-wrap">
            <table class="calculator-table">
              <thead>
                <tr>
                  <th>Resource</th>
                  <th>Monthly Cost</th>
                  <th>No. of Months</th>
                  <th>Total Cost</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="calculatorRows"></tbody>
            </table>
          </div>

          <div class="calculator-summary">
            <div>
              <span>Total Project Cost</span>
              <strong id="projectTotal">INR 0</strong>
            </div>
            <p id="currencyNote">Disclaimer: The above costing is an estimate and final cost will depend on the actual requirements. Currency conversion assumes 1 USD = INR 95.</p>
          </div>
        </div>

        <div class="rate-grid">
          <article class="card"><h3>Project Manager</h3><p>(₹75,000 to ₹120,000 per month)</p></article>
          <article class="card"><h3>UI Designer</h3><p>(₹40,000 to ₹90,000 per month)</p></article>
          <article class="card"><h3>Developer</h3><p>(₹80,000 to ₹120,000 per month)</p></article>
          <article class="card"><h3>Sr Developer</h3><p>(₹100,000 to ₹150,000 per month)</p></article>
        </div>
      </section>

      <section class="cta-panel" data-reveal>
        <p class="eyebrow">Need a real proposal?</p>
        <h2>The calculator gives a fast estimate. Managix can turn it into a delivery plan.</h2>
        <p>Share your estimated team mix with us and we can refine the scope, timeline, milestones and engagement model.</p>
        <div class="hero-actions">
          <a class="button button-primary" href="contact.php">Request Proposal</a>
          <a class="button button-ghost" href="services.php">Review Services</a>
        </div>
      </section>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
