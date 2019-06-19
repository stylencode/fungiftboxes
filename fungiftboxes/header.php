<?php
/**
 * @package All Sacred Theme
 * @subpackage themename_All_Sacred
 * @author Brent Thelen Design - brentthelendesign.com.com
 */
?>

<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri();?>/wp-content/themes/fungiftboxes/screenshot.png">
	
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php
		// Detect Yoast SEO Plugin
		if (defined('WPSEO_VERSION')) {
			wp_title('');
		} else {
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
	
		wp_title( '|', true, 'right' );
	
		// Add the blog name.
		bloginfo( 'name' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'themename_theme' ), max( $paged, $page ) );
		}
		?>
	</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->

	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/stylesheets/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- FONTS
  ================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Cormorant:600i,700|Roboto:300,400,400i,700" rel="stylesheet">
	<!-- 
		font-family: 'Cormorant', serif;
		font-family: 'Roboto', sans-serif;	
	-->

	
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- Add CSS3 Rules here for IE 7-9
	================================================== -->
	
	<!--[if IE]>
	<style type="text/css">
	</style>
	<![endif]-->
	
	
	<!-- Mobile Specific Metas
	================================================== -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	
	<!-- Favicons
	================================================== -->
	
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-114x114.png" />

	<link rel="pingback" href="<?php echo get_option('siteurl') .'/xmlrpc.php';?>" />
	


<?php
	/* 
	 * enqueue threaded comments support.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	// Load head elements
	wp_head();
?>

	
<!-- GET ME JQUERY, AND IT'S FRIENDS
	================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		if (typeof jQuery == 'undefined') {
			document.write(unescape("%3Cscript src='<?php echo get_stylesheet_directory_uri();?>/js/jquery-3.3.1.min.js' type='text/javascript'%3E%3C/script%3E"));
		}
	</script>
	
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery-migrate-1.2.1.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jRespond.min.js"></script>



</head>
<body <?php body_class(); ?>>

			<!-- Announcement Bar -->
			<!--<div id="alert">
				<span class="closebtn">×</span> 
				 Use the WordPress Plugin "Cookie Notice" for this
			</div>
			-->

			<!-- header -->
			<header class="full left">
					<div class="container">

							<div class="col-md-10 col-xs-10 col-xs-offset-1 col-md-offset-1 desktop-hide mobile-show"  style="display: none; padding: 10px 0;">
								<?php echo do_shortcode('[aws_search_form]'); ?>
								
							</div>


							<div class="col-md-2 col-xs-4">
								<a class="logo" href="<?php echo get_site_url(); ?>">
									<img class="animated bounceIn" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fgb-logo.svg" alt="Fun Gift Boxes" />
								</a>
							</div>
							<div class="col-md-5 col-md-offset-0 col-xs-8 col-xs-offset-0 tablet-show mobile-show">
								<nav class="adminnav animated bounceIn">



									<ul>
										


										<?php global $woocommerce;
											if ( $woocommerce->cart->cart_contents_count != 0 ) { ?>
											   
												<li class="cart">
													<a href="<?php echo get_site_url(); ?>/cart">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-cart.svg" alt="Cart" />
														<mark>
															(<?php echo $woocommerce->cart->cart_contents_count; ?>)
														</mark>
													</a>
												</li>

											<?php }

										?>

										
										<li class="login">
											<a href="#">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-account.svg" alt="Account" />
												Login
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-md-5 col-md-offset-1 col-xs-8 col-xs-offset-0 mainnav">
								<nav class="main navbar navbar-expand-sm">

											<div class="mainnavhide full left mobile-hide">
												
												<ul class="navbar-nav">
												  <li class="dropdown">
													  <a class="dropdown-toggle" href="<?php echo get_site_url(); ?>/product-category/curated-gifts" id="navbardrop" data-toggle="dropdown">
														Shop
													  </a>
													  <div class="dropdown-menu animated bounceIn">
														<a class="dropdown-item" href="<?php echo get_site_url(); ?>/product-category/curated-gifts">Curated</a>
														<a class="dropdown-item" href="<?php echo get_site_url(); ?>/corporate">Corporate</a>
													  </div>
													</li>
													<li>
													  <a href="<?php echo get_site_url(); ?>/about">about</a>
													</li>
													<li>
													  <a href="<?php echo get_site_url(); ?>/faq">faq</a>
													</li>
													<li>
													  <a href="<?php echo get_site_url(); ?>/contact">contact</a>
													</li>
												</ul>
											  </div>
				           		</nav>
								<!-- MOBILE NAV -->
												<a href="javascript:void(0)" class="icon mobile-show" style="display: none;">

																			<div class="hamburger">
																			  <div class="menui top-menu"></div>
																			  <div class="menui mid-menu"></div>
																			  <div class="menui bottom-menu"></div>
																			</div>
																			<span class="menu-text">
																				Menu
																			</span>

													</a>
													<div class="mobilenav animated bounceIn"> 
															<ul class="navbar-nav">
															  <li class="dropdown">
																  <a class="dropdown-toggle" href="<?php echo get_site_url(); ?>/product-category/curated-gifts" data-toggle="dropdown">
																	Shop
																  </a>
																  <div class="dropdown-menu animated bounceIn">
																	<a class="dropdown-item" href="<?php echo get_site_url(); ?>/product-category/curated-gifts">Curated</a>
																	<a class="dropdown-item" href="<?php echo get_site_url(); ?>/corporate">Corporate</a>
																  </div>
																</li>
																<li>
																  <a href="<?php echo get_site_url(); ?>/about">about</a>
																</li>
																<li>
																  <a href="<?php echo get_site_url(); ?>/faq">faq</a>
																</li>
																<li>
																  <a href="<?php echo get_site_url(); ?>/contact">contact</a>
																</li>
															</ul>
													</div>
											<!-- End Mobile Nav -->				
							</div>
							<div class="col-md-5 col-md-offset-0 col-xs-9 col-xs-offset-0 tablet-hide mobile-hide">
								<nav class="adminnav animated bounceIn">
									<ul>
										<li class="search">



												<?php echo do_shortcode('[aws_search_form]'); ?>
											
												
										</li>
										<?php global $woocommerce;
											if ( $woocommerce->cart->cart_contents_count != 0 ) { ?>
											   
												<li class="cart">
													<a href="<?php echo get_site_url(); ?>/cart">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-cart.svg" alt="Cart" />
														<mark>
															(<?php echo $woocommerce->cart->cart_contents_count; ?>)
														</mark>
													</a>
												</li>

											<?php }

										?>

										
										<li class="login">
											<a href="<?php echo get_site_url(); ?>/my-account">
												<img src="<?php echo get_template_directory_uri(); ?>/images/icon-account.svg" alt="Account" />
												Login
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>		 
				</header>
			<!-- /header -->
