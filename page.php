<?php

get_header();
?>

<div class="container">
    <div class="page-status">
        <h1> <?php the_title(); ?> </h1>
    </div>
    <?php the_post_thumbnail(array(500,500)); ?>
    <div class="about-content">
        <?php echo get_the_content(); ?>
        <?php $imgpath =  
            wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); 
        ?>

      
        
    </div>
</div>


<?php get_footer(); ?>