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
					<a href="<?php the_sub_field('button_linkB'); ?>" class="butonBanner">
						<?php the_sub_field('button_textB'); ?>
					</a>
				</div>
			</div>
		</div>
	    <?php endwhile; else : endif; ?>
	</div>
</div>

<div class="ceoMessage">
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
	<div class="containerMAx">
	</div>
</div>

<?php get_footer(); ?>