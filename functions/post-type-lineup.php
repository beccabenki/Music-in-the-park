<?php 

// Register Custom Post Type
function lineup() {

    $labels = array(
        'name'                  => _x( 'Lineup', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Lineup', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Lineup', 'text_domain' ),
        'name_admin_bar'        => __( 'Lineup', 'text_domain' ),
        'archives'              => __( 'Lineup', 'text_domain' ),
        'attributes'            => __( 'Lineup', 'text_domain' ),
        'parent_item_colon'     => __( 'Lineup', 'text_domain' ),
        'all_items'             => __( 'All Lineup', 'text_domain' ),
        'add_new_item'          => __( 'Add New Band', 'text_domain' ),
        'add_new'               => __( 'Add New Band', 'text_domain' ),
        'new_item'              => __( 'New Band', 'text_domain' ),
        'edit_item'             => __( 'Edit Band', 'text_domain' ),
        'update_item'           => __( 'Update Band', 'text_domain' ),
        'view_item'             => __( 'View Band', 'text_domain' ),
        'view_items'            => __( 'View Band', 'text_domain' ),
        'search_items'          => __( 'Search Band', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Lineup', 'text_domain' ),
        'description'           => __( 'Lineup', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail',),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-format-audio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Lineup', $args );

}
add_action( 'init', 'Lineup', 0 );