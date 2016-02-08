<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h1>Light art, <br/>bright art</h1>
		</div>
	</div>
</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<section class="intro" role="main">
		<div class="fp-intro">

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content columns small-12 medium-12 large-8">
					<?php the_content(); ?>
				</div>
				<div class="columns small-12 medium-12 large-4">
					<img src="https://c1.staticflickr.com/9/8317/8073692997_6393ba0837_h.jpg" alt="">
				</div>
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
			</div>

		</div>

	</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="section-divider">
	<hr />
</div>


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
					<?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
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



<?php get_footer(); ?>
