<?php /* Template Name: Contact Us LP */ ?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="headerimg" class="full left">
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
				<div class="content-wrap slickslider">
					<div>
						<div class="full left slider" style="background: url(<?php echo get_template_directory_uri(); ?>/images/bg-header2.jpg) center center no-repeat; background-size: cover; min-height: 275px;">
						</div>
					</div>
					<div>
						<div class="full left slider" style="background: url(<?php echo get_template_directory_uri(); ?>/images/bg-hp-header1.jpg) center center no-repeat; background-size: cover; min-height: 275px;">
						</div>
					</div>
					<div>
						<div class="full left slider" style="background: url(<?php echo get_template_directory_uri(); ?>/images/img-featured-1.jpg) center center no-repeat; background-size: cover; min-height: 275px;">
						</div>
					</div>
				</div>
		</section>
		
		
		<!-- CONTENT -->
		<section id="content" class="full left">
			<div class="container">
				<div class="row">
						
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
							stay in touch
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<form>
							<input type="text" placeholder="NAME" />
							<input type="email" placeholder="EMAIL" />
							<input class="button white" type="submit"  placeholder="sign up" />
						</form>
					</div>
				</div>
			</div>
		</section>	
		<!-- INSTAGRAM -->
		<section id="insta" class="full left">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
						<h5>
							find us on instagram!
						</h5>
					</div>
				</div>
			</div>
			<img class="full" src="<?php echo get_template_directory_uri(); ?>/images/img-ig-sample.jpg" alt="Instagram feed shortcode replaces this image" />
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
