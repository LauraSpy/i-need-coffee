<?php get_header() ?>

<header class="header" style="background: center / cover no-repeat url('<?php echo esc_url(get_field('home__header_bgimg')); ?>'); height: 600px;">

    <h1 class="header__title"><?php echo wp_kses_post(get_field('home__header_title')); ?></h1>
    <p class="header__subtitle"><?php echo wp_kses_post(get_field('home__header_subtitle')); ?></p>

</header>

<body>
    <section id="cafe">
        <div id="cafe__menu">
            <div class="cafe__menu_bg">
                <div class="cafe__menu_bg_imgBox"><img src="<?php echo esc_url(get_field('cafe__menu_image')); ?>" alt=""></div>
            </div>
            <div class="cafe__menu">
                <h2 class="cafe__menu_title"><?php echo wp_kses_post(get_field('cafe__menu_title')); ?></h2>
                <a href="<?php echo esc_url(home_url('/book/')); ?>">or discover them all here</a>
            </div>
        </div>
    </section>
    <section id="book_container">
        <div class="book">

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
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="book__post_box" target="_blank">
                        <img src="<?php echo esc_url(get_field('book__image_id')); ?>" alt="img cyber cat book">
                        <h3 class="book__post_box_title"><?php echo wp_kses_post(get_the_title()); ?></h3>
                        <p><?php echo wp_kses_post(get_field('book_synopsis')); ?></p>
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
            <?php wp_reset_postdata(); ?>

        </div>
        <h2 class="book__gap_placement--frontPage"><?php echo wp_kses_post(get_field('title_for_gap')) ?></h2>
    </section>
    <section id="coffee_bg">
        <div class="coffee">
            <div class="coffee__container">
                <img src="<?php echo esc_url(get_field('coffee_bgimg')); ?>" alt="cyber café coffee image">
                <div class="coffee__container_image_text"><?php echo wp_kses_post(get_field('image_placeholder_text')); ?></div>
            </div>
            <h3 class="coffee__title"><?php echo wp_kses_post(get_field('coffee_title')); ?></h3>
            <p class="coffee__subtitle"><?php echo wp_kses_post(get_field('coffee_subtitle')); ?></p>
        </div>

        <div class="coffee__items">
            <?php if (have_rows('coffee__list')) : ?>
                <?php while (have_rows('coffee__list')) : the_row(); ?>
                    <div class="coffee__items_list">
                        <a href="<?php echo esc_url(get_sub_field('link_post')); ?>" target="_blank">
                            <img src="<?php echo esc_url(get_sub_field('coffee__list_img')); ?>" alt="">
                            <h3 class="coffee__items_list_title"><?php echo wp_kses_post(get_sub_field('coffee__list_title')); ?></h3>
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