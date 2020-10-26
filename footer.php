<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts.js"></script>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="logoFooter">
					<a href="<?php echo site_url(); ?>">
		                <?php 
		                    $custom_logo_id = get_theme_mod( 'custom_logo' );
		                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		                ?>
		                <img src="<?php echo $image[0]; ?>">
		            </a>
				</div>
				<div class="contentlogoFooet">
					<?php the_field('footer_content', 'option'); ?>
				</div>
				<div class="logocontainerfooter">
					<ul>
					<?php if( have_rows('logo_footer') ): while( have_rows('logo_footer') ) : the_row();  ?>
						<li>
							<img src="<?php the_sub_filed('image_or_icon'); ?>">
						</li>
					<?php endwhile; else : endif; ?>
					</ul>
				</div>
			</div>
			<div class="col-md-8">
				<div class="menuCOntainerpetra">
					<div class="row">
						<div class="col footerCOlumns">
							<div class="innermenu">
								<h6>Contact Us</h6>
								<ul>
									<li>
										<a href="tel:<?php the_field('phone_number', 'option'); ?>">
											<i class="fa fa-phone"></i>
											<?php the_field('phone_number', 'option'); ?>
										</a>
									</li>
									<li>
										<a href="mailto:<?php the_field('email_adress', 'option'); ?>">
											<i class="fa fa-mail"></i>
											<?php the_field('email_adress', 'option'); ?>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-map-marker"></i>
											<?php the_field('address_company', 'option'); ?>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col footerCOlumns">
							<div class="innermenu">
								<h6>Quick Links</h6>
								<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
							</div>
						</div>
						<div class="col">
							<div class="newsletterFooter">
								<h6>Newsletter</h6>
								<p><?php the_field('news_letter_conten', 'option'); ?></p>
								<?php echo do_shortcode('[contact-form-7 id="73" title="News Letter"]'); ?>
							</div>
							<div class="socialLinksFooter">
								<ul>
									<li>
										<a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="<?php the_field('instagram', 'option'); ?>"><i class="fa fa-instagram"></i></a>
									</li>
									<li>
										<a href="<?php the_field('linkedin', 'option'); ?>"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyroghts">
		<div class="container">
			<p>
				<?php the_field('copyrights', 'options'); ?>
			</p>
		</div>
	</div>
</footer>

<!-- 
<script>
	if ($(window).width() > 1000) {
	  	AOS.init();
	}
</script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
</body>
<?php wp_footer(); ?>
</html>