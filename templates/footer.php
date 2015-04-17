<?php use Roots\Sage\Nav; ?>
<footer class="site-footer" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <?php
    if (has_nav_menu('footer_navigation')) :
      wp_nav_menu(['theme_location' => 'footer_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav']);
    endif;
    ?>
    <p>Copyright &copy; Windeck-Gymnasium 2015</p>
  </div>
</footer>
