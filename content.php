<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */
$thumb_id = get_post_thumbnail_id( get_the_ID() );
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', false);
$featuredImage = $thumb_url_array[0];
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry card'); ?>>
	<header class="card_header">
		<?php foundationpress_entry_meta(); ?>
	</header>
	<?php if ( $featuredImage != '' ){ ?>
		<div class="card_image" style="background-image: url('<?php echo $featuredImage; ?>');"></div>
	<?php	} ?>
	<div class="card_content">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</div>
