<?php
$pageTitle = 'Megh Mitr Case Study | Managix Technology';
$pageDescription = 'Dedicated case study for Megh Mitr, a weather-based crop advisory mobile app and CMS built by Managix Technology for farmers, agromet scientists and the Agriculture Department.';
$activePage = 'portfolio';
include __DIR__ . '/partials/header.php';
?>
    <main>
      <section class="page-hero">
        <div class="page-hero-inner">
          <p class="eyebrow">Case Study | Megh Mitr</p>
          <h1>Weather-based crop advisory platform for farmers and agriculture teams.</h1>
          <p>Managix developed Megh Mitr as a mobile application and CMS ecosystem under the Meghdoot scheme to deliver location-aware weather forecasts, crop advisories, feedback collection and department-level advisory management for the farming community.</p>
          <div class="hero-actions">
            <a class="button button-primary" href="contact">Build an Agriculture Platform</a>
            <a class="button button-ghost" href="#mobile-experience">View App Screens</a>
            <a class="button button-ghost" href="portfolio">Back to Portfolio</a>
          </div>
        </div>
      </section>

      <section class="section case-study">
        <div class="case-summary">
          <div><span>Client / Program</span><strong>Department of Agriculture, Government of Bihar</strong></div>
          <div><span>Scheme</span><strong>Meghdoot Weather-Based Crop Advisories</strong></div>
          <div><span>Platforms</span><strong>Android App and CMS Portal</strong></div>
          <div><span>Users</span><strong>Farmers, Agromet Scientists and Admin Teams</strong></div>
          <div><span>Stack</span><strong>MEAN, Ionic, MongoDB and REST APIs</strong></div>
          <div><span>Delivery</span><strong>6 Agile Sprints of 2 Weeks Each</strong></div>
        </div>

        <div class="project-media mobile-showcase" id="mobile-experience">
          <figure>
            <img src="assets/projects/megh-mitr/megh-mitr-weather-forecast.jpg" alt="Megh Mitr mobile app weather forecast screen in Hindi" />
            <figcaption>Weather forecast screen showing district, block and panchayat-level forecast information for farmers.</figcaption>
          </figure>
          <figure>
            <img src="assets/projects/megh-mitr/megh-mitr-advisory.jpg" alt="Megh Mitr mobile app crop advisory screen in Hindi" />
            <figcaption>Weather-based crop advisory screen with farmer guidance, advisory dates and Hindi-first communication.</figcaption>
          </figure>
        </div>

        <div class="server-landscape-panel megh-flow-panel">
          <div class="server-landscape-copy">
            <p class="eyebrow">System Flow</p>
            <h2>Forecast intelligence, crop advisories and farmer feedback connected in one loop.</h2>
            <p>The platform connects weather forecast data from IMD/NWP models, a CMS portal for agriculture and agrometeorology teams, crop-level advisory publishing, push notifications, farmer registration and app-based feedback so decisions can move from experts to farmers and back to the department.</p>
            <div class="feature-list">
              <span>IMD Forecast API</span>
              <span>CMS Portal</span>
              <span>Crop-Level Advisory</span>
              <span>Push Notifications</span>
              <span>Farmer Mobile App</span>
              <span>Feedback Reports</span>
            </div>
          </div>
          <div class="megh-flow-diagram" aria-label="Megh Mitr platform flow diagram">
            <div class="flow-node">Weather Forecast API<br><small>Panchayat-level weather data</small></div>
            <div class="flow-link">→</div>
            <div class="flow-node">CMS Portal<br><small>Agromet scientists publish advisories</small></div>
            <div class="flow-link">→</div>
            <div class="flow-node">Megh Mitr App<br><small>Farmers view forecasts and guidance</small></div>
            <div class="flow-link">→</div>
            <div class="flow-node">Feedback Analytics<br><small>Department reviews response data</small></div>
          </div>
        </div>

        <div class="case-grid">
          <article class="card">
            <p class="eyebrow">Problem</p>
            <h2>Farmers needed timely, local and crop-specific decision support.</h2>
            <p>Agriculture teams needed a way to publish weather-based crop advisories at block and crop level, while farmers needed simple access to location-specific forecasts and actionable recommendations in a mobile-first format.</p>
          </article>
          <article class="card">
            <p class="eyebrow">Solution</p>
            <h2>Managix built a connected CMS and Android advisory app.</h2>
            <p>We delivered a CMS portal for advisory management, farmer records, feedback forms, reports and admin access, along with a Hindi-first mobile app for registration, weather forecast viewing, advisory reading, crop filtering, feedback and user settings.</p>
          </article>
          <article class="card">
            <p class="eyebrow">Mobile Application</p>
            <h2>Farmer registration, location-aware forecasts and advisory access.</h2>
            <p>The Android app allows farmers to register using personal and location details such as district, block and gram panchayat, view forecasts for their area and receive advisories relevant to their crops and weather conditions.</p>
          </article>
          <article class="card">
            <p class="eyebrow">CMS Portal</p>
            <h2>Operational control for agriculture and agromet users.</h2>
            <p>The CMS supports dashboards, advisory menu, feedback menu, farmer list, admin user list, crop management, manual advisory entry, AI-based advisory generation and push notifications to farmers.</p>
          </article>
          <article class="card">
            <p class="eyebrow">Advisory Intelligence</p>
            <h2>Crop-level advisory structure with AI-assisted generation.</h2>
            <p>The advisory database was redesigned to map advisory content with crop type and block-level needs, enabling farmers to filter advisories based on crops of interest while CMS users could generate or manually add advisories.</p>
          </article>
          <article class="card">
            <p class="eyebrow">Feedback System</p>
            <h2>Two-way communication between farmers and the department.</h2>
            <p>Feedback forms helped the department understand advisory usefulness and farmer response. The CMS provides feedback reports and analytics so teams can evaluate how advisories perform on the ground.</p>
          </article>
        </div>

        <div class="feature-panel">
          <p class="eyebrow">Technology Stack</p>
          <h2>Built with modern web, mobile and API architecture.</h2>
          <p>Megh Mitr used Ubuntu 18, NodeJS, ExpressJS, Angular, Ionic Framework, Angular Native, MongoDB, CKEditor for content creation, RESTful APIs and JSON-based data exchange between the server, CMS and mobile app.</p>
          <div class="feature-list">
            <span>Ubuntu 18</span>
            <span>NodeJS</span>
            <span>ExpressJS</span>
            <span>Angular</span>
            <span>Ionic Framework</span>
            <span>Angular Native</span>
            <span>MongoDB</span>
            <span>RESTful APIs</span>
            <span>JSON</span>
            <span>CKEditor</span>
          </div>
        </div>

        <div class="feature-panel">
          <p class="eyebrow">Validated Workflows</p>
          <h2>UAT covered both the admin portal and mobile application.</h2>
          <p>The UAT workbook documented pass-tested workflows for the admin portal and mobile app, including login, dashboard, advisory list, add advisory, AI-based advisory generation, farmer list, admin user management, crop management, logout, splash screen, notification routing, registration, weather forecast, advisory viewing and crop filters.</p>
          <div class="feature-list">
            <span>Admin Login</span>
            <span>Dashboard</span>
            <span>Add Advisory</span>
            <span>Generate Advisory</span>
            <span>Farmer List</span>
            <span>User Management</span>
            <span>Crops</span>
            <span>Mobile Registration</span>
            <span>Weather Forecast</span>
            <span>Advisory Screen</span>
            <span>Crop Filter</span>
            <span>Notifications</span>
          </div>
        </div>

        <div class="timeline">
          <article class="card"><span class="number">01</span><h3>Research and UX</h3><p>User context, stakeholder needs, personas, site maps, screen flows, wireframes and high-fidelity designs were created for farmer and department workflows.</p></article>
          <article class="card"><span class="number">02</span><h3>CMS Development</h3><p>The admin CMS was developed for advisory creation, feedback forms, farmer records, admin users, crops, reporting and push notification operations.</p></article>
          <article class="card"><span class="number">03</span><h3>Mobile App Build</h3><p>The farmer app was built for registration, district-block-panchayat context, weather forecasts, crop advisories, feedback and user settings.</p></article>
          <article class="card"><span class="number">04</span><h3>Testing and Delivery</h3><p>The project was delivered through agile sprint cycles with code review, testing, UAT scripts, documentation and completion reporting.</p></article>
        </div>

        <div class="outcome-panel">
          <p class="eyebrow">Outcome</p>
          <h2>A farmer-facing climate resilience platform with department-level control.</h2>
          <p>Megh Mitr helped bridge the gap between agronomists, agriculture teams and farmers by delivering weather forecasts, early warnings, crop-specific advisories, push notifications and feedback workflows through a connected mobile and CMS ecosystem.</p>
          <div class="hero-actions">
            <a class="button button-primary" href="assets/projects/megh-mitr/megh-mitr-v2-completion-report.pdf" download>Download Completion Report</a>
            <a class="button button-ghost" href="assets/projects/megh-mitr/megh-mitr-user-manual-ui.pdf" download>Download User Manual</a>
            <a class="button button-ghost" href="contact">Discuss an AgriTech Platform</a>
          </div>
        </div>
      </section>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
