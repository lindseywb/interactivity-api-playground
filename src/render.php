<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

// Generate unique id for aria-controls.
$unique_id = wp_unique_id( 'p-' );

$heading = $attributes['popup_heading'];
$summary = $attributes['popup_summary'];
?>

<div
	<?php echo get_block_wrapper_attributes(); ?>
	data-wp-interactive="create-block"
	data-wp-context='{ "isOpen": false }'
	data-wp-watch="callbacks.logIsOpen"
>
	<button
		data-wp-on--click="actions.toggle"
		data-wp-bind--aria-expanded="context.isOpen"
		aria-controls="<?php echo esc_attr( $unique_id ); ?>"
	>
		<?php esc_html_e( 'Toggle Popup', 'my-first-interactive-block' ); ?>
	</button>

	<div
		id="<?php echo esc_attr( $unique_id ); ?>"
		data-wp-bind--hidden="!context.isOpen"
		class="popup"
	>
		<div>
			<h2><?php echo $heading; ?></h2>
			<p><?php echo $summary; ?></p>

			<button class="button btn-close" data-wp-on--click="actions.close">Close</button>
		</div>
	</div>
</div>
