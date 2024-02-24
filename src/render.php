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

?>

<div
	<?php echo get_block_wrapper_attributes(); ?>
	data-wp-interactive="create-block"
	data-wp-context='{ "days": 0, "currentDate": "-" }'
	data-wp-init="callbacks.logTimeInit"
	data-wp-watch="callbacks.getDaysUntilChristmas"
>
	<h2>How long until Christmas?</h2>
	<p>Current Date: <span data-wp-text="context.currentDate"></span></p>
	<p>Days until Christmas: <span data-wp-text="context.days"></span></p>

</div>
