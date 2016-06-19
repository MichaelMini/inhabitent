<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header product-type">
				<h1 class="product-type-title">
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
				</h1>
				<?php the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<section class="all-products-wrap container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="single-product-container">
									<header class="entry-header">
										<?php if ( has_post_thumbnail() ) : ?>
											<a href="<?php the_permalink(); ?> ">
												<?php the_post_thumbnail( 'large' ); ?>
											</a> 
										<?php endif; ?>
									</header><!-- .entry-header -->

									<div class="entry-content product-type-wrapper">
										<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
										<!-- Price goes here -->
										<?php echo CFS()->get( 'price' ); ?>
									</div><!-- .entry-content -->
								</div>
						</article><!-- #post-## -->

				<?php endwhile; ?>
			</section>
			<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
