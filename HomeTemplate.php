<?php /* Template Name: Home Page */ get_header(); ?>


<div class="sliderContainerHOmepage">
	<div class="socialMediaLinks">
		<ul>
			<li> <a href="<?php the_field('Instagram', 'option'); ?>"> instagram </a> </li>
			<li> <a href="<?php the_field('facebook', 'option'); ?>"> facebook </a> </li>
			<li> <a href="<?php the_field('twitter', 'option'); ?>"> twitter </a> </li>
			<li> <a href="<?php the_field('linkedin', 'option'); ?>"> linkedin </a> </li>
		</ul>
	</div>
	<div class="sliderS">
		<?php if( have_rows('banner_repeater') ): while( have_rows('banner_repeater') ) : the_row(); ?>
		<div class="slideCOntainerHome">
			<div class="slideInnerContainer" style="background-image: url('<?php the_sub_field('banner_imageB'); ?>');">
				<div class="contentSliderHomeBanner">
					<h2>
						<?php the_sub_field('headingB'); ?>
					</h2>
					<p>
						<?php the_sub_field('contentB'); ?>
					</p>
					<div class="buttoncintainer">
						<a href="<?php the_sub_field('button_linkB'); ?>" class="butonBanner">
							<?php the_sub_field('button_textB'); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	    <?php endwhile; else : endif; ?>
	</div>
</div>

<div class="ceoMessage" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/4.png	');">
	<div class="containerMini">
		<div class="MessageCero">
			<h2> <?php the_field('name_C'); ?> <span><?php the_field('designationC'); ?></span></h2>
			<img src="<?php the_field('imageC'); ?>">
		</div>
		<div class="QuoteOftheDay">
			<p>"<?php the_field('qoute_contentc'); ?>"</p>
		</div>
	</div>
</div>

<div class="ourproducts">
	<div class="container">
		<div class="contentOurProducts">
			<h6><?php the_field('heading_smallP'); ?></h6>
			<h2><?php the_field('headingP'); ?></h2>
		</div>
		<div class="productcontainerslider">
			<?php  $args = array( 'post_type' => 'products', 'posts_per_page' => 4 ); $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="slideProduct">
					<div class="innnerSlideContainer">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							<h4><?php the_title(); ?></h4>
							<h6><?php the_field('prices'); ?></h6>
						</a>
					</div>
				</div>
			<?php  } wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>