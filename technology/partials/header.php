<?php
$pageTitle = $pageTitle ?? 'Managix Technology';
$pageDescription = $pageDescription ?? 'Enterprise technology, GIS, cloud, ERP, mobile and digital transformation services from Managix Technology.';
$activePage = $activePage ?? '';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
<?php include __DIR__ . '/../../partials/seo.php'; ?>
    <link rel="icon" type="image/png" href="assets/brand/fav.png?v=20260601" />
    <link rel="apple-touch-icon" href="assets/brand/fav.png?v=20260601" />
    <link rel="preconnect" href="https://images.unsplash.com" />
    <link rel="stylesheet" href="styles.css?v=20260603-emedix-gc" />
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="index" aria-label="Managix Technology home">
        <img src="assets/brand/managix-logo-light-base-colored.png" alt="Managix Technology" />
      </a>
      <input class="nav-check" type="checkbox" id="nav-check" aria-label="Toggle navigation" />
      <label class="nav-toggle" for="nav-check" aria-controls="site-nav"><span></span><span></span><span></span></label>
      <nav class="site-nav" id="site-nav">
        <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="about">About</a>
        <a class="<?= $activePage === 'services' ? 'active' : '' ?>" href="services">Services</a>
        <a class="<?= $activePage === 'industries' ? 'active' : '' ?>" href="industries">Industries</a>
        <div class="nav-dropdown <?= $activePage === 'portfolio' ? 'is-open' : '' ?>">
          <a class="<?= $activePage === 'portfolio' ? 'active' : '' ?>" href="portfolio" aria-expanded="false">Portfolio</a>
          <div class="nav-submenu" aria-label="Portfolio project pages">
            <a href="portfolio">Portfolio Overview</a>
            <a href="project-tech-mahindra-maps">Tech Mahindra Maps</a>
            <a href="project-vajranaad">Vajranaad</a>
            <a href="project-bcims">BCIMS</a>
            <a href="project-adpc-care">ADPC CARE Program</a>
            <a href="project-krishi-samriddhi-school">Krishi Samriddhi School</a>
            <a href="project-rhkn-portal">RHKN Portal</a>
            <a href="project-megh-mitr">Megh Mitr</a>
            <a href="project-sambal">SAMBAL</a>
            <a href="project-emedix">EMEDIX</a>
            <a href="project-school-mobile-applications">School Mobile Applications</a>
            <a href="project-enterprise-applications">Enterprise Applications</a>
          </div>
        </div>
        <a class="<?= $activePage === 'insights' ? 'active' : '' ?>" href="insights">Insights</a>
        <a href="../digitalmarketing">Digital Marketing</a>
        <a class="<?= $activePage === 'careers' ? 'active' : '' ?>" href="careers">Careers</a>
        <a class="<?= $activePage === 'calculator' ? 'active' : '' ?>" href="calculator">Cost Calculator</a>
        <a class="<?= $activePage === 'contact' ? 'active' : '' ?>" href="contact">Contact</a>
        <a class="nav-cta" href="calculator">Estimate Cost</a>
      </nav>
    </header>
