<?php
/**
 * Header File.
 * 
 * @package Aquila
 * 
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?> <?php if (is_front_page()) { echo "|"; bloginfo('description'); } ?> </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('hello'); ?>>

    <?php 
        if( function_exists('wp_body_open')){
            wp_body_open();
        }
    ?>

    <?php 
        $logoimg=get_header_image();
    ?>

    <div id="page" class="site">
        <div class="logo-img">
            <a href="<?php echo site_url(); ?>"><img src="<?php echo $logoimg; ?>" class="logo"/></a>
        </div>

        <header id="masthead" class="site-header" role="banner">
            <?php get_template_part('template-parts/header/nav'); ?>
        </header>
        
        <div id="content" class="site-content">

        </div>
    </div>