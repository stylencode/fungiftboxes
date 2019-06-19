<?php /* Template Name: Standard Page */ ?>

<?php get_header(); ?>

	<main role="main">
		
		
		<section id="headerimg" class="full left" style="background: url(<?php the_post_thumbnail_url(); ?>) center center no-repeat; background-size: cover; min-height: 675px; background-attachment: fixed;">
				<div class="titlewrap abs">
					<div class="container">
						<div class="col-md-8 col-md-offset-2">
							<h1>
								<span>
									about
								</span>
								fun gift boxes
							</h1>
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


		<!-- INTRO PARAGRAPH -->
		<section id="content" class="full left">
			<div class="container">
				<!-- h2 -->
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<h2>
							h2 title example
						</h2>
					</div>
				</div>
				<!-- p -->
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<p>
							Our gift boxes are filled with curated gifts that are made with love by small businesses and artisans. These are the types of gifts that you won’t be able to find in generic stores.
						</p>
					</div>
				</div>
				<!-- hr gray -->
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<hr />
					</div>
				</div>
				<!-- BUTTON -->
				<div class="row">
					<div class="buttonwrap">
						<a class="button grey" href="#">
							sample button text
						</a>
					</div>
				</div>
				<!-- UL -->
				<div class="row">
					<div class="col-lg-6 col-lg-offset-4 col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<ul>
							<li>
								<p>Sample Unordered list item</p>
							</li>
							<li>
								<p>Sample Unordered list item</p>
							</li>
							<li>
								<p>Sample Unordered list item</p>
							</li>
							<li>
								<p>Sample Unordered list item</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- OL -->
				<div class="row">
					<div class="col-lg-6 col-lg-offset-4 col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<ol>
							<li>
								<p>Sample Unordered list item</p>
							</li>
							<li>
								<p>Sample Unordered list item</p>
							</li>
							<li>
								<p>Sample Unordered list item</p>
							</li>
							<li>
								<p>Sample Unordered list item</p>
							</li>
						</ol>
					</div>
				</div>
				<!-- hr orange -->
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<hr class="orange" />
					</div>
				</div>
				<!-- blockquote -->
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<div class="testiwrap">
									<div class="row">
											<blockquote>
												<mark>"</mark>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut voluptatem.
											</blockquote>
										
									</div>
									<div class="row">
										<mark class="author">
											- Firstname L
										</mark>
									</div>
						</div>
					</div>
				</div>
				<!-- img left content right -->
				<div class="row pingpong">
						<div class="col-lg-5 col-lg-offset-0 col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1">
							<div class="featured-img-wrap">	
								<div class="img-area" style="background: url(<?php echo get_template_directory_uri(); ?>/images/bg-hp-header1.jpg) center center no-repeat; background-size: cover; min-height: 470px;">
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-lg-offset-2 col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1">
							<div class="contentwrap">
								<div class="row">
									<h4>
										H4 TITLE EXAMPLE DOLOR AMET KOGI DISRUPT.
									</h4>
									<hr class="orange" />
								</div>
								<div class="row">
									<p>
										Lorem ipsum dolor amet kogi disrupt plaid, you probably haven't heard of them cardigan truffaut seitan kombucha tbh. Tote bag tumeric wolf hammock tattooed street art. Messenger bag lumbersexual waistcoat church-key, beard food truck kale chips.
									</p>
								</div>
								<div class="row">
									<a class="button grey" href="#">
										check it out
									</a>
								</div>
							</div>
						</div>
				</div>
				<!-- img right content left -->
				<div class="row pingpong">
						<div class="col-xs-10 col-xs-offset-1 tablet-show mobile-show">
							<div class="featured-img-wrap">	
								<div class="img-area" style="background: url(<?php echo get_template_directory_uri(); ?>/images/bg-hp-header1.jpg) center center no-repeat; background-size: cover; min-height: 470px;">
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-lg-offset-0 col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
							<div class="contentwrap">
								<div class="row">
									<h4>
										H4 TITLE EXAMPLE DOLOR AMET KOGI DISRUPT.
									</h4>
									<hr class="orange" />
								</div>
								<div class="row">
									<p>
										Lorem ipsum dolor amet kogi disrupt plaid, you probably haven't heard of them cardigan truffaut seitan kombucha tbh. Tote bag tumeric wolf hammock tattooed street art. Messenger bag lumbersexual waistcoat church-key, beard food truck kale chips.
									</p>
								</div>
								<div class="row">
									<a class="button grey" href="#">
										check it out
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-lg-offset-2 col-md-6 col-md-offset-1 col-xs-10 col-xs-offset-1 tablet-hide mobile-hide">
							<div class="featured-img-wrap">	
								<div class="img-area" style="background: url(<?php echo get_template_directory_uri(); ?>/images/bg-hp-header1.jpg) center center no-repeat; background-size: cover; min-height: 470px;">
								</div>
							</div>
						</div>
				</div>
				<!-- h3 -->
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<h3>
							SAMPLE H3 TITLE CONGRATULATORY CURATED GIFT BOX 
						</h3>
						<hr class="grey" />
					</div>
				</div>
				<!-- FULL IMAGE -->
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<div class="full featured-img-wrap">	
							<div class="img-area" style="background: url(<?php echo get_template_directory_uri(); ?>/images/bg-hp-header1.jpg) center center no-repeat; background-size: cover; min-height: 550px;">
							</div>
						</div>
					</div>
				</div>	
				<!-- IMAGE SLIDER -->
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<div class="content-wrap slickslider3">
							<div>
								<div class="full slider-img-wrap">	
									<div class="img-area rel" style="background: url(<?php echo get_template_directory_uri(); ?>/images/bg-hp-header1.jpg) center center no-repeat; background-size: cover; min-height: 550px;">
										<figcaption class="full left abs">
											Fusce nec ligula pulvinar, blandit nibh nec, dapibus mi.
										</figcaption>
									</div>
								</div>
							</div>
							<div>
								<div class="full slider-img-wrap">	
									<div class="img-area rel" style="background: url(<?php echo get_template_directory_uri(); ?>/images/img-featured-1.jpg) center center no-repeat; background-size: cover; min-height: 550px;">
										<figcaption class="full left abs">
											Fusce nec ligula pulvinar, blandit nibh nec, dapibus mi.
										</figcaption>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- 50/50 Split -->
				<div class="row splitblock">
					<div class="col-md-5 col-md-offset-0 col-xs-10 col-xs-offset-1">
						<div class="fiddy">
							<div class="row">
								<div class="featured-img-wrap">	
									<div class="img-area" style="background: url(<?php echo get_template_directory_uri(); ?>/images/bg-hp-header1.jpg) center center no-repeat; background-size: cover; min-height: 370px;">
									</div>
								</div>
							</div>
							<div class="row">
									<h4>
										H4 TITLE EXAMPLE DOLOR AMET KOGI DISRUPT.
									</h4>
									<hr class="orange" />
							</div>
							<div class="row">
								<p>
									Lorem ipsum dolor amet kogi disrupt plaid, you probably haven't heard of them cardigan truffaut seitan kombucha tbh. Tote bag tumeric wolf hammock tattooed street art. Messenger bag lumbersexual waistcoat church-key, beard food truck kale chips.
								</p>
							</div>
							<div class="row">
								<a class="button grey" href="#">
									check it out
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-md-offset-2 col-xs-10 col-xs-offset-1">
							<div class="row">
								<div class="featured-img-wrap">	
									<div class="img-area" style="background: url(<?php echo get_template_directory_uri(); ?>/images/bg-hp-header1.jpg) center center no-repeat; background-size: cover; min-height: 370px;">
									</div>
								</div>
							</div>
							<div class="row">
									<h4>
										H4 TITLE EXAMPLE DOLOR AMET KOGI DISRUPT.
									</h4>
									<hr class="orange" />
							</div>
							<div class="row">
								<p>
									Lorem ipsum dolor amet kogi disrupt plaid, you probably haven't heard of them cardigan truffaut seitan kombucha tbh. Tote bag tumeric wolf hammock tattooed street art. Messenger bag lumbersexual waistcoat church-key, beard food truck kale chips.
								</p>
							</div>
							<div class="row">
								<a class="button grey" href="#">
									check it out
								</a>
							</div>
					</div>
				</div>
				<!-- Contact Block -->
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<div class="row">
							<h2>
								contact us
							</h2>
						</div>
						<div class="row">
							<p>
								Lorem ipsum dolor amet kogi disrupt plaid, you probably haven't heard of them cardigan truffaut seitan kombucha tbh. Tote bag tumeric wolf hammock tattooed street art. Messenger bag lumbersexual waistcoat church-key, beard food truck kale chips.
							</p>
						</div>
						<div class="row">
							<form>
								<input type="text" placeholder="YOUR NAME:" />
								<input type="email" placeholder="YOUR EMAIL:" />
								<input type="text" placehoder="MESSAGE:" />
								<input style="margin-top: 25px;" class="button grey" type="submit"  placeholder="SUBMIT" />
							</form>
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
