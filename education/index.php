<?php
$pageTitle = 'Taito, The Skills Lab | Managix Education';
$pageDescription = 'Taito, The Skills Lab is the education division of Managix Global, offering Finnish STEAM CPD workshops, teacher development, university admissions and career counselling.';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
<?php include __DIR__ . '/../partials/seo.php'; ?>
    <link rel="icon" type="image/png" href="../technology/assets/brand/fav.png?v=20260602" />
    <link rel="apple-touch-icon" href="../technology/assets/brand/fav.png?v=20260602" />
    <style>
      :root {
        --navy: #163462;
        --navy-2: #102544;
        --navy-3: #0a1629;
        --gold: #d97706;
        --gold-2: #f59e0b;
        --paper: #f6f8fc;
        --white: #ffffff;
        --ink: #0d1829;
        --muted: #66758a;
        --line: #d9e2ef;
        --blue: #2563eb;
        --teal: #0d9488;
        --green: #059669;
        --violet: #7c3aed;
        --radius: 8px;
        --shadow: 0 22px 56px rgba(10, 22, 41, 0.14);
      }

      * {
        box-sizing: border-box;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        margin: 0;
        background: var(--paper);
        color: var(--ink);
        font-family: "Inter", "Segoe UI", Roboto, Arial, sans-serif;
        line-height: 1.65;
      }

      a {
        color: inherit;
        text-decoration: none;
      }

      img {
        display: block;
        max-width: 100%;
      }

      .site-header {
        position: sticky;
        top: 0;
        z-index: 20;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 22px;
        padding: 16px clamp(20px, 5vw, 68px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        background: rgba(10, 22, 41, 0.94);
        backdrop-filter: blur(16px);
      }

      .brand {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        color: var(--white);
        font-weight: 900;
      }

      .brand img {
        width: 156px;
      }

      .brand span {
        display: inline-flex;
        padding: 6px 10px;
        border: 1px solid rgba(245, 158, 11, 0.34);
        border-radius: var(--radius);
        color: #f7c979;
        font-size: 0.74rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
      }

      .site-nav {
        display: flex;
        align-items: center;
        gap: 20px;
        color: #dce8f7;
        font-size: 0.92rem;
        font-weight: 800;
      }

      .site-nav a:hover {
        color: #f7c979;
      }

      .nav-cta,
      .button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 44px;
        padding: 11px 17px;
        border: 1px solid transparent;
        border-radius: var(--radius);
        font-weight: 900;
        line-height: 1.2;
        transition: transform 180ms ease, box-shadow 180ms ease, background 180ms ease;
      }

      .nav-cta,
      .button-primary {
        background: linear-gradient(135deg, var(--gold), var(--gold-2));
        color: #15110a;
        box-shadow: 0 14px 32px rgba(217, 119, 6, 0.24);
      }

      .button-secondary {
        border-color: rgba(255, 255, 255, 0.2);
        background: rgba(255, 255, 255, 0.08);
        color: var(--white);
      }

      .button-light {
        border-color: var(--line);
        background: var(--white);
        color: var(--ink);
      }

      .button:hover,
      .nav-cta:hover {
        transform: translateY(-2px);
      }

      .hero {
        position: relative;
        overflow: hidden;
        background:
          linear-gradient(90deg, rgba(10, 22, 41, 0.94), rgba(16, 37, 68, 0.82), rgba(22, 52, 98, 0.58)),
          url("https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=2200&q=82") center / cover;
        color: var(--white);
      }

      .hero::before {
        position: absolute;
        inset: 0;
        background:
          linear-gradient(90deg, rgba(245, 158, 11, 0.18) 1px, transparent 1px),
          linear-gradient(180deg, rgba(255, 255, 255, 0.07) 1px, transparent 1px);
        background-size: 58px 58px;
        content: "";
        opacity: 0.28;
      }

      .hero-inner,
      .section,
      .footer-inner {
        width: min(1180px, calc(100% - 42px));
        margin: 0 auto;
      }

      .hero-inner {
        position: relative;
        display: grid;
        grid-template-columns: minmax(0, 0.9fr) minmax(360px, 0.74fr);
        gap: clamp(34px, 6vw, 76px);
        align-items: center;
        min-height: 720px;
        padding: 96px 0;
      }

      .eyebrow {
        margin: 0 0 12px;
        color: #f7c979;
        font-size: 0.76rem;
        font-weight: 900;
        letter-spacing: 0.1em;
        text-transform: uppercase;
      }

      h1,
      h2,
      h3,
      p {
        margin-top: 0;
      }

      h1 {
        max-width: 760px;
        margin-bottom: 22px;
        font-size: clamp(3rem, 7vw, 6.5rem);
        font-weight: 950;
        letter-spacing: 0;
        line-height: 0.95;
      }

      h2 {
        margin-bottom: 14px;
        font-size: clamp(2rem, 3vw, 3rem);
        line-height: 1.14;
      }

      h3 {
        margin-bottom: 10px;
        font-size: 1.16rem;
        line-height: 1.3;
      }

      .hero-copy > p:not(.eyebrow) {
        max-width: 690px;
        color: #dbeafe;
        font-size: 1.12rem;
      }

      .hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 30px;
      }

      .taito-card {
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.13);
        border-radius: var(--radius);
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.16), rgba(255, 255, 255, 0.06));
        box-shadow: 0 28px 70px rgba(0, 0, 0, 0.32);
        backdrop-filter: blur(16px);
      }

      .taito-card::before,
      .taito-card::after {
        position: absolute;
        right: 0;
        left: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--gold), var(--gold-2), var(--gold));
        content: "";
      }

      .taito-card::before {
        top: 0;
      }

      .taito-card::after {
        bottom: 0;
      }

      .taito-brand {
        padding: 30px;
      }

      .taito-brand strong {
        display: block;
        margin-bottom: 8px;
        color: var(--white);
        font-size: clamp(3rem, 7vw, 4.4rem);
        font-weight: 950;
        letter-spacing: 0;
        line-height: 0.94;
      }

      .gold-line {
        width: 150px;
        height: 4px;
        margin-bottom: 12px;
        border-radius: 999px;
        background: linear-gradient(90deg, var(--gold), transparent);
      }

      .taito-brand span {
        display: block;
        color: #bfdbfe;
        font-weight: 800;
      }

      .taito-brand p {
        margin: 16px 0 0;
        color: #bac9dc;
      }

      .division-badge {
        display: inline-flex;
        margin-top: 18px;
        padding: 8px 12px;
        border-radius: var(--radius);
        background: var(--gold);
        color: var(--white);
        font-size: 0.76rem;
        font-weight: 900;
      }

      .section {
        padding: 86px 0;
      }

      .section-heading {
        display: grid;
        grid-template-columns: minmax(0, 0.9fr) minmax(280px, 0.55fr);
        gap: 34px;
        align-items: end;
        margin-bottom: 34px;
      }

      .section-heading p:not(.eyebrow),
      .card p,
      .feature-panel p,
      .contact-card p,
      .list li {
        color: var(--muted);
      }

      .service-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 14px;
      }

      .service-card,
      .feature-panel,
      .contact-card,
      .mini-card {
        border: 1px solid var(--line);
        border-radius: var(--radius);
        background: var(--white);
        box-shadow: var(--shadow);
      }

      .service-card {
        position: relative;
        overflow: hidden;
        min-height: 230px;
        padding: 22px 18px;
        transition: transform 180ms ease, box-shadow 180ms ease;
      }

      .service-card::before {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        height: 4px;
        background: var(--accent, var(--gold));
        content: "";
      }

      .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 28px 62px rgba(10, 22, 41, 0.18);
      }

      .service-mark {
        display: inline-flex;
        width: 46px;
        height: 46px;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        border-radius: var(--radius);
        background: var(--accent, var(--gold));
        color: var(--white);
        font-size: 0.82rem;
        font-weight: 950;
      }

      .status {
        display: inline-flex;
        margin-top: 12px;
        padding: 5px 10px;
        border: 1px solid rgba(217, 119, 6, 0.26);
        border-radius: 999px;
        background: rgba(245, 158, 11, 0.1);
        color: #a75500;
        font-size: 0.72rem;
        font-weight: 900;
        letter-spacing: 0.06em;
        text-transform: uppercase;
      }

      .split {
        display: grid;
        grid-template-columns: minmax(0, 0.9fr) minmax(320px, 0.72fr);
        gap: 22px;
        align-items: start;
      }

      .feature-panel {
        overflow: hidden;
      }

      .feature-head {
        padding: 30px;
        background:
          linear-gradient(90deg, rgba(255, 255, 255, 0.08) 1px, transparent 1px),
          linear-gradient(180deg, rgba(255, 255, 255, 0.06) 1px, transparent 1px),
          linear-gradient(135deg, var(--navy-2), var(--navy));
        background-size: 36px 36px, 36px 36px, auto;
        color: var(--white);
      }

      .feature-head p {
        color: #dbeafe;
      }

      .feature-body {
        padding: 30px;
      }

      .list {
        display: grid;
        gap: 12px;
        padding: 0;
        margin: 0;
        list-style: none;
      }

      .list li {
        display: grid;
        grid-template-columns: 10px 1fr;
        gap: 12px;
        align-items: start;
      }

      .list li::before {
        width: 8px;
        height: 8px;
        margin-top: 9px;
        border-radius: 999px;
        background: var(--accent, var(--gold));
        content: "";
      }

      .pathway-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
      }

      .session-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
      }

      .mini-card {
        padding: 24px;
      }

      .mini-card strong {
        display: block;
        margin-bottom: 10px;
        color: var(--navy);
        font-size: 1.05rem;
      }

      .price-strip {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 14px;
        margin-top: 24px;
      }

      .price-item {
        padding: 18px;
        border: 1px solid var(--line);
        border-radius: var(--radius);
        background: #f8fbff;
      }

      .price-item span {
        display: block;
        margin-bottom: 4px;
        color: var(--gold);
        font-size: 0.78rem;
        font-weight: 900;
        letter-spacing: 0.08em;
        text-transform: uppercase;
      }

      .price-item strong {
        display: block;
        color: var(--navy);
        font-size: 1.2rem;
      }

      .dark-band {
        background:
          linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
          linear-gradient(180deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px),
          linear-gradient(135deg, var(--navy-3), var(--navy-2));
        background-size: 54px 54px, 54px 54px, auto;
        color: var(--white);
      }

      .dark-band .section-heading p:not(.eyebrow),
      .dark-band .mini-card p {
        color: #c6d4e5;
      }

      .dark-band .mini-card {
        border-color: rgba(255, 255, 255, 0.12);
        background: rgba(255, 255, 255, 0.07);
        box-shadow: none;
      }

      .dark-band .mini-card strong {
        color: var(--white);
      }

      .contact-card {
        display: grid;
        grid-template-columns: minmax(0, 1fr) auto;
        gap: 28px;
        align-items: center;
        padding: clamp(28px, 5vw, 48px);
      }

      .contact-links {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 20px;
      }

      .contact-links a,
      .contact-links span {
        display: inline-flex;
        padding: 9px 12px;
        border: 1px solid var(--line);
        border-radius: var(--radius);
        background: #f8fbff;
        color: #33445b;
        font-weight: 800;
      }

      .form-panel {
        overflow: hidden;
        border: 1px solid var(--line);
        border-radius: var(--radius);
        background: var(--white);
        box-shadow: var(--shadow);
      }

      .form-panel iframe {
        display: block;
        width: 100%;
        min-height: 920px;
        border: 0;
        background: var(--white);
      }

      .site-footer {
        background: var(--navy-3);
        color: #b9c7d8;
      }

      .footer-inner {
        display: flex;
        justify-content: space-between;
        gap: 24px;
        padding: 34px 0;
        font-size: 0.92rem;
      }

      .footer-inner nav {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        font-weight: 800;
      }

      .reveal {
        opacity: 0;
        transform: translateY(18px);
        transition: opacity 700ms ease, transform 700ms ease;
      }

      .reveal.is-visible {
        opacity: 1;
        transform: translateY(0);
      }

      @media (max-width: 1040px) {
        .hero-inner,
        .section-heading,
        .split,
        .contact-card {
          grid-template-columns: 1fr;
        }

        .service-grid,
        .pathway-grid,
        .session-grid,
        .price-strip {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (max-width: 760px) {
        .site-header {
          position: static;
          align-items: flex-start;
          flex-direction: column;
        }

        .site-nav {
          width: 100%;
          flex-wrap: wrap;
          gap: 12px;
        }

        .hero-inner,
        .section,
        .footer-inner {
          width: min(100% - 28px, 1180px);
        }

        .hero-inner {
          min-height: auto;
          padding: 68px 0;
        }

        .service-grid,
        .pathway-grid,
        .session-grid,
        .price-strip {
          grid-template-columns: 1fr;
        }

        .footer-inner {
          flex-direction: column;
        }

        .form-panel iframe {
          min-height: 980px;
        }
      }
    </style>
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="../" aria-label="Managix Global home">
        <img src="../technology/assets/brand/managix-logo-light-base-colored.png" alt="Managix Global" />
        <span>Education</span>
      </a>
      <nav class="site-nav" aria-label="Education navigation">
        <a href="#services">Services</a>
        <a href="#teacher-cpd">Teacher CPD</a>
        <a href="#finnish-steam-cpd">CPD Sessions</a>
        <a href="#counselling">Admissions</a>
        <a href="#workshop-application">Apply</a>
        <a href="#contact">Contact</a>
        <a class="nav-cta" href="#workshop-application">Apply for Workshop</a>
      </nav>
    </header>

    <main>
      <section class="hero">
        <div class="hero-inner">
          <div class="hero-copy reveal">
            <p class="eyebrow">Education Division of Managix Global</p>
            <h1>TAITO</h1>
            <p>Taito, The Skills Lab helps learners, educators and institutions learn differently through Finnish STEAM CPD workshops, practical teacher development, international university guidance and future-ready education services.</p>
            <div class="hero-actions">
              <a class="button button-primary" href="#services">Explore Services</a>
              <a class="button button-secondary" href="#workshop-application">Apply for Workshop</a>
            </div>
          </div>

          <aside class="taito-card reveal" aria-label="Taito brand summary">
            <div class="taito-brand">
              <strong>TAITO</strong>
              <div class="gold-line"></div>
              <span>The Skills Lab</span>
              <p>Learn Differently. Empowering learners, educators and institutions across the world.</p>
              <div class="division-badge">Education Division of Managix Global</div>
            </div>
          </aside>
        </div>
      </section>

      <section class="section" id="services">
        <div class="section-heading reveal">
          <div>
            <p class="eyebrow">Our Services</p>
            <h2>Practical education support for classrooms, careers and institutions.</h2>
          </div>
          <p>Taito begins with Finnish STEAM CPD workshops for teachers in Saudi Arabia, teacher development for international schools, and university admissions with career counselling. Additional services are being developed for corporate training, education consultancy and school accreditation.</p>
        </div>

        <div class="service-grid">
          <article class="service-card reveal" style="--accent: var(--teal);">
            <div class="service-mark">CPD</div>
            <h3>Teacher CPD</h3>
            <p>Curriculum-aligned professional development for international school teachers.</p>
          </article>
          <article class="service-card reveal" style="--accent: var(--blue);">
            <div class="service-mark">CT</div>
            <h3>Corporate Training</h3>
            <p>IT and business professional development programs for working teams.</p>
            <span class="status">Coming Soon</span>
          </article>
          <article class="service-card reveal" style="--accent: var(--violet);">
            <div class="service-mark">EC</div>
            <h3>Education Consultancy</h3>
            <p>Strategic support for schools, learning teams and education institutions.</p>
            <span class="status">Coming Soon</span>
          </article>
          <article class="service-card reveal" style="--accent: var(--green);">
            <div class="service-mark">UC</div>
            <h3>University Admissions and Career Counselling</h3>
            <p>British Council certified guidance for international university pathways.</p>
          </article>
          <article class="service-card reveal" style="--accent: var(--gold);">
            <div class="service-mark">SA</div>
            <h3>School Accreditation</h3>
            <p>International accreditation support for schools and institutions.</p>
            <span class="status">Coming Soon</span>
          </article>
        </div>
      </section>

      <section class="section" id="finnish-steam-cpd">
        <div class="section-heading reveal">
          <div>
            <p class="eyebrow">Finnish STEAM CPD</p>
            <h2>Subject-specific CPD workshops for teachers in Saudi Arabia.</h2>
          </div>
          <p>Designed for Science, Mathematics and English teachers at American and British curriculum international schools, these live online sessions focus on practical Finnish pedagogy applied to real classroom standards.</p>
        </div>

        <div class="session-grid">
          <article class="mini-card reveal">
            <strong>Science: Forces and Motion the Finnish Way</strong>
            <p>Transform concept lessons into authentic scientific investigations that develop curiosity, inquiry and scientific reasoning. Aligned with NGSS Force and Motion standards for Grades 3 to 7.</p>
          </article>
          <article class="mini-card reveal">
            <strong>Mathematics: Area and Measurement the Finnish Way</strong>
            <p>Practical strategies for building conceptual understanding and mathematical curiosity. Aligned with CCSS 3.MD.5 to 3.MD.7 for Grades 3 to 7.</p>
          </article>
          <article class="mini-card reveal">
            <strong>English: Collaborative Speaking the Finnish Way</strong>
            <p>Create low-pressure speaking opportunities that promote confidence, collaboration and meaningful communication for Arabic-speaking second language learners.</p>
          </article>
          <article class="mini-card reveal">
            <strong>English: Vocabulary the Finnish Way</strong>
            <p>Integrate STEAM into Greek and Latin root word lessons through hands-on discovery experiences that deepen word understanding, retention and language curiosity.</p>
          </article>
        </div>

        <div class="price-strip reveal">
          <div class="price-item">
            <span>Format</span>
            <strong>1.5 hours live online</strong>
          </div>
          <div class="price-item">
            <span>Individual</span>
            <strong>SAR 400 per teacher</strong>
          </div>
          <div class="price-item">
            <span>Group Rate</span>
            <strong>SAR 350 for 12+ teachers</strong>
          </div>
          <div class="price-item">
            <span>Tentative Date</span>
            <strong>6 August 2026</strong>
          </div>
        </div>
      </section>

      <section class="section" id="teacher-cpd">
        <div class="split">
          <article class="feature-panel reveal">
            <div class="feature-head">
              <p class="eyebrow">Teacher CPD</p>
              <h2>Professional development that teachers can use immediately.</h2>
              <p>Each session is built around one classroom-ready teaching strategy. Finnish pedagogy stays in the foreground, while STEAM provides the real-world context that makes learning active and memorable.</p>
            </div>
            <div class="feature-body">
              <ul class="list" style="--accent: var(--teal);">
                <li>CPD for teachers following British and American curricula.</li>
                <li>Science, Mathematics and English for Grades K to 12.</li>
                <li>Live online interactive sessions for active participation.</li>
                <li>Informed by Finnish pedagogy and evidence-based approaches to learning.</li>
                <li>STEAM-integrated teaching strategies teachers can use in the next lesson.</li>
                <li>Electronic CPD certificate and digital strategy card on completion.</li>
              </ul>
            </div>
          </article>

          <article class="feature-panel reveal" id="counselling">
            <div class="feature-head">
              <p class="eyebrow">Admissions and Counselling</p>
              <h2>Personalised guidance for global university pathways.</h2>
              <p>Delivered by a British Council Certified Academic Counsellor with experience supporting students from international schools in Saudi Arabia.</p>
            </div>
            <div class="feature-body">
              <ul class="list" style="--accent: var(--green);">
                <li>International university admissions support.</li>
                <li>Guidance for universities in New Zealand, USA, Australia and the UK.</li>
                <li>Career counselling and academic pathway planning.</li>
                <li>Personal statement and application support.</li>
                <li>University shortlisting tailored to each student's profile.</li>
                <li>Support from a British Council Certified Academic Counsellor.</li>
              </ul>
            </div>
          </article>
        </div>
      </section>

      <section class="dark-band">
        <div class="section">
            <div class="section-heading reveal">
              <div>
                <p class="eyebrow">Coming Next</p>
                <h2>More services are being shaped for schools, teams and education leaders.</h2>
            </div>
            <p>Register interest now and Taito will share updates as each new service becomes available.</p>
          </div>

          <div class="pathway-grid">
            <article class="mini-card reveal">
              <strong>Corporate Training</strong>
              <p>IT, business and professional development for organizations that want structured upskilling.</p>
            </article>
            <article class="mini-card reveal">
              <strong>Education Consultancy</strong>
              <p>Strategic school support for learning design, academic planning and institutional improvement.</p>
            </article>
            <article class="mini-card reveal">
              <strong>School Accreditation Support</strong>
              <p>Guidance for institutions preparing for international accreditation and quality benchmarks.</p>
            </article>
          </div>

          <div class="pathway-grid" style="margin-top: 16px;">
            <article class="mini-card reveal">
              <strong>Teaching Elementary Mathematics the Finnish Way</strong>
              <p>Taito-delivered Finnish STEAM pedagogy for KG3 to Grade 5, using real-world design and construction challenges for mathematical discovery.</p>
            </article>
            <article class="mini-card reveal">
              <strong>Closing the Language Gap</strong>
              <p>Finnish STEAM strategies for early childhood English, using arts, play, movement and making for language development in KG1 to Grade 2.</p>
            </article>
            <article class="mini-card reveal">
              <strong>Cognia-Aligned Finnish Classroom Practice</strong>
              <p>Practical classroom evidence for accreditation, cross-disciplinary projects and continuous improvement in American curriculum schools.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section" id="workshop-application">
        <div class="section-heading reveal">
          <div>
            <p class="eyebrow">Workshop Application</p>
            <h2>Apply for the Taito workshop.</h2>
          </div>
          <p>Use the form below to share your details for the workshop. For direct support, contact Taito on phone, WhatsApp or email using the details on this page.</p>
        </div>

        <div class="form-panel reveal">
          <iframe
            title="Taito workshop application form"
            src="https://docs.google.com/forms/d/e/1FAIpQLSd0AJnLwW8EN4p00o4RUZMpLohAEum59HXgiMwu3c5Ch5v1MQ/viewform?embedded=true"
            loading="lazy">Loading...</iframe>
        </div>
      </section>

      <section class="section" id="contact">
        <div class="contact-card reveal">
          <div>
            <p class="eyebrow">Get in Touch</p>
            <h2>Bring Taito to your classroom, institution or student pathway.</h2>
            <p>Tell us whether you are enquiring about Teacher CPD, university admissions guidance, a workshop application or an upcoming Taito service.</p>
            <div class="contact-links">
              <a href="tel:+966571224121">Phone: +966 57 122 4121</a>
              <a href="https://wa.me/966571224121" target="_blank" rel="noopener">WhatsApp: +966 57 122 4121</a>
              <a href="mailto:urooj@managix.in?subject=Taito%20Education%20Enquiry">urooj@managix.in</a>
            </div>
          </div>
          <a class="button button-primary" href="#workshop-application">Apply for Workshop</a>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="footer-inner">
        <div>
          <strong>Taito, The Skills Lab</strong><br />
          Education Division of Managix Global
        </div>
        <nav aria-label="Footer navigation">
          <a href="../">Managix Global</a>
          <a href="../technology/">Technology</a>
          <a href="../digitalmarketing/">Digital Marketing</a>
          <a href="../realestate/">Real Estate</a>
          <a href="mailto:urooj@managix.in">Contact</a>
        </nav>
      </div>
    </footer>

    <script>
      const revealItems = document.querySelectorAll(".reveal");
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.14 });

      revealItems.forEach((item) => observer.observe(item));
    </script>
  </body>
</html>
