<?php /* Template Name: Products Page */ get_header(); ?>

<div class="productsContaienr">
	<div class="container">
		<div class="row">
			
			 <?php $duration= 700; ?> 
			<?php $termchildren = get_terms('product_category');?>
                    <?php foreach($termchildren as $category) { 
                    $term_link = get_term_link( $category );
                    
            ?>
			<div class="col-md-6">
				<div class="innerContainerProdct">
					<a href="<?php echo $term_link; ?>">
						<div class="imaheWrapper">
							<img src="<?php the_field('imageasd', 'product_category_'.$category->term_id); ?>">
						</div>
						<h6><?php echo $category->name; ?></h6>
					</a>
				</div>	
			</div>
			<?php $duration = $duration + 500; ?> 
			<?php }  ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>