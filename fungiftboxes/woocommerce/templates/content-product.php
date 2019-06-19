<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$price = $product->get_price();
$permalink = $product->get_permalink();


// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>


<div class="third" style="display: inline-block;; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: all 0.25s ease-in-out 0s, -webkit-transform 0.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: all 0.25s ease-in-out 0s, transform 0.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; text-align: center;" data-sr-id="1"><a href="<?php echo $permalink; ?>">
                                    <div class="single-wrap" style="background: url(<?php the_post_thumbnail_url() ?>); background-position: center center; background-size: cover;">
                                    </div>
                                    </a><div class="content-wrap"><a href="#">
                                        <div class="row">
                                            <h4>
                                                <?php the_title(); ?>
                                            </h4>
											<hr>
                                        </div>
                                        <div class="row">
                                            <p class="full left price"  style="padding-left: 0;">
                                                <?php 
                                                	
                                                	echo "$".$price.".00";
                                                ?>
                                            </p>
                                        </div>
                                        </a><div class="row">
                                        	<a href="#"></a>

                                            <a class="button grey"  href="<?php echo $permalink; ?>">View Item </a>
                                        </div>
                                    </div>
                                </div>



