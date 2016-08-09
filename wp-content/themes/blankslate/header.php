<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<nav id="menu" role="navigation" class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand" href="#"><img src="wp-content/uploads/2016/08/JT-Logo.png" style="height:100%;"/></a>
  </div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav navbar-nav collapse navbar-collapse ', 'container' => 'ul' ) ); ?>
</nav>
<section id="branding">
<div id="site-title" class="text-right padding-bottom"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>
<div id="site-description" class="padding-bottom text-right"><?php bloginfo( 'description' ); ?></div>
</section>
</header>
<div id="container">
