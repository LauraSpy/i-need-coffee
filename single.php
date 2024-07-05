<?php get_header() ?>

<h1 class="book_title">
    <?php the_title(); ?>
    <?php the_field('book__id'); ?>
</h1>

<div class="book_header">
    <img src="<?php the_field('book__image'); ?>" alt="img cat cyber for first book">
</div>

<div class="book_synopsis">
    <?php the_field('book_synopsis'); ?>
</div>

<?php get_footer() ?>