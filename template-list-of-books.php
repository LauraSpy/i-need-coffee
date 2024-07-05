<?php
/*
Template Name: List of Books
*/
?>

<?php get_header() ?>


<header style="background: center / cover no-repeat url('<?php the_field('list__page_img'); ?>'); height: 600px;">
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

    <h1><?php the_field('list__page_title'); ?></h1>

</header>

<body>

    <section class="book_container_bg">
        <div class="book_title_list">
            <h2><?php the_field('list__list_title'); ?></h2>
            <p><?php the_field('list__list_subtitle'); ?></p>
        </div>
        <div class="book_container">
            <?php
            $args = array(
                'post_type' => 'book',
                'posts_per_page' => 20,
                'order' => 'DESC',
            );
            ?>

            <?php $the_query = new WP_Query($args); ?>

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="post_box">
                        <img src="<?php the_field('book__image_id'); ?>" alt="img cyber cat book">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_field('book_synopsis'); ?></p>
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
            <?php wp_reset_postdata(); ?>

        </div>
        <div class="list_info">
            <p>All the story were generate by IA - Perplexity.ia - after One prompt originaly made by me : the CyberCatrix</p>
        </div>
    </section>


</body>

<?php get_footer() ?>