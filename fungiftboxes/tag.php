<?php 
				
/**
 * The template for displaying Tag Results pages.
 *
 */

get_header(); ?>

     
		<section id="tag" class="full left" style="padding: 60px;">
			<div class="container">


					<?php if ( have_posts() ) : ?>

            <header class="archive-header">
                <h1 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'pietergoosen' ), single_tag_title( '', false ) ); ?></h1>

                <?php
                    // Show an optional term description.
                    $term_description = term_description();
                    if ( ! empty( $term_description ) ) :
                        printf( '<div class="taxonomy-description">%s</div>', $term_description );
                    endif;
                ?>
            </header><!-- .archive-header -->

            <?php
                $counter = 1; //Starts counter for post column lay out

                // Start the Loop.
                while ( have_posts() ) : the_post();

        ?>
                <div class="entry-column<?php echo ( $counter%2  ? ' left' : ' right' ); ?>">

                    <?php get_template_part( 'content', get_post_format() ); ?>

                </div>  

        <?php   

            $counter++; //Update the counter

            endwhile;

        pietergoosen_pagination();

        else :
                    // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );

                endif;
            ?>
				



				
			</div>
		</section>


<?php get_footer(); // get footer ?>