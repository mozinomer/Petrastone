<?php /* Template Name: Gallery Page */ get_header(); ?>
<div class="galleryPage">
	<div class="container">
		<div class="button-group filters-button-group">
		  <button class="button is-checked" data-filter="*">All Work</button>
		  	<?php
			   $args = array( 'taxonomy' => 'subjects', 'orderby' => 'name', 'order'   => 'ASC' ); 
			   $cats = get_categories($args); foreach($cats as $cat) {
			?>
			<?php  $zname_clean = preg_replace('/\s*/', '', $cat->name); $zname_clean = strtolower($zname_clean); ?>
		  	<button class="button" data-filter=".<?php echo $zname_clean; ?>"><?php echo $cat->name; ?></button>
			<?php } ?>
		</div>
		<div class="grid">
			<?php $data_query =  new WP_Query(array('post_type' => 'gallery', 'order_by','Des', 'posts_per_page' => -1)); while ( $data_query->have_posts() ) : $data_query->the_post();?>
				<div class="element-item transition element-item transition <?php $terms = wp_get_post_terms( get_the_ID(), 'subjects'); foreach ($terms as $t):  ?><?php $zname_clean = preg_replace('/\s*/', '', $t -> name); $zname_clean = strtolower($zname_clean); echo $zname_clean ?> <?php endforeach; ?>" data-category="transition">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>">
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>