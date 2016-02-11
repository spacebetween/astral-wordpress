<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="hero hero-outdoor" role="banner">
	<div class="hero_container">
		<h1 class="hero_title">astral</h1>
		<h2 class="hero_blag">light art bright art<br/>because we can</h2>
	</div>
</header>
<!-- <section class="row">
	<div class="column usp">
		<div class="usp_item">Staging</div>
		<div class="usp_item">Lighting</div>
		<div class="usp_item">Production</div>
		<div class="usp_item">Design</div>
	</div>
</section> -->

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<section class="intro section" role="main">
		<div class="fp-intro">

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content columns small-12">
					<?php the_content(); ?>
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

<?php get_template_part( 'parts/_contact' ); ?>

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
