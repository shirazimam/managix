<?php
session_start();
$captchaA = random_int(2, 9);
$captchaB = random_int(2, 9);
$_SESSION['contact_captcha_answer'] = (string) ($captchaA + $captchaB);

$pageTitle = 'Contact | Managix Technology';
$pageDescription = 'Contact Managix Technology for enterprise software, GIS, cloud, mobile apps, dashboards, digital marketing and technology consulting.';
$activePage = 'contact';
include __DIR__ . '/partials/header.php';
?>
    <main>
      <section class="page-hero">
        <div class="page-hero-inner" data-reveal>
          <p class="eyebrow">Start the conversation</p>
          <h1>Tell us what you want to build. We will help you make it real.</h1>
          <p>Whether your priority is GIS, enterprise software, cloud, mobile, dashboards, payroll, disaster systems or digital growth, Managix is ready to help you move.</p>
        </div>
      </section>

      <section class="section contact-panel" data-reveal>
        <div>
          <p class="eyebrow">Contact Managix</p>
          <h2>Bring us your toughest digital challenge.</h2>
          <p>We work with leadership teams, departments, enterprises and product owners who need technology that can carry real responsibility.</p>
          <div class="contact-details">
            <a href="mailto:info@managixglobal.com">info@managixglobal.com</a>
            <a href="mailto:hello@managixglobal.com">hello@managixglobal.com</a>
            <a href="tel:+919160628999">+91 91606 28999</a>
            <a href="tel:+917799488861">+91 77994 88861</a>
            <span>9th Floor, Sattva Magnus Commercial Block, Hyderabad - 500008</span>
            <span>602, Ashiana Chambers, Exhibition Road, Patna - 800001</span>
          </div>
        </div>
        <form class="contact-form" action="contact-submit.php" method="post">
          <label>Name<input name="name" autocomplete="name" required /></label>
          <label>Work email<input type="email" name="email" autocomplete="email" required /></label>
          <label>Phone<input name="phone" autocomplete="tel" /></label>
          <label class="form-hidden">Company website<input name="website" tabindex="-1" autocomplete="off" /></label>
          <label>
            Priority
            <select name="service">
              <option>Enterprise software</option>
              <option>GIS, mapping or data collection</option>
              <option>Cloud and infrastructure</option>
              <option>Mobile app development</option>
              <option>Dashboards and analytics</option>
              <option>Digital marketing and SEO</option>
              <option>Disaster management technology</option>
              <option>Other</option>
            </select>
          </label>
          <label>Message<textarea name="message" rows="6" required></textarea></label>
          <label>Security check: What is <?= $captchaA ?> + <?= $captchaB ?>?<input name="captcha" inputmode="numeric" autocomplete="off" required /></label>
          <button class="button button-primary" type="submit">Send Project Enquiry</button>
        </form>
      </section>

      <section class="section" data-reveal>
        <div class="section-heading"><div><p class="eyebrow">Clients</p><h2>Trusted by organizations with serious digital goals.</h2></div><p>From maps data to public systems, we build for work that needs confidence.</p></div>
        <div class="client-grid">
          <div class="client-logo"><img src="assets/clients/tech-mahindra.png" alt="Tech Mahindra" /><span>Tech Mahindra</span></div>
          <div class="client-logo"><img src="assets/clients/ministry-of-rural-development.png" alt="Ministry of Rural Development" /><span>Ministry of Rural Development</span></div>
          <div class="client-logo"><img src="assets/clients/disaster-management-bihar.jpeg" alt="Disaster Management Bihar" /><span>Disaster Management Bihar</span></div>
          <div class="client-logo"><img src="assets/clients/adpc-logo.jpg" alt="ADPC" /><span>ADPC</span></div>
          <div class="client-logo"><img src="assets/clients/twerlo-ai.png" alt="Twerlo AI" /><span>Twerlo AI</span></div>
        </div>
      </section>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
