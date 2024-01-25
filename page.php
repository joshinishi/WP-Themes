<?php

get_header();

$cat = get_categories(array('taxonomy'=>'category'));
// echo '<pre>';
// print_r($cat);
?>


<div class="container">
    <div class="page-status">
        <!-- Get dynamic Title -->
        <h1> <?php the_title(); ?> </h1>
    </div>

     <!-- Get excerpt from post -->
    <?php the_excerpt(); ?>

    <!-- Get thumbnail from post -->
    <?php the_post_thumbnail(array(500,500)); ?>
    <div class="about-content">
        <?php echo get_the_content(); ?>
        <?php $imgpath =  
            wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); 
        ?>

    <!-- Get sidebar -->
        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>

    <!-- Get categories from post -->

        <div class="categories">
            <?php
                foreach($cat as $value){
                    ?>
        </div>
        <a href="<?php echo get_category_link($value->term_id); ?>">
            <h3><?php echo $value->name; ?>(<?php echo $value->count;  ?>)</h3>
        </a>
        <?php
            }
        ?>
    </div>

    <!-- WP_Query use  -->

    <div class="posts">
        <?php
        $wpnew = array(
            'post_type' => 'post',  // Changed 'posts' to 'post'
            'post_status' => 'publish'
        );

        $newsquery = new WP_Query($wpnew);
    
        while ($newsquery->have_posts()) {
            $newsquery->the_post();
            ?>
            <article <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        }
    
        // Restore original post data
        wp_reset_postdata();
        ?>
    </div>

    <!-- Get texonomy of post -->
    <div class="categories">
        <?php
            $newcat = get_terms(['taxonomy' =>'category','hide_empty' => false]);
            foreach($newcat as $newvalue){
            ?>
            <a href="<?php echo get_category_link($newvalue->term_id); ?>">
                <h3><?php echo $newvalue->name; ?>(<?php echo $newvalue->count;  ?>)</h3>
            </a>
        <?php
            }
        ?>
    </div>

</div>


<?php get_footer(); ?>