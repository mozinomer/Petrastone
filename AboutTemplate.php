<?php /* Template Name: About Us Template */ get_header(); ?>
<div class="aboutSection">
	<div class="container">
		<div class="contentAbout">
			<div class="row alignCenter">
				<div class="col-md-6">
					<img src="<?php the_field('image_AboutSection1'); ?>">
				</div>
				<div class="col-md-6">
					<div class="contentrightAbout">
						<h6>
							<?php the_field('sub_headingAbout'); ?>
						</h6>
						<h2><?php the_field('HeadingMainAbout'); ?></h2>
						<p><?php the_field('contentAboutMain'); ?></p>
						<div class="buttoncintainer">
							<a href="<?php the_field('button_linkAboutMain'); ?>" class="butonBanner" tabindex="0"> <?php the_field('button_textAboutMain'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="cardsSections" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/9.png');">
	<div class="container">
		<h6><?php the_field('headingCardsMain'); ?></h6>
		<h2><?php the_field('sub_headingMainCards'); ?></h2>
		<div class="row">
			<?php if( have_rows('card_contaienr') ): while( have_rows('card_contaienr') ) : the_row();  ?>
			<div class="col-md-4">
				<div class="flip">
				    <div class="front" style="background-image: url(<?php the_sub_field('imageCards'); ?>)">
				       <h1 class="text-shadow">
				       		<div class="contentheadingFrontSide">
					       		<img src="<?php the_sub_field('iconCards'); ?>">
						       	<span><?php the_sub_field('headingCards'); ?></span>
					       	</div>
				       </hi>
				    </div>
				    <div class="back">
				       <p><?php the_sub_field('contentCards'); ?></p>
				    </div>
				</div>
			</div>
			<?php endwhile; else : endif; ?>
		</div>
	</div>
</div>
<div class="ctas">
	<div class="container">
		<div class="row">
			<?php if( have_rows('repeater_company') ): while( have_rows('repeater_company') ) : the_row();  ?>
			<div class="col">
				<h1>
					<?php the_sub_field('valueAboutMain'); ?>
				</h1>
				<span>
					<?php the_sub_field('value_for_this_AbotuMain'); ?>
				</span>
			</div>
			<?php endwhile; else : endif; ?>
		</div>
	</div>
</div>
<div class="sliderGallery">
	<div class="sliderInnergallery">
		<?php $indexofGallery = 1; $duration= 700; $data_query =  new WP_Query(array('post_type' => 'gallery', 'order_by','Des', 'posts_per_page' => -1)); while ( $data_query->have_posts() ) : $data_query->the_post();?>
		<div class="slideGallery">
			<div class="innerslideGallery">
				<div class="containerlines"></div>
				<img src="<?php echo get_the_post_thumbnail_url(); ?>">
				<div class="indexoftheSlide">
					<?php echo $indexofGallery;	 ?>
				</div>
			</div>
		</div>
	   <?php $indexofGallery++; $duration = $duration + 500; endwhile; wp_reset_query(); ?>
	</div>
	<div class="buttoncintainer">
		<a href="#" class="butonBanner" tabindex="0">See Our Gallery</a>
	</div>
</div>
<div class="tabscontainerabout">
	<div class="container">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<?php $op = 1; $asd = 1; if( have_rows('list_of_items') ): while( have_rows('list_of_items') ) : the_row();  ?>
				<li class="nav-item">
			    	<a class="nav-link <?php echo $op == 1 ? 'active' : ''; ?>" data-toggle="tab" href="#tabcontent_<?php echo $asd; ?>" role="tab" aria-controls="home" aria-selected="true">
			    		<?php the_sub_field('item_textAboutMainlist'); ?>
			    	</a>
				</li>
		  	<?php $asd++; $op++; endwhile; else : endif; ?>
		</ul>
		<div class="tab-content" id="myTabContent">
			<?php $asd = 1; $opt = 1; if( have_rows('list_of_items') ): while( have_rows('list_of_items') ) : the_row();  ?>
				<div class="tab-pane fade <?php echo $opt == 1 ? 'show active' : ''; ?>" id="tabcontent_<?php echo $asd; ?>" role="tabpanel" aria-labelledby="home-tab">
					<img src="<?php the_sub_field('imageItemText'); ?>">
				</div>
		  	<?php $asd++; $opt++; endwhile; else : endif; ?>
		</div>
	</div>
</div>
<div class="videoSection">
	<img src="<?php the_field('background_imageVideo'); ?>" id="videoSectionImage">
	<a data-fancybox="" href="<?php the_field('video_link'); ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/images/14.png" alt="">
	</a>
</div>
<div class="testimonials">
	<div class="container">
		<div class="headincontenttestimonial">
			<h6><?php the_field('sub_headingT', 8); ?></h6>
			<h2><?php the_field('headingT', 8); ?></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/8.png" class="commmas">
		</div>
		<div class="slidertestominalContent">
			<?php if( have_rows('reviews', 8) ): while( have_rows('reviews', 8) ) : the_row(); ?>
				<div class="sliderContenttest">
					<p><?php the_sub_field('reviewTa', 8); ?></p>
				</div>
		    <?php endwhile; endif; ?>
		</div>
		<div class="authortestimonials">
			<?php if( have_rows('reviews', 8) ): while( have_rows('reviews', 8) ) : the_row(); ?>
			<div class="sliderNac">
				<img src="<?php the_sub_field('authorFoto', 8); ?>">
				<h6 class="bameAuthor">
					<?php the_sub_field('author_name', 8); ?>
					<span class="designationauthor">
						<?php the_sub_field('author_designation', 8); ?>
					</span>
				</h6>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>