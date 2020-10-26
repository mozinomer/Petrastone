<?php
/*
 Template Name: News archive Template
 */

get_header(); ?>
<div class="container">
    <div class="row">
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-md-3 productaWrappers">
        <div class="imagecontainerProductWrapper">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
        <span class="prcieWrapper"><?php the_field('prices'); ?></span>
    </div>       
<?php endwhile; endif; wp_reset_postdata(); ?>
    </div>  
</div>

<?php get_footer(); ?>
