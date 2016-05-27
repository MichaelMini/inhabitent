<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="home-hero">
				<img src="<?php bloginfo('template_directory'); ?>/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
			</section>
			<!-- <section class="product-info container">
				<h2>Shop stuff</h2>
				<div class="product-type-container">
					<div class="product-type-wrapper">
						<img src="<?php bloginfo('template_directory'); ?>/images/do.svg" alt="Map icon" height="70" width="70">
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
                        <p><a href="http://localhost:3000/inhabitent/product-type/do/" class="btn">Do Stuff</a></p>
					</div>
					<div class="product-type-wrapper">
						<img src="<?php bloginfo('template_directory'); ?>/images/eat.svg" alt="Coffee cup icon" height="70" width="70">
						<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
                        <p><a href="http://localhost:3000/inhabitent/product-type/eat/" class="btn">Eat Stuff</a></p>
					</div>
					<div class="product-type-wrapper">
						<img src="<?php bloginfo('template_directory'); ?>/images/sleep.svg" alt="Bed icon" height="70" width="70">
						<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
						<p><a href="http://localhost:3000/inhabitent/product-type/sleep/" class="btn">Sleep Stuff</a></p>
					</div>
					<div class="product-type-wrapper">
						<img src="<?php bloginfo('template_directory'); ?>/images/wear.svg" alt="knitted cap icon" height="70" width="70">
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<p><a href="http://localhost:3000/inhabitent/product-type/wear/" class="btn">Wear Stuff</a></p>
					</div>
				</div>
			</section> -->

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
			        	<a href="<?php echo get_term_link($term, 'product-type') ?><?php echo $term->slug ?>/" class="btn">
			        		<?php echo $term->slug ?> stuff
			        	</a>
			        </p>   
			    </div>
			<?php endforeach ?>
		</div>
	</section>
<?php endif; ?>

<!-- <?php
$terms = get_terms( 'product-type' );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
    echo '<ul>';
    foreach ( $terms as $term ) {
        echo '<li><img src="' . get_template_directory_uri() . '/images/' . $term->slug . '.svg"></li>';
        echo '<li>' . $term->description . '</li>';
        echo '<li><a href="' . get_post_type_archive_link() . '/inhabitent/product-type/' . $term->slug . '/">Do stuff</a></li>';
    }
    echo '</ul>';
}
?> -->
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
									   			<a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>  			
								   			</h3>
								   			<a href="<?php the_permalink(); ?> ">Read Entry</a>  			
								   		</div>	
								   	</li>
						<?php endforeach; wp_reset_postdata(); ?>
					<?php endif; ?>
				</ul>
			</section>

			<!-- <section class="trending container">
				<h2>Inhabitent Journal</h2>
				<ul>
					<li>
						<div class="thumbnail-wrap">
							<img src="../inhabitent/wp-content/uploads/2016/04/van-camper-768x525.jpg" alt="Van camper" height="366" width="250">
						</div>
						<div class="post-info-wrap">
							<span class="entry-meta">
								<span class="post-on">
									"post date" 
								</span>
									/ ? Comments
							</span>
							<h3 class="entry-title">
								<a href="http://localhost:8888/inhabitent/2016/04/14/van-camping-photo-contest/">Van camping photo contest</a>
							</h3>
							<a href="http://localhost:8888/inhabitent/2016/04/14/van-camping-photo-contest/" class="black-btn">Read Entry</a>
						</div>
					</li>
					<li>
						<div class="thumbnail-wrap">
							<img src="../inhabitent/wp-content/uploads/2016/04/warm-cocktail-768x512.jpg" alt="Warm cocktail image" height="366" width="250">
						</div>
						<div class="post-info-wrap">
							<span class="entry-meta">
								<span class="post-on">
									"post date" 
								</span>
									/ ? Comments
							</span>
							<h3 class="entry-title">
								<a href="http://localhost:8888/inhabitent/2016/04/02/fireside-libations-3-warm-cocktail-recipes/">Fireside Libations: 3 warm cocktail recipes</a>
							</h3>
							<a href="http://localhost:8888/inhabitent/2016/04/02/fireside-libations-3-warm-cocktail-recipes/" class="black-btn">Read Entry</a>
						</div>
					</li>
					<li>
						<div class="thumbnail-wrap">
							<img src="../inhabitent/wp-content/uploads/2016/03/healthy-camp-food-768x512.jpg" alt="Healthy camp food image" height="366" width="250">
						</div>
						<div class="post-info-wrap">
							<span class="entry-meta">
								<span class="post-on">
									"post date" 
								</span>
									/ ? Comments
							</span>
							<h3 class="entry-title">
								<a href="http://localhost:8888/inhabitent/2016/03/31/how-to-eating-healthy-meals-in-the-wild/">How To: Eating Healthing Meals in the Wild</a>
							</h3>
							<a href="http://localhost:8888/inhabitent/2016/03/31/how-to-eating-healthy-meals-in-the-wild/" class="black-btn">Read Entry</a>
						</div>
					</li>
				</ul>
			</section> -->

			<section class="adventures container">
				<h2>Latest adventures</h2>
				<ul class="flex-full">
					<li class="full">
						<div class="story-wrapper">
                           	<img width="3000" height="2000" src="../inhabitent/wp-content/uploads/2016/05/canoe-girl.jpg" class="attachment-full size-full wp-post-image" alt="A girl paddling a canoe" srcset="../inhabitent/wp-content/uploads/2016/05/canoe-girl.jpg 3000w, ../inhabitent/wp-content/uploads/2016/05/canoe-girl-300x200.jpg 300w, ../inhabitent/wp-content/uploads/2016/05/canoe-girl-768x512.jpg 768w, ../inhabitent/wp-content/uploads/2016/05/canoe-girl-1024x683.jpg 1024w" sizes="(max-width: 3000px) 100vw, 3000px">
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
							<div class="story-wrapper">
                            	<img width="640" height="427" src="../inhabitent/wp-content/uploads/2016/05/beach-bonfire-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="A bonfire with friends on the beach" srcset="../inhabitent/wp-content/uploads/2016/05/beach-bonfire-1024x683.jpg 1024w, ../inhabitent/wp-content/uploads/2016/05/beach-bonfire-300x200.jpg 300w, ../inhabitent/wp-content/uploads/2016/05/beach-bonfire-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px">
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
								<div class="story-wrapper">
                                	<img width="640" height="427" src="../inhabitent/wp-content/uploads/2016/05/mountain-hikers-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="Hikers taking in the view on a mountain" srcset="../inhabitent/wp-content/uploads/2016/05/mountain-hikers-1024x683.jpg 1024w, ../inhabitent/wp-content/uploads/2016/05/mountain-hikers-300x200.jpg 300w, ../inhabitent/wp-content/uploads/2016/05/mountain-hikers-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px">
                                	<div class="story-info">
                        				<h3 class="entry-title">
                        					<a href="http://localhost:8888/inhabitent/adventure/taking-in-the-view-at-big-mountain/" rel="bookmark">Taking in the View at Big Mountain</a>
                        				</h3>
                        				<a class="white-btn" href="http://localhost:8888/inhabitent/adventure/taking-in-the-view-at-big-mountain/">Read More</a>
                        			</div>
                    			</div>
							</li>
							<li class="quarter">
								<div class="story-wrapper">
                                    <img width="640" height="427" src="../inhabitent/wp-content/uploads/2016/05/night-sky-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="Person star-gazing at the night sky" srcset="../inhabitent/wp-content/uploads/2016/05/night-sky-1024x683.jpg 1024w, ../inhabitent/wp-content/uploads/2016/05/night-sky-300x200.jpg 300w, ../inhabitent/wp-content/uploads/2016/05/night-sky-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px">
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
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
