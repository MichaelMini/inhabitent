<?php
/**
 * The template for displaying search results pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="container post-page search-page">
				<div class='post-container'>

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
						
							<?php get_template_part( 'template-parts/content', 'search' ); ?>
							<p class="read-btn">
								<a href="<?php the_permalink(); ?>" class="read-more black-btn">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</p>
						<?php endwhile; ?>

							<?php red_starter_numbered_pagination(); ?>

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>

				</div>
				<section class="side-bar">
					<?php get_sidebar(); ?>
				</section>
				
			</section>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
