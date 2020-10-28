<?php get_header(); ?>
<?php while (have_posts() ) : the_post();?>
<div class="contentContainerproduct">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="col-md-6">
				<div class="rightsideContent">
					<h6><?php the_field('precious_stones'); ?></h6>
					<h2><?php the_title(); ?></h2>
					<ul class="variations">
						<li><strong>Color</strong><?php the_field('color'); ?></li>
						<li><strong>Average Size:</strong><?php the_field('average'); ?></li>
						<li><strong>Finish:</strong><?php the_field('finish'); ?></li>
					</ul>
					<div class="exceprt">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<div class="AlsoLike">
	<div class="container">
		<h2>You may also like</h2>
		<div class="ourproducts">
			<div class="productcontainerslider">
				<?php $duration= 700; $data_query =  new WP_Query(array('post_type' => 'products', 'order_by','Des', 'posts_per_page' => -1)); while ( $data_query->have_posts() ) : $data_query->the_post();?>
					<div class="slideProduct">
						<div class="innnerSlideContainer" data-aos="fade-up" data-aos-duration="<?php echo $duration; ?>">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
								<h4><?php the_title(); ?></h4>
								<h6><?php the_field('prices'); ?></h6>
							</a>
						</div>
					</div>
				<?php $duration = $duration + 500; endwhile; wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>