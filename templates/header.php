<?php use Roots\Sage\Nav; ?>

<nav class="top-bar">
  <?php
  if (has_nav_menu('primary_navigation')) :
    wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav']);
  endif;
  ?>
  <?php
  get_template_part('templates/searchform');
  ?>
</nav>
<header class="site-header">
  <div class="container">
    <img class="logo" src="<?php echo get_bloginfo('template_directory');?>/assets/images/logo.png">
    <h1><?php echo get_bloginfo('name'); ?></h1>
    <h3>Bühl</h3>
  </div>
</header>
