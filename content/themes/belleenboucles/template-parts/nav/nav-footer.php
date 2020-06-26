<?php

$menu = wp_nav_menu([
    'theme_location' => 'menu_footer',
    'container_class' => 'navfooter',
    'echo' => false
]);

$menu = strip_tags($menu, '<a>');


echo $menu;