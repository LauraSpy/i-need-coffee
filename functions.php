<?php

// WordPress title tag management
add_theme_support('title-tag');

// ########## MENUS ##########

// Enable menus feature
add_theme_support('menus');

// Define menus locations
register_nav_menus([
    'main-navigation' => 'Main navigation',
    'social-networks' => 'Social networks',
    'footer-legal' => 'Legal links'
]);

function iNeedCoffee_frontPage_scripts()
{
    wp_enqueue_script('front-page', get_template_directory_uri() . '/front-page.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'iNeedCoffee_frontPage_scripts');


//template for the list of books page

function enqueue_list_of_books_style()
{
    if (is_page_template('template-list-of-books.php')) {
        wp_enqueue_style('list-of-books-style', get_template_directory_uri() . '/style.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_list_of_books_style');
