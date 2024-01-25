<?php

    get_header();

?>

<div class="content">
    <!-- GET POSTS IN SINGLE PAGE  -->
    <?php
        while(have_posts()) {
            the_post();
            $imgpath= wp_get_attachment_image_src(get_post_thumbnail_id());
           ?>
                <div class="blog-posts">
                    <!-- GET POST IMAGE -->
                    <img src="<?php echo $imgpath[0] ?>"/>

                    <!-- GET POST EXCERPT -->
                    <p><?php the_excerpt(); ?></p>

                    <!-- GET POST TITLE -->
                    <h2><?php the_title(); ?></h2>

                    <!-- GET POST DATE -->
                    <p><?php echo  get_the_date(); ?></p>

                    <!-- GET POST'S AUTHOR -->
                    <div><?php the_author(); ?></div>

                    <!-- GET POST CONTENT  -->
                    <div><?php the_content(); ?></div>

                    <!-- GET POST COMMENT FORM IN SINGLE PAGE -->
                    <!-- <?php comment_form(); ?> -->

                    <!-- GET POST COMMENT FORM TEMPLATE -->
                    <?php comments_template(); ?>

                    <!-- GET POST READMORE BUTTON -->
                    <a href="<?php the_permalink(22); ?>"><input type="button" value="Read More" name="">
                </div>
           <?php
        } 
    ?>

    <!-- POST PAGINATION -->
    <?php wp_pagenavi(); ?>
</div>


<?php get_footer(); ?>