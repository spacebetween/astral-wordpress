<?php
/**
 * Entry meta information for posts
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		echo '<div class="">'. __( '', 'foundationpress' ) .' <a href="'. get_author_posts_url( get_the_author_meta( 'ID' ) ) .'" rel="author" class="fn">'. get_the_author() .'</a></div>';
		echo '<time class="updated" datetime="'. get_the_time( 'c' ) .'">'. sprintf( __( '%s', 'foundationpress' ), get_the_date(), get_the_time() ) .'</time>';
	}
endif;
?>
