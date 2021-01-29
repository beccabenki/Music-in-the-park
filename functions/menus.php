<?php
add_action( 'init', 'my_register_nav_menus' );

function my_register_nav_menus() {

    $locations = array(
        'utility_menu' => 'Utility Nav',
        'header_menu' => 'Header Nav',
        'header_menu_right' => 'Header Nav (right)',
        'footer_menu' => 'Footer Nav',
    );
    register_nav_menus( $locations );
}