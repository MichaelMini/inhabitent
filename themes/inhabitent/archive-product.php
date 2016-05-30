<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main archive-product" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header archive-product">
				<!-- <h1 class="font-h"></h1> -->
				<?php $terms = get_terms( 'product-type' ); ?>
				<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):?>
					<section class="product-info container">
						<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

						<div class="product-type-container">
							<?php foreach ( $terms as $term ) :?>
							    <div class="product-type-wrapper">
							        <!-- <p><img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $term->slug ?>.svg" height="70" width="70"></p> -->
							        <!-- <p><?php echo $term->description ?></p> -->
							        <p>
							        	<a href="<?php echo get_post_type_archive_link() ?>/inhabitent/product-type/<?php echo $term->slug ?>/" class="">
							        		<?php echo $term->slug ?> <!-- stuff -->
							        	</a>
							        </p>   
							    </div>
							<?php endforeach ?>
						</div>
					</section>
				<?php endif; ?>
				<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<section class="all-products-wrap container">
				<?php /* Start the Loop */ ?>
				<?php query_posts($query_string."&orderby=title&order=ASC"); ?>
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
