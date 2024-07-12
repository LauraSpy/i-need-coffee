<?php wp_footer(); ?>

<footer id="site-footer">
    <button id="back-to-top" title="Retour en haut" style="display: none;">
        Back to top
    </button>

    <div class="container">
        <section class="social_networks_container">
            <?php
            $menu_name = 'social-networks';
            $locations = get_nav_menu_locations();
            $menu_id = $locations[$menu_name];
            $navID = wp_get_nav_menu_object($menu_id);
            ?>


            <?php if (have_rows('social_media_links', $navID)) : ?>
                <?php while (have_rows('social_media_links', $navID)) : the_row(); ?>
                    <a href="<?php the_sub_field('lien_icon'); ?>">
                        <div class="social-icon">
                            <img src="<?php the_sub_field('icon_img'); ?>" alt="icon social networks">
                        </div>
                    </a>
                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>

        </section>
    </div>

    <div id="date">
        <h3>Date of creation : </h3>
        <p><?php echo esc_html(get_the_date()); ?></p>
    </div>

    <div id="mentions_légales">
        <h3>Legal Notices</h3>
        <p><strong>Button Play/Pause :</strong> Graphix's Art</p>
        <p><strong>Music :</strong> Phantasm by Purely Grey | https://soundcloud.com/purelygrey</p>
        <p></p>
    </div>

    <div id="auteur">
        <h2>© Template created by <?php echo esc_html('Laura Spy'); ?></h2>
    </div>
</footer>

<script>

</script>

</body>

</html>