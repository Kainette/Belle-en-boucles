<?php 

$menu = wp_nav_menu([
    'theme_location' => 'menu_burger',
    'container_class' => 'sidebar__nav',
    'echo' => false,
]);


$menu = strip_tags($menu, '<a><div>');


$menu = str_replace('a href', 'a class="sidebar__nav__link" href', $menu);

echo $menu;