<?php wp_footer(); ?>

<footer class="site-footer">

    <div class="container">
        <div class="social-icons">
            <?php
            if (have_rows('social_media_links', 'option')) :
                while (have_rows('social_media_links', 'option')) : the_row();
                    $icon = get_sub_field('icon');
                    $url = get_sub_field('url');
                    if ($icon && $url) :
            ?>
                        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                        </a>
            <?php
                    endif;
                endwhile;
            endif;
            ?>
        </div>

        <section id="date">
            <p>Date of creation : <?php echo esc_html(get_the_date()); ?></p>
        </section>
        <section id="auteur">
            <h2>© created by <?php echo esc_html('Laura Spy'); ?></h2>
        </section>

        <?php
        $cta_image = get_field('cta_button_image', 'option');
        $cta_text = get_field('cta_button_text', 'option');
        $cta_url = get_field('cta_button_url', 'option');

        if ($cta_url && ($cta_image || $cta_text)) :
        ?>
            <a href="<?php echo esc_url($cta_url); ?>" class="cta-button">
                <?php if ($cta_image) : ?>
                    <img src="<?php echo esc_url($cta_image['url']); ?>" alt="<?php echo esc_attr($cta_image['alt']); ?>">
                <?php endif; ?>
                <?php if ($cta_text) : ?>
                    <span><?php echo esc_html($cta_text); ?></span>
                <?php endif; ?>
            </a>
        <?php endif; ?>
    </div>
</footer>

<script>

</script>

</body>

</html>