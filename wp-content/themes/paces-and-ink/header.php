<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <nav class="global-nav">
    <?php
wp_nav_menu(
  array(
  'theme_location' => 'menu-1',
  'menu_id' => 'primary-menu',
  'container' => false,
  'fallback_cb' => 'paces_and_ink_default_menu',
)
);
?>
  </nav>
  <header class="hero">
    <div class="hero-content">
      <h1 class="logo">
        <?php bloginfo('name'); ?><span class="logo-en">Cafe Paces & Ink</span>
      </h1>
      <p class="catchcopy">思考を歩かせ、<br>記録に残す拠点。</p>
    </div>
    <div class="hero-background">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ShopLogo.png" alt="ロゴ" class="hero-img">
    </div>
  </header>