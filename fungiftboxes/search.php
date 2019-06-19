<?php 
				
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>

     
		<section id="search" class="full left" style="padding: 60px;">
			<div class="container">


				<?php
					$s=get_search_query();
					$args = array(
					                's' =>$s
					            );
					    // The Query
					$the_query = new WP_Query( $args );

					if ( $the_query->have_posts() ) {
					        _e("<div class='row'><div class='col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1'><h1 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h1></div></div>");



					        while ( $the_query->have_posts() ) {
					           $the_query->the_post();
					                 ?>

					                 	<!-- INTRO PARAGRAPH -->
												<div class="row">
													<div class="col-xs-10 col-xs-offset-1">
														<h4><?php the_title(); ?></h4>
														<p>
															<?php the_excerpt(); ?>
														</p>
														 <a href="<?php the_permalink(); ?>">Read More ...</a>
													</div>
												</div>
										
					                 <?php
					        }
					    }else{
					?>
					        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
					        <div class="alert alert-info">
					          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
					        </div>
					<?php } ?>
				
			</div>
		</section>


<?php get_footer(); // get footer ?>