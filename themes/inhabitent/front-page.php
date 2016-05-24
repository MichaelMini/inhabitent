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
			<section class="product-info container">
				<h2>Shop stuff</h2>
				<div class="product-type-container">
					<div class="product-type-wrapper">
						<img src="<?php bloginfo('template_directory'); ?>/images/do.svg" alt="Map icon" height="70" width="70">
					</div>
					<div class="product-type-wrapper">
						<img src="<?php bloginfo('template_directory'); ?>/images/eat.svg" alt="Coffee cup icon" height="70" width="70">
					</div>
					<div class="product-type-wrapper">
						<img src="<?php bloginfo('template_directory'); ?>/images/sleep.svg" alt="Bed icon" height="70" width="70">
					</div>
					<div class="product-type-wrapper">
						<img src="<?php bloginfo('template_directory'); ?>/images/wear.svg" alt="knitted cap icon" height="70" width="70">
					</div>
				</div>
			</section>
			<section class="trending container">
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
			</section>

			<section class="adventures container">
				<h2>Latest adventures</h2>
				<ul class="flex-full">
					<li class="full">
						full
					</li>
					<ul class="flex-half">
						<li class="half">
							half
						</li>
						<ul class="flex-quarter">
							<li class="quarter">
								quarter
							</li>
							<li class="quarter">
								quarter
							</li>
						</ul>
					</ul>
				</ul>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
