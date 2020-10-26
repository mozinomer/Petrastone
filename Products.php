<?php /* Template Name: Products Page */ get_header(); ?>

<div class="productsContaienr">
	<div class="container">
		<div class="row">
			<?php $duration= 700; $data_query =  new WP_Query(array('post_type' => 'products', 'order_by','Des', 'posts_per_page' => -1)); while ( $data_query->have_posts() ) : $data_query->the_post();?>
			<div class="col-md-6">
				<div class="innerContainerProdct">
					<a href="<?php the_permalink(); ?>">
						<div class="imaheWrapper">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<h6><?php the_title(); ?></h6>
					</a>
				</div>	
			</div>
			<?php $duration = $duration + 500; endwhile; wp_reset_query(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>