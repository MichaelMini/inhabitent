<?php
/**
 * The template for displaying all single products.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<h1>single-product.php</h1>
	<div id="primary" class="content-area">
		<main id="main" class="site-main single-product" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</header><!-- .entry-header -->


				<div class="entry-content">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<!-- Price goes here -->
					<?php echo CFS()->get( 'price' ); ?>
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>