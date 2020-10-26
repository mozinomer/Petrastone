<?php
/*
 Template Name: News archive Template
 */

get_header(); ?>

       <section class="blog-gallery video-gellery">
        <div class="container">
            <div class="flex"> 
                <?php if(have_posts()) : ?>
                       <?php while (have_posts()) : the_post(); ?>
                <div class="blog">
                    <div class="blog-image">
                        
                    </div>
                    <div class="blog-detail">
						<span class="cus-date"><?php echo get_the_date(); ?></span>
                        <h4><?php the_title();?></h4>
                        <?php the_excerpt(); ?> 
                        <a href="<?php the_permalink(); ?>">Read More <img src="<?php echo get_template_directory_uri()?>/assets/images/right.png" alt="arrow-icon"></a>
                    </div>
                </div>
                <?php endwhile; ?>    
                    
            </div>

            </div> 
            <?php endif; ?> 
                    <?php wp_reset_postdata();  // Don't forget to add this
                    ?>
        </div>
    </section>


<?php get_footer(); ?>
