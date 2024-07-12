<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/minireset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

    <?php wp_head(); ?>

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

    <div style="display: none;">
        <?php
        echo file_get_contents(get_template_directory() . '/images/play-button.png');
        echo file_get_contents(get_template_directory() . '/images/pause-button.png');
        ?>
    </div>

    <?php
    if (function_exists('get_field')) {
        $music_enabled = get_field('enable_background_music', 'option');
        $music_file = get_field('background_music_file', 'option');

        if ($music_enabled && $music_file) :
            $music_url = is_array($music_file) ? $music_file['url'] : $music_file;
    ?>
            <audio id="background-music" loop>
                <source src="<?php echo esc_url($music_url); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <button id="toggle-music">
                <img src="<?php echo get_template_directory_uri(); ?>/images/play-button.png" alt="Play" class="play-icon" width="24" height="24">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pause-button.png" alt="Pause" class="pause-icon" width="24" height="24" style="display: none;">
            </button>
    <?php
        endif;
    }
    ?>

</head>

<body <?php body_class('body'); ?>>