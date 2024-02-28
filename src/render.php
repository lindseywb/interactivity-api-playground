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

// var_dump($block);
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
		<?php esc_html_e( 'Toggle', 'my-first-interactive-block' ); ?>
	</button>

	<div class="slider-container">
		<div class="slide">
			<h2>Slide 1</h2>
			<img src="https://placehold.co/600x400" alt="">
			<p>Slide text</p>
		</div>
		<div class="slide">
			<h2>Slide 2</h2>
			<img src="https://placehold.co/600x400" alt="">
			<p>Slide text</p>
		</div>
		<div class="slide">
			<h2>Slide 3</h2>
			<img src="https://placehold.co/600x400" alt="">
			<p>Slide text here</p>
		</div>
		<div class="slide">
			<h2>Slide 4</h2>
			<img src="https://placehold.co/600x400" alt="">
			<p>Text goes here</p>
		</div>
		<div class="slide">
			<h2>Slide 5</h2>
			<img src="https://placehold.co/600x400" alt="">
			<p>Slide text</p>
		</div>
		<div class="slide">
			<h2>Slide 6</h2>
			<img src="https://placehold.co/600x400" alt="">
			<p>Slide text</p>
		</div>
		<div class="slide">
			<h2>Slide 7</h2>
			<img src="https://placehold.co/600x400" alt="">
			<p>Slide Text</p>
		</div>
	</div>
</div>
