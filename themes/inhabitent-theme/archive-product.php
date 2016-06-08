<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<h1>archive-product.php</h1>
	<div id="primary" class="content-area">
		<main id="main" class="site-main archive-product" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header archive-product">
				
				<?php $terms = get_terms( 'product-type' ); ?>
				<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):?>
					<section class="product-info container">
						<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

						<div class="product-type-container">
							<?php foreach ( $terms as $term ) :?>
							    <div class="product-type-wrapper">
							        <p>
							        	<a href="<?php echo get_term_link($term, 'product-type') ?>" class="product-type-link">
							        		<?php echo $term->slug ?> <!-- stuff -->
							        	</a>
							        </p>   
							    </div>
							<?php endforeach ?>
						</div>
					</section>
				<?php endif; ?>
			</header><!-- .page-header -->

			<section class="all-products-wrap container">
				<?php /* Start the Loop */ ?>
				
				<?php
				   $args = array( 'post_type' => 'product', 'posts_per_page' => 16 , 'order'=> 'ASC', 'orderby'=>'name');
				   $product_posts = get_posts( $args ); // returns an array of posts
				?>
				<?php foreach ($product_posts as $post) : setup_postdata($post); ?>


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
								<?php the_title( '<h1 class="entry-title">', '....................</h1>' ); ?>
								<!-- Price goes here -->
								<!-- <h1>hello</h1> -->
									<?php echo CFS()->get( 'price' ); ?>
							</div><!-- .entry-content -->
						</div>
				</article><!-- #post-## -->


				<?php endforeach; wp_reset_postdata(); ?>
			</section>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
