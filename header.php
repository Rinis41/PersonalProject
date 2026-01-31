<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header aura-header">
  <div class="container aura-header-container">
    <div class="aura-logo-section">
      <svg class="aura-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <circle cx="12" cy="12" r="10" stroke="#17a2b8" stroke-width="2"/>
        <path d="M12 2v20M2 12h20" stroke="#17a2b8" stroke-width="2"/>
      </svg>
      <span class="aura-logo-text">AuraFlow</span>
    </div>
    
    <nav class="aura-nav">
      <a href="#features" class="aura-nav-link">Features</a>
      <a href="#pricing" class="aura-nav-link">Pricing</a>
      <a href="#contact" class="aura-nav-link">Contact</a>
    </nav>
    
    <button class="aura-btn aura-btn-cta">Start Free Trial</button>
  </div>
</header>
<main class="container">

