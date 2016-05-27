<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<h1>archive-product.php</h1>
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<!-- <h1 class="font-h"></h1> -->
<?php $terms = get_terms( 'product-type' ); ?>
<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):?>
	<section class="product-info container">
		<h2>Shop stuff</h2>
		<div class="product-type-container">
			<?php foreach ( $terms as $term ) :?>
			    <div class="product-type-wrapper">
			        <!-- <p><img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $term->slug ?>.svg" height="70" width="70"></p> -->
			        <!-- <p><?php echo $term->description ?></p> -->
			        <p>
			        	<a href="<?php echo get_post_type_archive_link() ?>/inhabitent/product-type/<?php echo $term->slug ?>/" class="btn">
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

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
