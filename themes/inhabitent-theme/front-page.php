<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main front-page" role="main">

			<section class="home-hero">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
			</section>
			

			<!-- Loop products on Front Page -->

			<?php $terms = get_terms( 'product-type' ); ?>
			<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):?>
				<section class="product-info container">
					<h2>Shop stuff</h2>
					<div class="product-type-container">
						<?php foreach ( $terms as $term ) :?>
						    <div class="product-type-wrapper">
						        <p><img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $term->slug ?>.svg" height="70" width="70"></p>
						        <p><?php echo $term->description ?></p>
						        <p>
						        	<a href="<?php echo get_term_link($term, 'product-type') ?>" class="btn">
						        		<?php echo $term->slug ?> stuff
						        	</a>
						        </p>   
						    </div>
						<?php endforeach ?>
					</div>
				</section>
			<?php endif; ?>

			<!-- Loop Blog Logs on Front Page -->

			<section class="trending container">
				<h2>Inhabitent Journal</h2>
				<ul>
					<?php
					   $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
					   $journal_posts = get_posts( $args ); // returns an array of posts
					?>
					<?php if ( ! empty( $journal_posts ) && ! is_wp_error( $journal_posts ) ):?>
						<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
						   	<!-- Content from your array of post results goes here --> 
									<li>
								   		<div class="thumbnail-wrap">
								   			<?php the_post_thumbnail(); ?>
								   		</div>
								   		<div class="post-info-wrap">
								   			<span class="entry-meta">
								   				<span class="post-on">
										   			<?php the_date(); ?>
								   				</span>
								   				/<?php comments_number( '0 Comments' ); ?>
								   			</span>
								   			<h3 class="entry-title">
									   			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  			
								   			</h3>
								   			<a href="<?php the_permalink(); ?>" class="black-btn">Read Entry</a>  			
								   		</div>	
								   	</li>
						<?php endforeach; wp_reset_postdata(); ?>
					<?php endif; ?>
				</ul>
			</section>

			<section class="adventures container">
				<h2>Latest adventures</h2>
				<ul class="flex-full">
					<li class="full">
						<div class="story-wrapper img-1">
                           	<div class="story-info">
                           		<h3 class="entry-title">
                           			<a href="" rel="bookmark">Getting Back to Nature in a Canoe</a>
                           		</h3>
                           		<a class="white-btn" href="">Read More</a>
                        	</div>
                     	</div>
					</li>
					<ul class="flex-half">
						<li class="half">
							<div class="story-wrapper img-2">
	                            <div class="story-info">
		                        	<h3 class="entry-title">
		                        		<a href="" rel="bookmark">A Night with Friends at the Beach</a>
		                        	</h3>
	                        		<a class="white-btn" href="">Read More</a>
	                        	</div>
		                    </div>
						</li>
						<ul class="flex-quarter">
							<li class="quarter">
								<div class="story-wrapper img-3">
                                	<div class="story-info">
                        				<h3 class="entry-title">
                        					<a href="" rel="bookmark">Taking in the View at Big Mountain</a>
                        				</h3>
                        				<a class="white-btn" href="">Read More</a>
                        			</div>
                    			</div>
							</li>
							<li class="quarter">
								<div class="story-wrapper img-4">
                                    <div class="story-info">
                        				<h3 class="entry-title">
                        					<a href="" rel="bookmark">Star-Gazing at the Night Sky</a>
                        				</h3>
                        				<a class="white-btn" href="">Read More</a>
                        			</div>
                    			</div>
							</li>
						</ul>
					</ul>
				</ul>
				<p class="see-more">
                  <a href="" class="btn">More Adventures</a>
            	</p>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
