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
)


?>