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

$heading = $attributes['heading'];
?>

<div
	<?php echo get_block_wrapper_attributes(); ?>
	data-wp-interactive="create-block"
	data-wp-context='{ "isInView": false }'
	data-wp-on-document--scroll="actions.updateIsInView"
>
	<div class="promo-box">
		<h2><?php echo $heading; ?></h2>
	</div>
	<button
		data-wp-on--click="actions.toggle"
		data-wp-bind--aria-expanded="context.isOpen"
		aria-controls="<?php echo esc_attr( $unique_id ); ?>"
	>
		<?php esc_html_e( 'Toggle', 'my-first-interactive-block' ); ?>
	</button>

	<p
		id="<?php echo esc_attr( $unique_id ); ?>"
		data-wp-bind--hidden="!context.isInView"
	>
		<?php
			esc_html_e( 'My First Interactive Block - hello from an interactive block!', 'my-first-interactive-block' );
		?>
	</p>
</div>
