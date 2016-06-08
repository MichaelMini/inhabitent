<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<h4>single.php</h4>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="container post-page">
				<div class="post-container">

					<?php while ( have_posts() ) : the_post(); ?>
						<div class="have-post">
							<?php get_template_part( 'template-parts/content', 'single' ); ?>
						</div>

						<div class="social-buttons">
						   <a href="" type="" class="black-btn"><i class="fa fa-facebook"></i>Like</a>
						   <a href="" type="" class="black-btn"><i class="fa fa-twitter"></i>Tweet</a>
						   <a href="" type="" class="black-btn"><i class="fa fa-pinterest"></i>Pin</a>
						</div>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // End of the loop. ?>
					
				</div>
				<div class="side-bar">
					<?php get_sidebar(); ?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
