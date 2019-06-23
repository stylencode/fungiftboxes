			</article>
		</div>
	</section>
	
	<!-- FOOTER -->
	<footer class="full left">
		<div class="container">
			<div class="col-md-2 col-md-offset-0 col-xs-4 col-xs-offset-4">
				<div class="row">
					<a class="logo" href="<?php echo get_site_url(); ?>">
						<img class="animated bounceIn" src="<?php echo get_template_directory_uri(); ?>/images/fgb-logo.svg" alt="Fun Gift Boxes" />
					</a>
				</div>
				<div class="row">
					<p class="copyright">
						&copy; 2018 Fun Gift Boxes -<br />
						All Rights Reserved  
					</p>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-0 col-xs-12 col-xs-offset-0">
				<div class="footercontent">
					<div class="row">
						<span class="slogan full left">
							MAKING IT EASY TO GIVE UNIQUE<br>
							&amp; MEMORABLE GIFT PACKAGES.
						</span>
					</div>
					<div class="row">
						<ul class="contact">
							<li class="email">
									<a href="mailto:info@fungiftboxes.com">
										info@fungiftboxes.com
									</a>
							</li>
							<li class="call">
									<a href="tel+1-303-929-1514">
										303.929.1514
									 </a>
							</li>
						</ul>
						<div class="social">
							<a href="https://www.facebook.com/FunGiftBoxes/">
										<img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.svg" alt="Follow us on Facebook!" />
							</a>
							<a href="https://www.instagram.com/p/BrWYzadFHIw/">
										<img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.svg" alt="Follow us on Instagram!" />
							</a>
						</div>
						<ul class="legal">
							<li>
									<a href="<?php echo get_site_url(); ?>/terms-and-conditions/">
										TERMS & CONDITIONS
									</a>
							</li>
							<li style="display: none !important;">
									<a href="<?php echo get_site_url(); ?>/">
										PRIVACY POLICY
									 </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<?php wp_footer(); ?>





	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.equalheightcolumns.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav.js"></script>
	
	<!-- <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/scrollreveal.js"></script>
	-->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/masonry.js"></script>

	

	


		<!-- analytics -->
		

		

		<script type="text/javascript">
			(function($) {
				
				
				// VERTICAL ALIGN FUNCTION
				$.fn.verticalAlign = function () { /* VERTICAL ALIGN FUNCTION */
					return this
					.css("margin-top",($(this).parent().height() - $(this).height())/2 + 'px' )
				};

				$(function() { /* on document load */

					// VERTICAL ALIGN
					$('.vertalign').each(function() {
						$( this ).verticalAlign();
					});
									
				});
				
				// MOBILE NAVIGATION

                $(document).ready(function () {

				  $(".icon").click(function () {
					$(".mobilenav").fadeToggle(500);
					$(".top-menu").toggleClass("top-animate");
					$(".mid-menu").toggleClass("mid-animate");
					$(".bottom-menu").toggleClass("bottom-animate");
				  });

				  $(".dropdown").click(function () {
					$(".dropdown").toggleClass("open");
				  });


				});
				
				// SLICK SLIDER
				
					// HP SLIDER STUFF 
						$('.slickslider').slick({
							  dots: false,
							  infinite: true,
							  autoplay: true,
							  autoplaySpeed: 5000
						  });

                      $('.slickslider2').slick({
                          dots: true,
                          arrows: false,
                          infinite: true,
                          autoplay: true,
                          autoplaySpeed: 5000
                      });
				 	  $('.slickslider3').slick({
                          dots: true,
                          arrows: true,
                          infinite: true,
                          autoplay: true,
                          autoplaySpeed: 5000
                      });
					  $('.slickslider4').slick({
                          dots: true,
                          arrows: true,
                          infinite: true,
                          autoplay: true,
                          autoplaySpeed: 5000
                      });
				
				
				
				// REVEAL STUFF ON SCROLL 
				
				/*
				window.sr = ScrollReveal();
                sr.reveal('#intro');
				sr.reveal('form');
				sr.reveal('.steps');
				//sr.reveal('#favorites .featured-img-wrap');
				sr.reveal('#content li');
				sr.reveal('#content blockquote');
				sr.reveal('.products .third');
				sr.reveal('footer');
				sr.reveal('#insta');
				*/

				 //GIVE PINTEREST FORMATTING TO ARTICLES
                $('.products').masonry({
                  // options
                  itemSelector: '.third'
                });
				
				//SAMEHEIGHT 
                if($(window).width() >= 992){
                    //$('.sameheight').equalHeightColumns();
                } 
				
				// SAMPLE ANNOUNCEMENT BANNER
				
				//$.cookie('SampleKey', 'SampleValue', { path: '/' });
				

				
				//if(cn_cookies_accepted()){
				////	$(".closebtn").html('Closed');
				//}
				

				
				
				

				var jRes = jRespond([
					{
						label: 'handheld',
						enter: 0,
						exit: 767
					},{
						label: 'tablet',
						enter: 768,
						exit: 992
					},{
						label: 'laptop',
						enter: 993,
						exit: 1199
					},{
						label: 'desktop',
						enter: 1200,
						exit: 10000
					}
				]);
			
				jRes.addFunc([
					{
						breakpoint: ['desktop','laptop','tablet'],
						enter: function() {},
						exit: function() {}
					},{
						breakpoint: ['handheld'],
						enter: function() {},
						exit: function() {}
					},{
					}
				]);
				
			})(jQuery);
	</script>



</body>
</html>