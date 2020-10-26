<?php /* Template Name: Contact Us */ get_header(); ?>
<div class="contactUS">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="formContainer">
					<h6><?php the_field('sub_headingCon'); ?></h6>
					<h2><?php the_field('headingConatc'); ?></h2>
					<?php echo do_shortcode('[contact-form-7 id="72" title="Contact form 1"]') ?>
				</div>
			</div>
			<div class="col-md-6" id="contactRightSide">
				<div class="rightContentForm">
					<h6><?php the_field('sub_headingContacts'); ?></h6>
					<h2><?php the_field('headingContactUS'); ?></h2>
					<p><?php the_field('contentContactUs'); ?></p>
					<ul class="beforeSocial">
						<li> 
							<a href="tel:<?php the_field('phone_number', 'option'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/17.png">
								<?php the_field('phone_number', 'option'); ?> 
							</a> 
						</li>
						<li> 
							<a href="mailto:<?php the_field('email_adress', 'option'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/18.png">
								<?php the_field('email_adress', 'option'); ?> 
							</a> 
						</li>
						<li> 
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/19.png">
								<?php the_field('address_company', 'option'); ?> 
							</a> 
						</li>
						<li> 
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/20.png">
								<?php the_field('timingsCompany'); ?> 
							</a> 
						</li>
					</ul>
					<ul class="socialContact">
						<li><a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i></a> </li>
						<li><a href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter"></i></a> </li>
						<li><a href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i></a> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="mapcontainer">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2426.910396706753!2d13.388001115716332!3d52.535055342865995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a851f217b14267%3A0xea53fe8afbc1b1ac!2sBerlin%20Wall%20Memorial!5e0!3m2!1sen!2s!4v1603709938312!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;width: 100%;height: 625px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
</div>
<?php get_footer(); ?>