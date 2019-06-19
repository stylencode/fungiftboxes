<?php get_header(); ?>

<?php get_header(); 
if ( is_account_page() ) { ?>

<section id="woo-my-account">
  <div class="container-fluid">
  		<div class="container">

	  		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
			<?php the_content(); ?>
			<?php endwhile; wp_reset_postdata(); // end of the loop. ?>
		</div>
  </div>
 </section>


<?php  } else { ?>

<div class="container-fluid clear" style="background-color: white; ">
  		<div class="container">

 		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<?php the_content(); ?>
		<?php endwhile; wp_reset_postdata(); // end of the loop. ?>
 		</div>
  </div>

 <?php } ?>









<?php /* footer */ get_footer(); ?>