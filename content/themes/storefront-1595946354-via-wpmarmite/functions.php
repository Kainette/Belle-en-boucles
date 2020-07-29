<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

<?php

/* Chargement de la feuille du style du theme parent */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-storefront-style', get_template_directory_uri() . '/style.css' );
}

// Disable product review (tab)
function woo_remove_product_tabs($tabs)
{ unset($tabs['description']);
// Remove Description tab 
unset($tabs['additional_information']);
// Remove Additional Information tab 
unset($tabs['reviews']);
// Remove Reviews tab 
return $tabs; }
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );


