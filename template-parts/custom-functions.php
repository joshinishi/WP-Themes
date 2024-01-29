<?php
/**
* Theme Custom Functions.
* 
* @package Aquila
* 
*
*/


## ADD CUSTOM LOGO SUPPORT ##
add_theme_support( 'custom-logo' );

## ADD CUSTOM FEATURED IMAGE SUPPORT ##
add_theme_support('post-thumbnails');

## ADD CUSTOM HEADER SUPPORT ##
add_theme_support( 'custom-header' );

## ADD CUSTOM NAVIGATION MENU SUPPORT ##
register_nav_menus(
    array('primary-menu' => 'Header Menu',
        'secondary-emnu' => 'Footer Menu'
    ) 
);

## ADD CUSTOM WIDGET SUPPORT ##
register_sidebar(
    array(
        'name' => "Sidebar Location",
        'id' => "sidebar"
    )
);

## ADD CUSTOM BEACKGROUND ##
add_theme_support('custom-background');

## ADD POST TYPE EXCERPT SUPPORT ##
add_post_type_support('page', 'excerpt');

## CREATE CUSTOM POST TYPE ##
function storePostType() {

    ## Register Custom Post Type ##
    register_post_type(
        'stores',
        array(
            'labels' => array(
                'name' => __('Stores'),
                'singular_name' => __('Store'),
                'add_new_item' => __('Add New Store', 'text_domain'),
            ),
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'stores'),
            'show_in_rest' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-store',
        )
    );

    ## Register Custom Taxonomy ##
    $args = array(
        'label' => 'Stores Category',
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'store-category'),
    );

    register_taxonomy('store_category', 'stores', $args);
}

add_action('init', 'storePostType');
