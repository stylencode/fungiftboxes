

<?php get_header(); ?>

		<!-- section -->
		<section id="headerimg" class="full left">
				<div class="titlewrap abs">
					<div class="container">
						<div class="col-md-8 col-md-offset-2">
							<h1>
								<span>
									<?php the_field('hp-subheading'); ?>
								</span>
								<?php the_field('hp-heading'); ?>
							</h1>
						</div>
					</div>
				</div>
				<div class="buttonwrap abs">
					<div class="container">

						<?php

						if(get_field('hp-cta-corporate'))
						{
							?>
							<div class="col-md-8 col-md-offset-2">
								<a class="button white" style="margin:10px;" href="<?php the_field('hp-cta-corporate'); ?>">
									Corporate Gifts
								</a>
								
								<a class="button abs"  style="margin:10px;" href="<?php the_field('hp-cta'); ?>">
									Shop Now
								</a>
							</div>
							
						<?php 
						}
						else
						{
						?>

							<div class="col-md-8 col-md-offset-2">
								<a class="button abs" href="<?php the_field('hp-cta'); ?>">
									Shop Now
								</a>
							</div>

						<?php } ?>


						


					</div>
				</div>
				<!-- SLIDER -->
				<div class="content-wrap slickslider">

					<?php

					if(get_field('hp-slide1'))
					{
						?>
						<div>
							<div class="full left slider" style="background: url(<?php the_field('hp-slide1'); ?>) center center no-repeat; background-size: cover; min-height: 675px;">
							</div>
						</div>
					<?php 
					}

					?>

					<?php

					if(get_field('hp-slide2'))
					{
						?>
						<div>
							<div class="full left slider" style="background: url(<?php the_field('hp-slide2'); ?>) center center no-repeat; background-size: cover; min-height: 675px;">
							</div>
						</div>
					<?php 
					}

					?>

					<?php

					if(get_field('hp-slide3'))
					{
						?>
						<div>
							<div class="full left slider" style="background: url(<?php the_field('hp-slide3'); ?>) center center no-repeat; background-size: cover; min-height: 675px;">
							</div>
						</div>
						<?php 
					}

					?>
				</div>
		</section>



		<!-- INTRO PARAGRAPH -->

		<?php

			if(get_field('hp-excerpt-title'))
			{
				?>

				

						<section id="intro" class="full left">
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
										<h2>
											<?php the_field('hp-excerpt-title'); ?>
										</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<p>
											<?php the_field('hp-excerpt-content'); ?>
											
										</p>
									</div>
								</div>
							</div>
						</section>


				<?php 
			}

		?>



		<!-- HOW IT WORKS -->
		<section id="how" class="full left">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-md-10 col-md-offset-2 col-xs-12 col-xs-offset-0">
							<h2 class="alt">
								how it works
							</h2>
						</div>
					</div>
					<div class="row">
						<!-- Step 1 -->
						<div class="col-md-6 col-xs-10 steps">
							<div class="col-xs-4">
								<mark class="step">
									1
								</mark>
							</div>
							<div class="col-xs-8">
								<div class="row">
									<h4>
										<?php the_field('hp-step1-title'); ?>
									</h4>
									<hr class="orange" />
								</div>
								<div class="row">
									<p>
										<?php the_field('hp-step1-description'); ?>
									</p>
								</div>
							</div>
						</div>
						<!-- Step 2 -->
						<div class="col-md-6 col-xs-10 steps">
							<div class="col-xs-4">
								<mark class="step">
									2
								</mark>
							</div>
							<div class="col-xs-8">
								<div class="row">
									<h4>
										<?php the_field('hp-step2-title'); ?>
									</h4>
									<hr class="orange" />
								</div>
								<div class="row">
									<p>
										<?php the_field('hp-step2-description'); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- Step 3 -->
						<div class="col-md-6 col-xs-10 steps">
							<div class="col-xs-4">
								<mark class="step">
									3
								</mark>
							</div>
							<div class="col-xs-8">
								<div class="row">
									<h4>
										<?php the_field('hp-step3-title'); ?>
									</h4>
									<hr class="orange" />
								</div>
								<div class="row">
									<p>
										<?php the_field('hp-step3-description'); ?>
									</p>
								</div>
							</div>
						</div>
						<!-- Step 4 -->
						<div class="col-md-6 col-xs-10 steps">
							<div class="col-xs-4">
								<mark class="step">
									4
								</mark>
							</div>
							<div class="col-xs-8">
								<div class="row">
									<h4>
										<?php the_field('hp-step4-title'); ?>
									</h4>
									<hr class="orange" />
								</div>
								<div class="row">
									<p>
										<?php the_field('hp-step4-description'); ?> 
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- BUTTON -->
					<div class="row">
						<a class="button grey" href="<?php the_field('hp-howitworks-get-started-button'); ?>">
							get started
						</a>
					</div>
				</div>
			</div>
		</section>


		<!-- FAVORITES -->
		<section id="favorites" class="full left">


			<?php
		
				// vars
				$item1 = get_field('hp-favs-item_1');	

				if( $item1 ): ?>
			<!-- IMAGE LEFT WITH TITLE -->
			<div class="full left img-left title rel <?php echo $item1['left-right']; ?>">
				<div class="abs titlewrap">
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-md-offset-4 col-xs-10 col-xs-offset-1">
								<h2>
									<?php the_field('hp-favs-main_section_title'); ?>
								</h2>
							</div>
						</div>
					</div>
				</div>


				

				
				<div class="third left rel white sameheight ">
					<div class="featured-img-wrap" style="background: url(<?php echo $item1['image']['url']; ?>) center center no-repeat; background-size: cover; min-height: 525px;">
					</div>
				</div>
				<div class="twothird left rel grey sameheight">
					<div class="contentwrap">
						<div class="row">
							<h3>
								<?php echo $item1['title']?>
							</h3>
							<hr class="white" />
						</div>
						<div class="row">
							<p>
							<?php echo $item1['description']; ?>
							</p>
						</div>
						<div class="row">
							<a class="button white" href="<?php echo $item1['cta']; ?>">
								Check it out
							</a>
						</div>
					</div>
				</div>
				


			</div>
			<?php endif; ?>


			<?php
		
				// vars
				$item2 = get_field('hp-favs-item_2');	

				if( $item2): ?>
				<!-- IMAGE RIGHT -->
				<div class="full left img-right rel <?php echo $item2['left-right']; ?>">
					<div class="third left rel white sameheight tablet-show mobile-show">
						<div class="featured-img-wrap" style="background: url(<?php echo $item2['image2']['url']; ?>) center center no-repeat; background-size: cover; min-height: 525px;">
						</div>
					</div>
					<div class="twothird left rel gold sameheight">
						<div class="contentwrap">
							<div class="row">
								<h3>
									<?php echo $item2['title']?>
								</h3>
								<hr class="white" />
							</div>
							<div class="row">
								<p>
								<?php echo $item2['description']; ?>
								</p>
							</div>
							<div class="row">
								<a class="button white" href="<?php echo $item2['cta']; ?>">
									Check it out
								</a>
							</div>
						</div>
					</div>
					<div class="third left rel white sameheight tablet-hide mobile-hide">
						<div class="featured-img-wrap" style="background: url(<?php echo $item2['image2']['url']; ?>) center center no-repeat; background-size: cover; min-height: 525px;">
						</div>
					</div>
				</div>

			<?php endif; ?>





			<?php
		
				// vars
				$item3 = get_field('hp-favs-item_3');	

				if( $item3 ): ?>

			<!-- IMAGE left -->
			<div class="full left img-left title rel <?php echo $item3['left-right']; ?>">
				<div class="third left rel white sameheight">
					<div class="featured-img-wrap" style="background: url(<?php echo $item3['image']['url']; ?>) center center no-repeat; background-size: cover; min-height: 525px;">
					</div>
				</div>
				<div class="twothird left rel grey sameheight">
					<div class="contentwrap">
						<div class="row">
							<h3>
								<?php echo $item3['title']?>
							</h3>
							<hr class="white" />
						</div>
						<div class="row">
							<p>
							<?php echo $item3['description']; ?> 
							</p>
						</div>
						<div class="row">
							<a class="button white" href="<?php echo $item3['cta']; ?>">
								Check it out
							</a>
						</div>
					</div>
				</div>
			</div>

			<?php endif; ?>
		</section>


		<?php 

			$review1 = get_field('review_1');
			$review2 = get_field('review_2');
			$review3 = get_field('review_3');


		if( $review1 ): ?>
		<!-- TESTIMONIALS -->
		<section id="testimonials" class="full left">


			<div class="container-fluid">
					<div class="col-xs-12">
					<!-- SLIDER -->
						<div class="content-wrap slickslider2">
							


							<div>
								<div class="testiwrap">
									<div class="row">
											<blockquote>
												<mark>"</mark>
													<?php echo $review1['content']; ?>
											</blockquote>
										
									</div>
									<div class="row">
										<mark class="author">
											- <?php echo $review1['author']; ?>
										</mark>
									</div>
								</div>
							</div>



							<div>
								<div class="testiwrap">
									<div class="row">
											<blockquote>
												<mark>"</mark>
													<?php echo $review2['content']; ?>
											</blockquote>
										
									</div>
									<div class="row">
										<mark class="author">
											- <?php echo $review2['author']; ?>
										</mark>
									</div>
								</div>
							</div>



							<div>
								<div class="testiwrap">
									<div class="row">
											<blockquote>
												<mark>"</mark>
													<?php echo $review3['content']; ?>
											</blockquote>
										
									</div>
									<div class="row">
										<mark class="author">
											- <?php echo $review3['author']; ?>
										</mark>
									</div>
								</div>
							</div>
						</div>
						<!-- END SLIDER -->
					</div>
			</div>
		</section>
		<?php endif; ?>

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



<?php get_footer(); ?>
