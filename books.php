<?php
/*
Template Name: List of Books
*/
?>

<?php get_header() ?>


<header class="header" style="background: center / cover no-repeat url('<?php echo esc_url(get_field('list__page_img')); ?>'); height: 600px;">

    <h1 class="header__title"><?php echo wp_kses_post(get_field('list__page_title')); ?></h1>

</header>
<section id="book_container">
    <div class="book">

        <?php
        $args = array(
            'post_type' => 'book',
            'posts_per_page' => 50,
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
    <div class="book__gap_placement--bookPage">
        <p><?php echo esc_html('All the story were generate by IA - Perplexity.ia - after One prompt originaly made by me : the CyberCatrix'); ?></p>
    </div>
</section>


<?php get_footer() ?>