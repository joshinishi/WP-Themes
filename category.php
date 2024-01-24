<?php
/** 
 * Category Template File.
 * 
 * @package Aquila
 * 
 */

get_header();
?>

<div class="content">
    <?php
        while(have_posts()) {
            the_post();
            $imgpath= wp_get_attachment_image_src(get_post_thumbnail_id());
           ?>
                <div class="blog-posts">
                    <img src="<?php echo $imgpath[0] ?>"/>
                    <p><?php the_excerpt(); ?></p>
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo get_the_date(); ?></p>
                    <a href="<?php the_permalink(22); ?>"><input type="button" value="Read More" name="">
                </div>
           <?php
        } 
    ?>

    <?php wp_pagenavi(); ?>
</div>



<?php 
get_footer();