<?php
/**
 * Block Horizontal Type 5
 *
 * @var        $attributes - block attributes
 * @var        $options - layout options
 * @var        $posts - all available posts
 *
 * @package Newsblock
 */

$options['thumbnail_content'] = true;

?>
<article <?php post_class(); ?>>
	<div class="cs-entry__outer">
		<?php cnvs_block_post_thumbnail( $options, $attributes ); ?>

		<div class="cs-entry__inner cs-entry__content ">
			<?php cnvs_block_post_title( $options ); ?>

			<?php cnvs_block_post_excerpt( $options ); ?>

			<?php cnvs_block_post_meta( $options, array( 'category', 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ) ); ?>
		</div>
	</div>
</article>
