<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar" data-sticky-container>
	<div class="sticky" data-sticky data-options="marginTop:5;" data-top-anchor="content" data-btm-anchor="content:bottom">
		<?php do_action( 'foundationpress_before_sidebar' ); ?>
		<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
		<?php do_action( 'foundationpress_after_sidebar' ); ?>
	</div>
</aside>