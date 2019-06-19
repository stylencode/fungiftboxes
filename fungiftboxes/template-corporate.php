<?php /* Template Name: Corporate LP */ ?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="headerimg" class="full left corporate">
				<div class="titlewrap abs">
					<div class="container">
						<div class="col-md-8 col-md-offset-2">
							<h1>
								<span>
									<?php the_field('corporate_sub_title'); ?>
								</span>
								<?php the_field('corporate_main_title'); ?>
							</h1>
						</div>
					</div>
				</div>
				<?php
					if(get_field('corporate_cta_title'))
						{
							?>
							<div class="buttonwrap abs">
								<div class="container">
									<div class="col-md-8 col-md-offset-2">
										<a class="button abs spu-open-778" href="#">
											
											<?php the_field('corporate_cta_title'); ?>
										</a>
									</div>
								</div>
							</div>
							
				<?php }	?>

				
				<!-- SLIDER -->
				<div class="content-wrap ">
					<div>
						<div class="full left slider" style="background: url(<?php the_field('corporate_header_image'); ?>) center center no-repeat; background-size: cover; min-height: 675px;">
						</div>
					</div>
					
				</div>
		</section>

		<!-- DESCRIPTION -->
		<section id="corporate-intro" class="full left">
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<?php the_field('corporate_description'); ?>
					</div>
				</div>
			</div>
		</section>
		
		<!-- CONTENT 2 columns -->
		<section id="corporate-2col"  class="full left">
			<div class="container">
				<div class="row">
						<div class="col-md-4 col-md-offset-2">
							<div class="contentwrap">
								<div class="row left">
								<h4>
									<?php the_field('corporate_2col_column_1_heading'); ?>
								</h4>
								
								</div>
								<div class="row left">
									<?php the_field('corporate_2col_column_1_text'); ?>
								</div>
								
							</div>
						</div>
						<div class="col-md-4 col-md-offset-0">
							<div class="contentwrap">
								<div class="row left">
									<h4>
										<?php the_field('corporate_2col_column_2_heading'); ?>
									</h4>
								
								</div>
								<div class="row left">
									<?php the_field('corporate_2col_column_2_text'); ?>
								</div>
								
							</div>
						</div>
				</div>
			</div>
		</section>


		<!-- This Banner with Question -->
		<section id="corporate-banner" class="full left">
			<div class="container">
					<div class="col-md-8 col-md-offset-2">
						<?php the_field('corporate_banner_thin_content'); ?>
					</div>
			</div>
		</section>

		
		<!-- HOW IT WORKS -->
		<section id="corporate-how-it-works" class="full left">
			<div class="container">
				
				<div class="row pingpong">

						<div class="col-lg-5 col-lg-offset-1 col-md-6 col-md-offset-1 col-xs-10 col-xs-offset-1 tablet-hide mobile-hide">
							<div class="featured-img-wrap">	
								<div class="img-area" style="background: url(<?php the_field('corporate_how_it_works_image'); ?>) center center no-repeat; background-size: cover; min-height: 470px;">
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-lg-offset-1 col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1">
							<div class="contentwrap">
								<div class="row left">
									<h4>
										<?php the_field('corporate_how_it_works_title'); ?>
									</h4>
									<hr class="orange">
								</div>
								<div class="row left steps">
									
										<?php the_field('corporate_how_it_works_steps'); ?>
								
								</div>
								<div class="row left">
									<a class="button grey spu-open-778" href="#">
										
										<?php the_field('corporate_how_it_works_cta_title'); ?>
														
									</a>
								</div>
								
							</div>
						</div>
						
				</div>
				
			</div>
		</section>





		

		<!-- NEWSLETTER -->
		<section id="newsletter" class="full left">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<h2>
							Join our email list
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<p>
							Sign up to hear about what's new at at Fun Gift Boxes. 
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">

						<!-- Begin Mailchimp Signup Form -->

						<div id="mc_embed_signup">
							<form action="https://fungiftboxes.us19.list-manage.com/subscribe/post?u=412104984029eabe741843ca4&amp;id=ad75323c04" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll">
							
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_412104984029eabe741843ca4_ad75323c04" tabindex="-1" value=""></div>

								<div class="mc-field-group">

								
									<input type="email" value="" name="EMAIL" class="required email" placeholder="EMAIL" id="mce-EMAIL">
								
									<input type="text" value="" name="PNAME" class="required" placeholder="NAME"  id="mce-PNAME">

									<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>

								</div>
								
							    
							</form>
						</div>


						<!--End mc_embed_signup-->


						
					</div>
				</div>
			</div>
		</section>	
		<!-- INSTAGRAM -->
		<section id="insta" class="full left">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
						<a href="https://www.instagram.com/fungiftboxes/" target="_blank"><h5>
							find us on instagram!
						</h5>
						</a>
					</div>
				</div>
			</div>

			
					<?php echo (do_shortcode('[instagram-feed num=4 cols=4 showfollow=false carouselrows=1]')); ?>
			

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
