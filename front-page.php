<?php get_header() ?>

<header style="background: center / cover no-repeat url('<?php echo esc_url(get_field('home__header_bgimg')); ?>'); height: 600px;">

    <h1><?php echo wp_kses_post(get_field('home__header_title')); ?></h1>
    <p><?php echo wp_kses_post(get_field('home__header_subtitle')); ?></p>

</header>

<body>
    <section class="bg_menu_galery">
        <div id="cafe_menu_galery">
            <div class="cafe_bg">
                <div class="cafe_bg_img"><img src="<?php echo esc_url(get_field('cafe__menu_image')); ?>" alt=""></div>
            </div>
            <div class="cafe_menu">
                <h2><?php echo wp_kses_post(get_field('cafe__menu_title')); ?></h2>
                <a href="<?php echo esc_url(get_field('browser_books')); ?>">See all the books</a>
            </div>
        </div>
    </section>
    <section class="book_container_bg">
        <div class="book_container">

            <?php
            $args = array(
                'post_type' => 'book',
                'posts_per_page' => 4,
                'order' => 'DESC',
            );
            ?>

            <?php $the_query = new WP_Query($args); ?>

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="post_box">
                        <img src="<?php echo esc_url(get_field('book__image_id')); ?>" alt="img cyber cat book">
                        <h3><?php echo wp_kses_post(get_the_title()); ?></h3>
                        <p><?php echo wp_kses_post(get_field('book_synopsis')); ?></p>
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
            <?php wp_reset_postdata(); ?>

        </div>
        <h2 class="gap_placement"><?php echo wp_kses_post(get_field('title_for_gap')) ?></h2>
    </section>
    <section class="coffee_bg">
        <div id="coffee">
            <img src="<?php echo esc_url(get_field('coffee_bgimg')); ?>" alt="cyber café coffee image">
            <h3 class="coffee_title"><?php echo wp_kses_post(get_field('coffee_title')); ?></h3>
            <p class="coffee_subtitle"><?php echo wp_kses_post(get_field('coffee_subtitle')); ?></p>
        </div>

        <div class="coffee_items">
            <?php if (have_rows('coffee__list')) : ?>
                <?php while (have_rows('coffee__list')) : the_row(); ?>
                    <div class="coffee-list">
                        <a href="<?php echo esc_url(get_sub_field('link_post')); ?>" target="_blank">
                            <img src="<?php echo esc_url(get_sub_field('coffee__list_img')); ?>" alt="">
                            <h3 class="coffee-list-title"><?php echo wp_kses_post(get_sub_field('coffee__list_title')); ?></h3>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Aucun élément trouvé.</p>
            <?php endif; ?>
        </div>

    </section>

</body>

<?php get_footer() ?>