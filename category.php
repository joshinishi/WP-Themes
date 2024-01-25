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
    <!-- GET POSTS BY CATEGORY  -->
    <?php
        while(have_posts()) {
            the_post();
            $imgpath= wp_get_attachment_image_src(get_post_thumbnail_id());
           ?>
                <div class="blog-posts">
                    <!-- GET POST IMAGE  -->
                    <img src="<?php echo $imgpath[0] ?>"/>

                    <!-- GET POST EXCERPT -->
                    <p><?php the_excerpt(); ?></p>

                    <!-- GET DYNAMIC TITLE -->
                    <h2><?php the_title(); ?></h2>
                    
                    <!-- GET POST DATE -->
                    <p><?php echo get_the_date(); ?></p>

                    <!-- GET POST READMORE BUTTON -->
                    <a href="<?php the_permalink(22); ?>"><input type="button" value="Read More" name="">
                </div>
           <?php
        } 
    ?>

    <!-- POST PAGE NAVIGATION -->
    <?php wp_pagenavi(); ?>
</div>

<?php 
get_footer();
