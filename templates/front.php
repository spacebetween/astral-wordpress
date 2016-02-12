<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="hero hero-outdoor" role="banner">
	<div class="hero_container">
		<h1 class="hero_title">light art, bright art</h1>
		<h2 class="hero_blag">because we can</h2>
	</div>
</header>

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

<?php get_template_part( 'parts/_featuredServices' ); ?>


<?php get_footer(); ?>
