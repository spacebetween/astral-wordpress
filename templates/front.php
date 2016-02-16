<?php
/*
Template Name: Front
*/
get_header();

$pageID = get_the_ID();

$thumb_id = get_post_thumbnail_id( $pageID );
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
$featuredImage = $thumb_url_array[0];

$heroTextColour = get_post_meta($pageID, 'heroTextColour', true);
$heroHeaderText = get_post_meta($pageID, 'heroHeaderText', true);
$heroBlagText = get_post_meta($pageID, 'heroBlagText', true);
?>

<header class="hero hero-outdoor hero-<?php echo $heroTextColour; ?>" role="banner" style="background-image: url('<?php echo $featuredImage ?>');">
	<div class="hero_container">
		<h1 class="hero_title link link-mallki link-mallki-dark">
			<?php echo $heroHeaderText;?>
			<!-- Uses two spans to draw the letters, don't delete it Luke. You spanner. -->
			<span data-letters="<?php echo $heroHeaderText;?>"></span>
			<span data-letters="<?php echo $heroHeaderText;?>"></span>
		</h1>
		<h2 class="hero_blag"><?php echo $heroBlagText;?></h2>
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
