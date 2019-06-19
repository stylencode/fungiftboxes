<?php /* Template Name: FAQ LP */ ?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="headerimg" class="full left faq">
				<div class="titlewrap abs">
					<div class="container">
						<div class="col-md-8 col-md-offset-2">
							<h1>
								<?php the_title(); ?>
							</h1>
						</div>
					</div>
				</div>
				
				<!-- SLIDER -->
				<div class="content-wrap">
					<div>
						<div class="full left" style="background: url( <?php the_post_thumbnail_url(); ?> ) center center no-repeat; background-size: cover; min-height: 275px;">
						</div>
					</div>
				</div>
		</section>

		<!-- CONTENT -->
		<section id="intro" class="full left">
			<div class="container">
				<div class="row" style="padding: 10px;">
						
						<div class="col-lg-12 col-md-12 ">
							<div class="contentwrap">
								
								<div class="row" style="text-align: left;">


									<?php if (have_posts()): while (have_posts()) : the_post(); ?>

										

											<?php the_content(); ?>


											<br class="clear">


									<?php endwhile; ?>

									<?php endif; ?>


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
