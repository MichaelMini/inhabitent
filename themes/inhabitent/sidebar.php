<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<h3>Contact Info</h3>
	<p class="contact-meta">
		<i class="fa fa-envelope"></i>
		<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
	</p>
	<p class="contact-meta">
		<i class="fa fa-phone"></i>
		<a href="tel:5553434567891">778-456-7891</a>
	</p>
	<p class="contact-meta">
		<i class="fa fa-map-marker"></i>
		<span>1490 W Broadway
			<br>
			Vancouver, BC V6H 1H5
		</span>
	</p>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
