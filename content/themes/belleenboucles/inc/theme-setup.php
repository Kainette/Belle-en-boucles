<?php
if (!function_exists('belleenboucles_setup')) {
    
    function belleenboucles_setup() {
        add_theme_support('title-tag');        
        add_theme_support('post-thumbnails');
        add_theme_support( 'menus' );

        register_nav_menus ([
            'menu_burger' => ('menu de navigation de la version mobile , belleenboucles'),
            'menu_header' => ('menu de navigation de la version desktop, belleenboucles'),
            'menu_footer' => ('menu de navigation du footer, belleenboucles'),
        ]);

    };
}

add_action('after_setup_theme', 'belleenboucles_setup');