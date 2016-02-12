<section class="section">
	<div class="row row-small column">
		<h2>Our most popular services</h2>
	</div>
<?php 
	$args = array(
		'post_type' => 'page',
		'post_status' => 'publish'
		); 
	$pages = get_pages($args); 
	foreach($pages as $page) {
		if ( get_post_meta($page->ID, 'is_featuredService', true) == 1 ) {
			$thumb_id = get_post_thumbnail_id( $page->ID );
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
			$thumb_url = $thumb_url_array[0];
		?>
		<div class="row row-small service" style="background-image: url('<?php echo $thumb_url; ?>');">
			<div class="service_mask"></div>
			<div class="column small-12 medium-6">
				<div class="service_container">
					<h3 class="service_title"><?php echo $page->post_title; ?></h3>
					<p class="service_description">
						<?php echo get_post_meta($page->ID, 'featuredExcerpt', true);?>
					</p>
					<a href="<?php echo get_page_link( $page->ID ); ?>" class="text-right">Read more</a>
				</div>
			</div>
		</div>
		<?php
		}
	}	
?>
</section>