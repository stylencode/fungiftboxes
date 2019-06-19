<?php
/**
 * Result Count
 *
 * Shows text: Showing x - x of x results.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/result-count.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="col-lg-12">
<p class="woocommerce-result-count" style="font-size: 1.2em;">
	<?php
	if ( $total <= $per_page || -1 === $per_page ) {
		/* translators: %d: total results */
		printf( _n( 'Showing the single result', 'Showing all %d results', $total, 'woocommerce' ), $total );
	} else {
		$first = ( $per_page * $current ) - $per_page + 1;
		$last  = min( $total, $per_page * $current );
		/* translators: 1: first result 2: last result 3: total results */
		printf( _nx( 'Showing the single result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, 'with first and last result', 'woocommerce' ), $first, $last, $total );
	}
	?>
</p>
</div>

<div class="col-md-4" style="display: none !important;">

	<p  style="font-size: 1.2em;">FILTER:  

	<?php 

		$url = site_url();

		$taxonomy = 'product_tag';
		$tags = get_terms( $taxonomy );
		if( $tags && is_array( $tags ) ) {
		    foreach( $tags as $tag ) {
		        $first_letter = strtoupper( $tag->name[0] );
		        $groups[ $first_letter ][] = $tag;
		    }
		    if( !empty( $groups ) ) {
		        $list = '';
		        foreach( $groups as $letter => $letter_tags ) {
		            foreach( $letter_tags as $tag ) {
		                $term_link = get_term_link( $tag->term_id, $taxonomy );
		                $count = intval( $tag->count );
		                $name = apply_filters( 'the_title', $tag->name );
		                $list .= "\n\t\t" . '<a class="filter-tag" href="' . $term_link . '">' . $name . '</a>';
		            }
		        }
		    }
		};

		$list .= "\n\t\t" . '<a class="filter-tag" href="' . $url . '/shop">View All</a>';

		// Output
		echo $list.'</p>';



	?>

</div>
