<?php get_header() ?>

<header style="background: center / cover no-repeat url('<?php the_field('home__header_bgimg'); ?>'); height: 600px;">

    <h1><?php the_field('home__header_title'); ?></h1>
    <p><?php the_field('home__header_subtitle'); ?></p>

</header>

<body>
    <section class="bg_menu_galery">
        <div id="cafe_menu_galery">
            <div class="cafe_bg">
                <div class="cafe_bg_img"><img src="<?php the_field('cafe__menu_image') ?>" alt=""></div>
            </div>
            <h2><?php the_field('cafe__menu_title') ?></h2>
        </div>
    </section>
    <section class="book_container_bg">
        <div class="book_container">

            <?php
            $args = array(
                'post_type' => 'book',
                'posts_per_page' => 3,
                'order' => 'DESC',
            );
            ?>

            <?php $the_query = new WP_Query($args); ?>

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="post_box">
                        <img src="<?php the_field('book__image'); ?>" alt="img cat cyber for first book">
                        <h3><?php the_title(); ?></h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident accusamus mollitia ipsum quod similique harum nisi! Distinctio quos a, repellat sapiente sint voluptates quisquam, fugiat laboriosam eum accusantium pariatur dolorem?
                        </p>
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
            <?php wp_reset_postdata(); ?>

        </div>
    </section>
    <section class="coffee_bg">
        <div id="coffee">
            <img src="<?php the_field('coffee_bgimg'); ?>" alt="cyber café coffee image">
            <h3 class="coffee_title"><?php the_field('coffee_title'); ?></h3>
        </div>
    </section>

</body>

<?php get_footer() ?>