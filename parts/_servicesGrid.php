<section>
	<div class="masonry">
		<div class="masonry_sizer"></div>
		<?php 
			$args = array(
				'post_type' => 'page',
				'post_status' => 'publish'
				); 
			$pages = get_pages($args); 
			foreach($pages as $page) {
				if ( get_post_meta($page->ID, 'is_featuredService', true) == 1 ) {
				?>
				<div class="masonry_item">
					<?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
					<div class="masonry_content">
						<h2 class="masonry_title"><?php echo $page->post_title; ?></h2>
						<a class="masonry_link" href="<?php echo get_page_link( $page->ID ); ?>">View more</a>
					</div>
				</div>
				<?php
				}
			}	
		?>
	</div>

</section>