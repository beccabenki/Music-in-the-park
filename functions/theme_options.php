<?php

function add_theme_options() {
	add_theme_support( 'post-thumbnails' );	
	add_post_type_support( 'page', 'excerpt' );
	add_post_type_support( 'post', 'excerpt' );
}

add_action( 'init', 'add_theme_options' );

add_action( 'woocommerce_before_shop_loop_item_title', function() {
    global $product;
 
    if ( !$product->is_in_stock() ) {
        echo '<span class="soldout">SOLD OUT</span>';
    }
});