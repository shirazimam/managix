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
    <link rel="icon" type="image/png" sizes="32x32" href="assets/brand/favicon-32.png" />
    <link rel="apple-touch-icon" href="assets/brand/apple-touch-icon.png" />
    <link rel="preconnect" href="https://images.unsplash.com" />
    <link rel="stylesheet" href="styles.css?v=20260601-formal-architecture" />
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="index.php" aria-label="Managix Technology home">
        <img src="assets/brand/managix-logo-light-base-colored.png" alt="Managix Technology" />
      </a>
      <input class="nav-check" type="checkbox" id="nav-check" aria-label="Toggle navigation" />
      <label class="nav-toggle" for="nav-check" aria-controls="site-nav"><span></span><span></span><span></span></label>
      <nav class="site-nav" id="site-nav">
        <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="about.php">About</a>
        <a class="<?= $activePage === 'services' ? 'active' : '' ?>" href="services.php">Services</a>
        <a class="<?= $activePage === 'industries' ? 'active' : '' ?>" href="industries.php">Industries</a>
        <div class="nav-dropdown">
          <a class="<?= $activePage === 'portfolio' ? 'active' : '' ?>" href="portfolio.php">Portfolio</a>
          <div class="nav-submenu" aria-label="Portfolio project pages">
            <a href="project-tech-mahindra-maps.php">Tech Mahindra Maps</a>
            <a href="project-vajranaad.php">Vajranaad</a>
            <a href="project-bcims.php">BCIMS</a>
            <a href="project-adpc-care.php">ADPC CARE Program</a>
            <a href="project-krishi-samriddhi-school.php">Krishi Samriddhi School</a>
            <a href="project-rhkn-portal.php">RHKN Portal</a>
            <a href="project-megh-mitr.php">Megh Mitr</a>
            <a href="project-sambal.php">SAMBAL</a>
            <a href="project-emedix.php">EMEDIX</a>
            <a href="project-school-mobile-applications.php">School Mobile Applications</a>
            <a href="project-enterprise-applications.php">Enterprise Applications</a>
          </div>
        </div>
        <a class="<?= $activePage === 'insights' ? 'active' : '' ?>" href="insights.php">Insights</a>
        <a class="<?= $activePage === 'careers' ? 'active' : '' ?>" href="careers.php">Careers</a>
        <a class="<?= $activePage === 'calculator' ? 'active' : '' ?>" href="calculator.php">Cost Calculator</a>
        <a class="<?= $activePage === 'contact' ? 'active' : '' ?>" href="contact.php">Contact</a>
        <a class="nav-cta" href="calculator.php">Estimate Cost</a>
      </nav>
    </header>
