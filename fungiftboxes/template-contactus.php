<?php /* Template Name: Contact Us LP */ ?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="headerimg" class="full left contact" style="position: relative;    text-align: center;">
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
		<section id="content" class="full left">
			<div class="container">
				<div class="row" style="padding: 10px;">
						
						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
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
