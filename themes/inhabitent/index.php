<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<h1>index php</h1>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="container post-page">
				<div class='post-container'>
					<?php if ( have_posts() ) : ?>

						<?php if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php endif; ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/content' ); ?>

							<p class="read-btn">
								<a href="<?php the_permalink(); ?>" class="read-more black-btn">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</p>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>
				<div class="side-bar">
					<?php get_sidebar(); ?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
