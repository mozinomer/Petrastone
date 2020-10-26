<?php /* Template Name: Products Page */ get_header(); ?>

<div class="productsContaienr">
	<div class="container">
		<div class="row">
			
			 <?php $duration= 700; ?> 
			<?php $termchildren = get_terms('product_category');?>
                    <?php foreach($termchildren as $category) { 
                    $term_link = get_term_link( $category );
                     // $upload_image = wp_get_attachment_image( $category );
                     
                               ?>
			<div class="col-md-6">
				<div class="innerContainerProdct">
					<a href="<?php echo $term_link; ?>">
						<div class="imaheWrapper">
							<img src="<?php echo $upload_image; ?>">
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