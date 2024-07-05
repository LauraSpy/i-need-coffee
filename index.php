<?php get_header(); ?>


<?php
wp_nav_menu(
  array(
    'theme_location' => 'main-navigation',
    'container' => 'nav',
    'container_class' => 'nav',
    'menu_class' => 'nav'
  )
);
?>    

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
