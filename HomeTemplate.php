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
			<div class="slideInnerContainer">
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
	    <?php endwhile; else : endif; ?>
	</div>
</div>



<?php get_footer(); ?>