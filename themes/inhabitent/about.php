<?php
/**
 * Template Name: About Page
 * @package RED_Starter_Theme
 */

get_header(); ?>
<h1>about.php</h1>
	<div id="primary" class="content-area about-page">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<section class="container page-container">
					<div class="page-about-content">

						<h1 class="title">Our story</h1>
						<?php echo CFS()->get( 'about_our_story' ); ?>

						<h1 class="title">Our team</h1>
						<?php echo CFS()->get( 'about_our_team' ); ?>

					</div>
				</section>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
