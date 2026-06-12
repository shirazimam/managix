<?php
$pageTitle = $pageTitle ?? 'Managix Digital Marketing';
$pageDescription = $pageDescription ?? 'Full-funnel digital marketing, campus growth, SEO, performance campaigns and social media services from Managix.';
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
    <link rel="icon" type="image/png" href="../technology/assets/brand/fav.png?v=20260602" />
    <link rel="apple-touch-icon" href="../technology/assets/brand/fav.png?v=20260602" />
    <link rel="stylesheet" href="assets/dm.css?v=20260603-orange-logo" />
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="index" aria-label="Managix Digital Marketing home">
        <img src="../technology/assets/brand/managix-logo-dark-base-colored.png" alt="Managix Technology" />
      </a>
      <input class="nav-check" type="checkbox" id="nav-check" aria-label="Toggle navigation" />
      <label class="nav-toggle" for="nav-check" aria-controls="site-nav"><span></span><span></span><span></span></label>
      <nav class="site-nav" id="site-nav">
        <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="index">Home</a>
        <a class="<?= $activePage === 'services' ? 'active' : '' ?>" href="services">Services</a>
        <a class="<?= $activePage === 'campus' ? 'active' : '' ?>" href="campus-growth">Campus Growth</a>
        <a class="<?= $activePage === 'work' ? 'active' : '' ?>" href="work">Work</a>
        <a href="../technology">Technology</a>
        <a class="<?= $activePage === 'contact' ? 'active' : '' ?>" href="contact">Contact</a>
        <a class="nav-cta" href="contact">Start Growth Plan</a>
      </nav>
    </header>
