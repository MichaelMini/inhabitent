<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}

// Replace login logo

function my_custom_login_logo() {
     echo '<style type="text/css">                                                                   
         h1 a { 
         	background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important; 
         	height: 59px !important; 
         	width: 320px !important;
         	background-size: 320px 59px !important;
         }                            
     </style>';
}
add_action('login_head', 'my_custom_login_logo');

// Replace login logo url

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Inhabitent';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_init', 'inhabitent_remove_submenus', 102 );

add_filter( 'body_class', 'red_starter_body_classes' );

//Custom Function for setting Featured Image as Splash for About Page
function inhabitent_about_splash_bg() {

        if ( !is_page_template('about.php') ) {
            return ;
        }
 // wp_enqueue_style(
 //  'custom-style',
 //  get_template_directory_uri() . '/build/css/style.min.css'
 // );
        $custom_css = 
          ".entry-header{
                        background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url('". CFS()->get('hero_banner') ."') no-repeat center bottom;
                        background-size:cover, cover;
                        height: 100vh;
                }";
        wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_about_splash_bg' );

// function inhabitent_filter_product_query( $query ) {

//     if ( is_post_type_archive() && !is_admin() && $query->is_main_query() ) {
//         $query->set( 'orderby', 'title' );
//         $query->set( 'order', 'ASC' );
//         $query->set( 'post_per_page', 16);
//     }

// }

// add_action( 'pre_get_posts', 'inhabitent_filter_product_query' );