<?php get_header(); ?>


<?php
wp_nav_menu(array(
  'theme_location' => 'main-menu',
  'container' => false,
  'menu_class' => 'nav-menu'
));
?> 

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
