<?php
$pageTitle = 'BCIMS Case Study | Managix Technology';
$pageDescription = 'Dedicated case study for BCIMS, the Bihar COVID Information Management System developed by Managix Technology for traveler monitoring, quarantine tracking, Chakshu mobile field verification and Garuda analytics.';
$activePage = 'portfolio';
include __DIR__ . '/partials/header.php';
?>
    <main>
      <section class="page-hero">
        <div class="page-hero-inner">
          <p class="eyebrow">Case Study | BCIMS</p>
          <h1>Bihar COVID Information Management System for statewide traveler and quarantine monitoring.</h1>
          <p>Managix developed BCIMS for the Disaster Management Department, Government of Bihar, to support one of the largest pandemic response operations in the state: traveler registration, quarantine monitoring, field verification, complaint management, geotagged reports and real-time decision dashboards.</p>
          <div class="hero-actions">
            <a class="button button-primary" href="contact">Build a GovTech Platform</a>
            <a class="button button-ghost" href="portfolio">Back to Portfolio</a>
          </div>
        </div>
      </section>

      <section class="section case-study">
        <div class="case-summary">
          <div><span>Client</span><strong>Disaster Management Department, Government of Bihar</strong></div>
          <div><span>Category</span><strong>GovTech and Pandemic Response</strong></div>
          <div><span>Platforms</span><strong>BCIMS, Chakshu and Garuda</strong></div>
          <div><span>Capability</span><strong>GIS, Geotagging and Analytics</strong></div>
          <div><span>Users</span><strong>State, District and Field Teams</strong></div>
          <div><span>Deployment</span><strong>Cloud and Bihar SDC</strong></div>
        </div>

        <div class="project-media">
          <figure>
            <img src="assets/projects/bcims/bcims-chakshu-garuda-flow.jpg" alt="BCIMS Chakshu and Garuda system flow diagram" />
            <figcaption>System flow connecting BCIMS traveler data, Chakshu mobile monitoring and Garuda analytics.</figcaption>
          </figure>
          <figure>
            <img src="assets/projects/bcims/bcims-garuda-dashboard.jpg" alt="Garuda dashboard showing traveler monitoring analytics" />
            <figcaption>Garuda dashboard showing monitoring analytics, field verification metrics and operational status.</figcaption>
          </figure>
          <figure>
            <img src="assets/projects/bcims/bcims-dashboard.jpg" alt="BCIMS dashboard showing traveler registration and quarantine data" />
            <figcaption>BCIMS dashboard showing traveler registration, quarantine, travel category and symptom data.</figcaption>
          </figure>
          <figure>
            <img src="assets/projects/bcims/bcims-geotagged-report.jpg" alt="Geotagged BCIMS monitoring report with map verification" />
            <figcaption>Geotagged monitoring report connecting field verification records with map-based location evidence.</figcaption>
          </figure>
          <figure>
            <img src="assets/projects/bcims/bcims-chakshu-working.jpg" alt="BCIMS Chakshu and Garuda working process diagram" />
            <figcaption>Operational workflow from traveler input to Chakshu field monitoring, reports and Garuda dashboards.</figcaption>
          </figure>
        </div>

        <div class="case-grid">
          <article class="card">
            <p class="eyebrow">Problem</p>
            <h2>Bihar needed one system to manage a fast-moving public health operation.</h2>
            <p>The state had to track travelers returning from different locations, monitor home and institutional quarantine, capture symptoms, coordinate field verification, manage complaints and give district and state officials reliable information for policy decisions.</p>
          </article>
          <article class="card">
            <p class="eyebrow">Solution</p>
            <h2>Managix built an integrated BCIMS, Chakshu and Garuda ecosystem.</h2>
            <p>We delivered a connected platform with district data-entry workflows, mobile field monitoring, geotagging, dashboards, complaint management, reporting, analytics and role-based access for teams working from field level to state command level.</p>
          </article>
          <article class="card">
            <p class="eyebrow">BCIMS Core Platform</p>
            <h2>Structured data capture for every traveler record.</h2>
            <p>BCIMS recorded name, age, mobile number, district, block, panchayat, travel origin, travel date, traveler category, symptom status, quarantine status and monitoring history so operations teams could work from a single source of truth.</p>
          </article>
          <article class="card">
            <p class="eyebrow">Chakshu Mobile App</p>
            <h2>Field verification with geotagged monitoring evidence.</h2>
            <p>Chakshu enabled field workers to visit assigned travelers, verify whether they were at home, record symptoms, update quarantine status, capture location evidence and send reports back to district and state dashboards in real time.</p>
          </article>
          <article class="card">
            <p class="eyebrow">Garuda Analytics</p>
            <h2>Operational intelligence for district and state leadership.</h2>
            <p>Garuda turned monitoring data into dashboards for compliance, symptoms, field activity, exceptions, district performance and geotagged reports, giving decision makers a faster view of what was happening on the ground.</p>
          </article>
          <article class="card">
            <p class="eyebrow">Complaint Management</p>
            <h2>Public requests and escalations organized in one workflow.</h2>
            <p>The complaint system supported records from RC Bihar, LC Bihar, CM Office Bihar, DMD Bihar and district control rooms, helping officials respond to migrant, quarantine and public-assistance requests with better traceability.</p>
          </article>
          <article class="card">
            <p class="eyebrow">Technology Stack</p>
            <h2>Built on proven web, mobile and data infrastructure.</h2>
            <p>The solution used PHP CodeIgniter, AngularJS, Bootstrap, JavaScript, jQuery, REST APIs, JSON, MySQL, MariaDB, Ubuntu Linux, SSL, cloud servers and Bihar State Data Center application and database servers.</p>
          </article>
          <article class="card">
            <p class="eyebrow">Delivery Method</p>
            <h2>Agile delivery with controlled releases and issue tracking.</h2>
            <p>The project was managed through agile development practices, Mantis issue tracking and Bitbucket repositories with development, staging and production branches to support fast delivery during a high-pressure public-health environment.</p>
          </article>
        </div>

        <div class="feature-panel">
          <p class="eyebrow">System Capabilities</p>
          <h2>A statewide pandemic-response platform with field intelligence.</h2>
          <div class="feature-list">
            <span>Traveler registration</span>
            <span>Home quarantine tracking</span>
            <span>Camp quarantine tracking</span>
            <span>Symptom monitoring</span>
            <span>Geotagged field visits</span>
            <span>District dashboards</span>
            <span>State-level analytics</span>
            <span>Complaint management</span>
            <span>Role-based access</span>
            <span>REST API data exchange</span>
            <span>Daily monitoring reports</span>
            <span>Map-based verification</span>
          </div>
        </div>

        <div class="timeline">
          <article class="card"><span class="number">01</span><h3>Data Entry</h3><p>Traveler information is entered in BCIMS at district level with identity, location, travel and health-status details.</p></article>
          <article class="card"><span class="number">02</span><h3>Assignment</h3><p>Travelers are assigned to field workers at district, block and panchayat level for daily monitoring and verification.</p></article>
          <article class="card"><span class="number">03</span><h3>Field Monitoring</h3><p>Chakshu is used to check presence, record symptoms, capture geotagged evidence and update quarantine status.</p></article>
          <article class="card"><span class="number">04</span><h3>Analytics</h3><p>BCIMS and Garuda dashboards provide reports for district teams, DMD leadership and state-level decision support.</p></article>
        </div>

        <div class="outcome-panel">
          <p class="eyebrow">Outcome</p>
          <h2>A mission-critical GovTech platform for statewide COVID response.</h2>
          <p>BCIMS helped the Government of Bihar digitally monitor returning travelers, strengthen quarantine compliance, coordinate field teams, generate district and state reports, respond to public requests and make data-driven decisions during an urgent public-health crisis.</p>
          <div class="hero-actions">
            <a class="button button-primary" href="assets/projects/bcims/garuda-app-and-bcims.pdf" download>Download Garuda and BCIMS Deck</a>
            <a class="button button-ghost" href="contact">Discuss a Similar Platform</a>
          </div>
        </div>
      </section>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
