<?php
/**
 * Admin edit-Component meta box html
 *
 * @version 3.14.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="composite_components">
<?php

	foreach ( $components as $component ) {

		$component_data = array(
			'component_id' => $component->get_id(),
			'composite_id' => $component->get_composite_id()
		);

		?>
		<div class="composite_component" data-component_data="<?php echo esc_attr( json_encode( $component_data ) ); ?>">
		<?php

			/*
			 * Component title.
			 */

			wc_get_template( 'single-product/component-title.php', array(
				'title'   => $component->get_title( true ),
				'toggled' => false,
				'tag'     => 'h4'
			), '', WC_CP()->plugin_path() . '/templates/' );

			/*
			 * Component options.
			 */

			$chosen_option_id = $component->get_default_option( true );
			$chosen_option    = $chosen_option_id ? $component->get_option( $chosen_option_id ) : false;

			?>
			<div class="component_option_select_wrapper">
				<select id="component_option_select_<?php echo $component->get_id(); ?>" class="component_option_select wc-product-search" style="width: 75%;" name="wccp_component_selection[<?php echo $component->get_id(); ?>]" data-allow_clear="true" data-action="woocommerce_json_search_products_in_component" data-include="<?php echo esc_attr( json_encode( $component_data ) ); ?>" data-limit="100" data-component_optional="<?php echo $component->is_optional() ? 'yes' : 'no'; ?>" data-placeholder="<?php echo __( 'Search for a product&hellip;', 'woocommerce-composite-products' ); ?>">
					<?php
						if ( $chosen_option ) {
							echo '<option value="' . $chosen_option_id . '" selected="selected">' . WC_CP_Helpers::get_product_title( $chosen_option->get_product() ) . '</option>';
						}
					?>
				</select>
			</div>
			<?php

			/*
			 * Component selection details.
			 */

			?>
			<div class="component_option_selection_details_wrapper <?php echo $chosen_option ? 'component_option_selection_type_' . $chosen_option->get_product()->get_type() : ''; ?>">
				<?php
					if ( $chosen_option ) {
						echo WC_CP()->display->show_composited_product( $chosen_option_id, $component->get_id(), $product );
					}
				?>
			</div>
		</div>
		<?php
	}
?>
</div>
