<?php ?>



<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aukse — Manage money, together.</title>
<meta name="description" content="Aukse is a household budgeting app for couples and families. Track expenses, set shared budgets, and finally get on the same page about money." />

<!-- Fonts: General Sans (display) + Inter (body) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600,700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap">
<?php wp_head(); ?>
</head>
<body>
   <!-- HEADER -->
<header id="site-header">
  <nav class="nav">
    <a href="/" class="logo">
      <span class="logo-dot"></span>
      <span>Aukse</span>
    </a>
    <ul class="nav-links">
      <li><a href="<?php echo esc_url( home_url( '/#features' ) ); ?>">Features</a></li>
      <li><a href="<?php echo esc_url( home_url( '/#how' ) ); ?>">How it works</a></li>
      <li><a href="<?php echo esc_url( home_url( '/guides/' ) ); ?>">Guides</a></li>
      <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About</a></li>
      <li><a href="https://accounts.aukse.app/sign-in/" class="nav-cta">Sign in</a></li>
    </ul>
  </nav>
</header>

<main>