<?php get_header() ?>

<header>
    <nav class="main-nav">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list menu-toggle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => 'nav-menu'
        ));
        ?>
    </nav>
</header>

<div class="book_body">
    <div class="book_header">
        <img src="<?php the_field('book__image'); ?>" alt="img cat cyber for first book">
        <h1 class="book_title">
            <?php the_title(); ?>
            <?php the_field('book__id'); ?>
        </h1>
    </div>

    <h3 class="book_synopsis_title">Synopsis</h3>
    <div class="book_synopsis">
        <?php the_field('book_synopsis'); ?>
    </div>

    <div>

    </div>
</div>

<?php get_footer() ?>