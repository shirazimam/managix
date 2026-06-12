<?php
$pageTitle = 'Employee Onboarding | Managix Technology';
$pageDescription = 'Employee onboarding form for Managix Technology and Management Services LLP.';
$pageRobots = 'noindex, nofollow';

/*
 * Replace this with the Zoho public embed URL from Share > Embed > Iframe.
 * Expected format:
 * https://forms.zohopublic.in/managixtechnology1/form/OnboardingForm/formperma/...
 */
$zohoFormEmbedUrl = 'https://forms.zohopublic.in/managixtechnology1/form/OnboardingForm/formperma/';
$isEmbedConfigured = strpos($zohoFormEmbedUrl, '/formperma/') !== false && strlen(rtrim($zohoFormEmbedUrl, '/')) > strlen('https://forms.zohopublic.in/managixtechnology1/form/OnboardingForm/formperma');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
<?php include __DIR__ . '/partials/seo.php'; ?>
    <link rel="icon" type="image/png" href="technology/assets/brand/fav.png?v=20260601" />
    <link rel="apple-touch-icon" href="technology/assets/brand/fav.png?v=20260601" />
    <link rel="preconnect" href="https://forms.zohopublic.in" />
    <link rel="preconnect" href="https://static.zohocdn.com" />
    <link rel="stylesheet" href="technology/styles.css?v=20260603-emedix-gc" />
    <style>
      .onboarding-hero::before {
        background:
          linear-gradient(90deg, rgba(7, 19, 36, 0.96), rgba(7, 19, 36, 0.66)),
          url("https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=2200&q=82") center / cover;
      }

      .onboarding-wrap {
        display: grid;
        gap: 28px;
      }

      .onboarding-card {
        overflow: hidden;
        border: 1px solid var(--line);
        border-radius: var(--radius);
        background: var(--white);
        box-shadow: var(--shadow);
      }

      .onboarding-frame {
        display: block;
        width: 100%;
        min-height: 980px;
        border: 0;
        background: #ffffff;
      }

      .onboarding-fallback {
        display: grid;
        gap: 16px;
        padding: clamp(28px, 5vw, 56px);
        color: var(--muted);
      }

      .onboarding-fallback strong {
        color: var(--ink);
        font-size: clamp(1.35rem, 3vw, 2rem);
        line-height: 1.15;
      }

      .onboarding-fallback code {
        display: block;
        overflow-wrap: anywhere;
        padding: 14px;
        border-radius: var(--radius);
        background: #eef4ff;
        color: var(--ink);
        font-size: 0.9rem;
      }

      @media (max-width: 720px) {
        .onboarding-frame {
          min-height: 860px;
        }
      }
    </style>
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="technology/index" aria-label="Managix Technology home">
        <img src="technology/assets/brand/managix-logo-light-base-colored.png" alt="Managix Technology" />
      </a>
      <input class="nav-check" type="checkbox" id="nav-check" aria-label="Toggle navigation" />
      <label class="nav-toggle" for="nav-check" aria-controls="site-nav"><span></span><span></span><span></span></label>
      <nav class="site-nav" id="site-nav">
        <a href="technology/about">About</a>
        <a href="technology/services">Services</a>
        <a href="technology/industries">Industries</a>
        <div class="nav-dropdown">
          <a href="technology/portfolio" aria-expanded="false">Portfolio</a>
          <div class="nav-submenu" aria-label="Portfolio project pages">
            <a href="technology/portfolio">Portfolio Overview</a>
            <a href="technology/project-tech-mahindra-maps">Tech Mahindra Maps</a>
            <a href="technology/project-vajranaad">Vajranaad</a>
            <a href="technology/project-bcims">BCIMS</a>
            <a href="technology/project-adpc-care">ADPC CARE Program</a>
            <a href="technology/project-krishi-samriddhi-school">Krishi Samriddhi School</a>
            <a href="technology/project-rhkn-portal">RHKN Portal</a>
            <a href="technology/project-megh-mitr">Megh Mitr</a>
            <a href="technology/project-sambal">SAMBAL</a>
            <a href="technology/project-emedix">EMEDIX</a>
            <a href="technology/project-school-mobile-applications">School Mobile Applications</a>
            <a href="technology/project-enterprise-applications">Enterprise Applications</a>
          </div>
        </div>
        <a href="technology/insights">Insights</a>
        <a href="digitalmarketing">Digital Marketing</a>
        <a href="technology/careers">Careers</a>
        <a href="technology/calculator">Cost Calculator</a>
        <a href="technology/contact">Contact</a>
        <a class="nav-cta" href="technology/calculator">Estimate Cost</a>
      </nav>
    </header>

    <main>
      <section class="page-hero onboarding-hero">
        <div class="page-hero-inner" data-reveal>
          <p class="eyebrow">Managix Technology</p>
          <h1>Employee onboarding</h1>
          <p>Please complete the onboarding form below. The details submitted here go directly to the Managix team through Zoho Forms.</p>
        </div>
      </section>

      <section class="section onboarding-wrap">
        <div class="section-heading" data-reveal>
          <div>
            <p class="eyebrow">Secure form</p>
            <h2>Submit your joining details.</h2>
          </div>
          <p>Keep your documents and personal details ready before starting the form.</p>
        </div>

        <div class="onboarding-card" data-reveal>
          <?php if ($isEmbedConfigured): ?>
            <iframe
              class="onboarding-frame"
              title="Managix Technology Employee Onboarding Form"
              src="<?= htmlspecialchars($zohoFormEmbedUrl, ENT_QUOTES) ?>"
              loading="lazy"
              allow="clipboard-write; encrypted-media"
            ></iframe>
          <?php else: ?>
            <div class="onboarding-fallback">
              <strong>Zoho form embed URL required</strong>
              <p>The page is ready, but Zoho requires the public iframe URL from the form's Share section. In Zoho Forms, open <b>OnboardingForm</b>, go to <b>Share</b>, copy the iframe/public URL, and paste it into <code>$zohoFormEmbedUrl</code> at the top of this file.</p>
              <code><?= htmlspecialchars($zohoFormEmbedUrl, ENT_QUOTES) ?></code>
            </div>
          <?php endif; ?>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div>
        <img class="footer-logo" src="technology/assets/brand/managix-logo-light-base-colored.png" alt="Managix Technology" />
        <p>Managix Technology and Management Services LLP</p>
        <small>Enterprise software, GIS, cloud, ERP, mobile, quality and digital growth solutions.</small>
      </div>
      <nav aria-label="Footer navigation">
        <a href="technology/about">About</a>
        <a href="technology/services">Services</a>
        <a href="technology/industries">Industries</a>
        <a href="technology/portfolio">Portfolio</a>
        <a href="technology/careers">Careers</a>
        <a href="technology/calculator">Cost Calculator</a>
        <a href="technology/contact">Contact</a>
      </nav>
    </footer>
    <script src="technology/app.js?v=20260601-menu-fix"></script>
  </body>
</html>
