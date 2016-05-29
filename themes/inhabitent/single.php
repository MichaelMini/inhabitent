<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<h1>single.php</h1>
<!-- <?php get_the_title(); ?> -->
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<!-- demo start -->
			<!-- <form action="" method="post">
			   <?php wp_nonce_field( 'comment_nonce' ); ?>
			   <button type="button" id="close-comments">Close Comments</button>
			</form> -->
			<!-- demo end -->

			<button type="button" id="close-comments">Close Comments</button>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
