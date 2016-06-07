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
                           	<!-- <img width="3000" height="2000" src="../inhabitent/wp-content/uploads/2016/05/canoe-girl.jpg" class="attachment-full size-full wp-post-image" alt="A girl paddling a canoe" srcset="../inhabitent/wp-content/uploads/2016/05/canoe-girl.jpg 3000w, ../inhabitent/wp-content/uploads/2016/05/canoe-girl-300x200.jpg 300w, ../inhabitent/wp-content/uploads/2016/05/canoe-girl-768x512.jpg 768w, ../inhabitent/wp-content/uploads/2016/05/canoe-girl-1024x683.jpg 1024w" sizes="(max-width: 3000px) 100vw, 3000px"> -->
                           	<div class="story-info">
                           		<h3 class="entry-title">
                           			<a href="http://localhost:8888/inhabitent/adventure/getting-back-to-nature-in-a-canoe/" rel="bookmark">Getting Back to Nature in a Canoe</a>
                           		</h3>
                           		<a class="white-btn" href="http://localhost:8888/inhabitent/adventure/getting-back-to-nature-in-a-canoe/">Read More</a>
                        	</div>
                     	</div>
					</li>
					<ul class="flex-half">
						<li class="half">
							<div class="story-wrapper img-2">
                            	<!-- <img width="640" height="427" src="../inhabitent/wp-content/uploads/2016/05/beach-bonfire-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="A bonfire with friends on the beach" srcset="../inhabitent/wp-content/uploads/2016/05/beach-bonfire-1024x683.jpg 1024w, ../inhabitent/wp-content/uploads/2016/05/beach-bonfire-300x200.jpg 300w, ../inhabitent/wp-content/uploads/2016/05/beach-bonfire-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px"> -->
	                            <div class="story-info">
		                        	<h3 class="entry-title">
		                        		<a href="http://localhost:8888/inhabitent/adventure/a-night-with-friends-at-the-beach/" rel="bookmark">A Night with Friends at the Beach</a>
		                        	</h3>
	                        		<a class="white-btn" href="http://localhost:8888/inhabitent/adventure/a-night-with-friends-at-the-beach/">Read More</a>
	                        	</div>
		                    </div>
						</li>
						<ul class="flex-quarter">
							<li class="quarter">
								<div class="story-wrapper img-3">
                                	<!-- <img width="640" height="427" src="../inhabitent/wp-content/uploads/2016/05/mountain-hikers-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="Hikers taking in the view on a mountain" srcset="../inhabitent/wp-content/uploads/2016/05/mountain-hikers-1024x683.jpg 1024w, ../inhabitent/wp-content/uploads/2016/05/mountain-hikers-300x200.jpg 300w, ../inhabitent/wp-content/uploads/2016/05/mountain-hikers-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px"> -->
                                	<div class="story-info">
                        				<h3 class="entry-title">
                        					<a href="http://localhost:8888/inhabitent/adventure/taking-in-the-view-at-big-mountain/" rel="bookmark">Taking in the View at Big Mountain</a>
                        				</h3>
                        				<a class="white-btn" href="http://localhost:8888/inhabitent/adventure/taking-in-the-view-at-big-mountain/">Read More</a>
                        			</div>
                    			</div>
							</li>
							<li class="quarter">
								<div class="story-wrapper img-4">
                                    <!-- <img width="640" height="427" src="../inhabitent/wp-content/uploads/2016/05/night-sky-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="Person star-gazing at the night sky" srcset="../inhabitent/wp-content/uploads/2016/05/night-sky-1024x683.jpg 1024w, ../inhabitent/wp-content/uploads/2016/05/night-sky-300x200.jpg 300w, ../inhabitent/wp-content/uploads/2016/05/night-sky-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px"> -->
                                    <div class="story-info">
                        				<h3 class="entry-title">
                        					<a href="localhost:8888/inhabitent/adventure/star-gazing-at-the-night-sky/" rel="bookmark">Star-Gazing at the Night Sky</a>
                        				</h3>
                        				<a class="white-btn" href="localhost:8888/inhabitent/adventure/star-gazing-at-the-night-sky/">Read More</a>
                        			</div>
                    			</div>
							</li>
						</ul>
					</ul>
				</ul>
				<p class="see-more">
                  <a href="http://tent.academy.red/adventures/" class="btn">More Adventures</a>
            	</p>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
