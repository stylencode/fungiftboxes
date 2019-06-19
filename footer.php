<footer class="full left" id="footer">
     <div class="container">
          <div class="row">
            <div class="col-lg-17 col-lg-offset-0 col-md-15 col-md-offset-0 col-xs-44 col-xs-offset-2">
               <h3>#sweetcowicecream</h3>
			   <div class="instagram-wrap">
			   	<a href="https://www.instagram.com/thesweetcow/" target="_blank">
					<?php echo (do_shortcode('[instagram-feed]')); ?>
				</a>
			   </div>
            </div>
            <div class="col-lg-7 col-lg-offset-2 col-md-7 col-md-offset-1 col-sm-13 col-sm-offset-2 col-xs-44 col-xs-offset-2 sameheight">
              <h3>Sitemap</h3>
			  	<ul>
								<?php wp_nav_menu( array(
												'theme_location' => 'footer-menu',
												'container' => false,
                                                'items_wrap' => '%3$s'
								) ); ?>
           </div>
            <div class="col-lg-9 col-lg-offset-2 col-md-11 col-md-offset-1 col-sm-14 col-sm-offset-1 col-xs-44 col-xs-offset-2">
              <h3>Follow the Cow</h3>
			  	<div class="social-wrap">
						<nav class="social">
								<ul>
									<?php if(get_field('facebook_link', '539')) { ?>
									<li><a href="<?php the_field('facebook_link', '539'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-facebook-header.png" alt="Sweet Cow Ice Cream | Facebook" /></a></li>
								<?php } ?>
								<?php if(get_field('twitter_link', '539')) { ?>
									<li><a href="<?php the_field('twitter_link', '539'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-twitter-header.png" alt="Sweet Cow Ice Cream | Twitter" /></a></li>
									<?php } ?>
									<?php if(get_field('twitter_link', '539')) { ?>
									<li><a href="<?php the_field('instagram_link', '539'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-instagram-header.png" alt="Sweet Cow Ice Cream | Instagram" /></a></li>
									<?php } ?> 
								</ul>
						</nav>
					</div>
           </div>
           <div class="col-md-10 col-md-offset-1 col-sm-15 col-sm-offset-1 col-xs-44 col-xs-offset-2 sameheight">
              <a id="logo-footer" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.png" alt="Sweet Cow Ice Cream" /></a>
           </div>
        </div>
    </div>
    <div id="sub-footer" class="full left">
		<div class="container">
        	<p class="text-center">&copy; <?php echo date("Y")?>. Sweet Cow Ice Cream. <?php the_field('footer_credits', '539'); ?> Site by <span class="btdesign"><a href="http://brentthelendesign.com" target="_blank">brentthelendesign</a></span></p>
    	</div>
	</div>
</footer>
	<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.equalheightcolumns.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/respond.min.js"></script>
	
	<script type="text/javascript">
			(function($) {
				
				// NAVIGATION
				
				$(document).ready(function () {
				  $(".icon").click(function () {
					$(".mobilenav").fadeToggle(500);
					$(".top-menu").toggleClass("top-animate");
					$(".mid-menu").toggleClass("mid-animate");
					$(".bottom-menu").toggleClass("bottom-animate");
				  });
				});
				
				
			// MENU PAGE POPUP STYLINGS	
				
				//BOARD 1
				
				// Scoops Popup
				
				$(document).ready(function () {
				  $(".scoopspop").click(function () {
					$(".menupop").fadeToggle(500);
				  });
				});
								
				// Sundae Popup
				
				$(document).ready(function () {
				  $(".sundaepop").click(function () {
					$(".menupop2").fadeToggle(500);
				  });
				});
				
				// Fudge Popup
				
				$(document).ready(function () {
				  $(".fudgepop").click(function () {
					$(".menupop3").fadeToggle(500);
				  });
				});
				
				// Good Popup
				
				$(document).ready(function () {
				  $(".goodpop").click(function () {
					$(".menupop4").fadeToggle(500);
				  });
				});
				
				// More Good Popup
				
				$(document).ready(function () {
				  $(".moregoodpop").click(function () {
					$(".menupop5").fadeToggle(500);
				  });
				});
				
				//BOARD 2
				
				// Ice Cream Cakes Popup
				
				$(document).ready(function () {
				  $(".cakespop").click(function () {
					$(".menupop6").fadeToggle(500);
				  });
				});
								
				// Shakes Popup
				
				$(document).ready(function () {
				  $(".shakespop").click(function () {
					$(".menupop7").fadeToggle(500);
				  });
				});
				
				// Take Home Popup
				
				$(document).ready(function () {
				  $(".takehomepop").click(function () {
					$(".menupop8").fadeToggle(500);
				  });
				});
				
				// In-house Popup
				
				$(document).ready(function () {
				  $(".inhousepop").click(function () {
					$(".menupop9").fadeToggle(500);
				  });
				});
				
				// Beer Popup
				
				$(document).ready(function () {
				  $(".beerpop").click(function () {
					$(".menupop10").fadeToggle(500);
				  });
				});
                
                // Allergy Popup
				
				$(document).ready(function () {
				  $(".allergypop").click(function () {
					$(".menupop11").fadeToggle(500);
				  });
				});
                
                // FLAVOR POPUP
                
              
                    $(".flavorlink").click(function(){
                         $(this).next('.flavorpop').fadeToggle('500');      
                    });
				
				
				$(".closebutton").click(function () {
					$(".menupop").css("display", "none");
					$(".menupop2").css("display", "none");
					$(".menupop3").css("display", "none");
					$(".menupop4").css("display", "none");
					$(".menupop5").css("display", "none");
					$(".menupop6").css("display", "none");
					$(".menupop7").css("display", "none");
					$(".menupop8").css("display", "none");
					$(".menupop9").css("display", "none");
					$(".menupop10").css("display", "none");
                    $(".menupop11").css("display", "none");
				});
                $(".close").click(function () {
                    $(".flavorpop").css("display", "none");
				});
				
				
				
				// BX SLIDER
				
				$(document).ready(function(){
				  $('.bxslider').bxSlider({
					auto: true,
					speed: 600,
					pause: 15000
				  });
				});
				
				
				//PARALLAX
				  
				  var top_header = '';
					$(document).ready(function(){
				 	top_header = $('#interior-header');
					});
					$(window).scroll(function () {
						  var st = $(window).scrollTop();
						  top_header.css({'background-position':"center "+(st*.9)+"px"});
					});
					
					if ($(window).width() < 767) {
						
						var top_header = '';
							$(document).ready(function(){
							top_header = $('#interior-header');
							});
							$(window).scroll(function () {
								  var st = $(window).scrollTop();
								  top_header.css({'background-position':"center "+(st*.0)+"px"});
							});
					}
				
				var top_header = '';
					$(document).ready(function(){
				 	top_header = $('section#hp-slider');
					});
					$(window).scroll(function () {
						  var st = $(window).scrollTop();
						  top_header.css({'background-position':"center "+(st*.9)+"px"});
					});
					
					if ($(window).width() < 767) {
						
						var top_header = '';
							$(document).ready(function(){
							top_header = $('section#hp-slider');
							});
							$(window).scroll(function () {
								  var st = $(window).scrollTop();
								  top_header.css({'background-position':"center "+(st*.0)+"px"});
								});
					}
				
				
				//ADD STYLE TO STICKY NAV ONCE SCROLLED
				
				$(window).scroll(function() {
					if ($(this).scrollTop() == 0) {
						$('header .primary-nav').css({
								'box-shadow': 'none' });
					}
					else {
						$('header .primary-nav').css({
								'box-shadow': ' 0px 5px 5px rgba(35,24,72,.5)' });
					}
				});
				
				
				//MAP POPUP
				
				$(document).ready(function() {
					$('.map-wrap a.btn.mapup').magnificPopup({
					  disableOn: 700,
					  type: 'iframe',
					  mainClass: 'mfp-fade',
					  removalDelay: 160,
					  preloader: false,
			
					  fixedContentPos: false
					});
				  });
				
				
				$('.gallery-thumb a').magnificPopup({
					  type: 'image',
					  mainClass: 'mfp-fade',
					  removalDelay: 160,
					  preloader: false,			
					  fixedContentPos: false,
					  gallery: { enabled:true }
					});
	
				
					$('.media-thumb .mediapop').magnificPopup({
								  type: 'image',
								  mainClass: 'mfp-fade',
								  removalDelay: 160,
								  preloader: false,			
								  fixedContentPos: false,
								  gallery: { enabled:true },
								  
								  image: {
									 
									titleSrc: function(item) {
									  var downloadLink = item.el.attr('data-download'),
										  finalLink = item.el.attr('title') + downloadLink;
									  return finalLink;
									}

								  }
								});						
					
				//SAMEHEIGHT
				$('.sameheight').equalHeightColumns();
				
				
				
				$('.woocommerce ul.products li.product').equalHeightColumns();
				$('.woocommerce-page ul.products li.product').equalHeightColumns();
				$('.woocommerce ul.products li.product h3').equalHeightColumns();
				$('.menu-board-wrap.full.left.rel').equalHeightColumns();
				
				$('.threeblock').equalHeightColumns();
				
				
				
				//REMOVE SAMEHEIGHT 
				
				$(window).bind("resize",function(){
					console.log($(this).width())
					if($(this).width() <991){
					$('div').removeClass('sameheight');
					}
				});
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
				var jRes = jRespond([ /* BECAUSE RESPONSIVE NEEDS LOVE */
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
					}
				]);
				
			})(jQuery);
	</script>
</body>
</html>