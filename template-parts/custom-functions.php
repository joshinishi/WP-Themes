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

?>