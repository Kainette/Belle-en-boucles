<?php



$menu = wp_nav_menu([
    'theme_location' => 'menu_header',
    'container_class' => 'header__nav',
    'echo' => false,
]);


$menu = strip_tags($menu, '<a><div>');


$menu = str_replace('a href', 'a class="header__nav__link" href', $menu);

echo $menu;