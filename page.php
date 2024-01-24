<?php

get_header();

$cat = get_categories(array('taxonomy'=>'category'));
// echo '<pre>';
// print_r($cat);
?>


<div class="container">
    <div class="page-status">
        <h1> <?php the_title(); ?> </h1>
    </div>
    <?php the_excerpt(); ?>
    <?php the_post_thumbnail(array(500,500)); ?>
    <div class="about-content">
        <?php echo get_the_content(); ?>
        <?php $imgpath =  
            wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); 
        ?>
        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>
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
</div>


<?php get_footer(); ?>