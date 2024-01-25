<?php
/** 
 * Main Template File.
 * 
 * @package Aquila
 * 
 */

get_header();
?>

<div class="content">
    <!-- Dynamic Post  -->
    <?php
        while(have_posts()) {
            the_post();
            $imgpath= wp_get_attachment_image_src(get_post_thumbnail_id());
           ?>
                <div class="blog-posts">
                    <!-- Display Post Image -->
                    <img src="<?php echo $imgpath[0] ?>"/>

                    <!-- Display Post Excerpt -->
                    <p><?php the_excerpt(); ?></p>

                    <!-- Display Post Title -->
                    <h2><?php the_title(); ?></h2>

                    <!-- Display Post Date -->
                    <p><?php echo  get_the_date(); ?></p>

                    <!-- Display Post ReadMore Button -->
                    <a href="<?php the_permalink(22); ?>"><input type="button" value="Read More" name="">
                </div>

               <!-- Display Post Sidebar -->
                <div class="sidebar">
                    <?php get_sidebar(); ?>
                </div>
           <?php
        } 
    ?>

    <?php wp_pagenavi(); ?>
</div>



<?php 
get_footer();