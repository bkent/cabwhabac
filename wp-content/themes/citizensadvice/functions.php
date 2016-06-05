<?php

if ( ! function_exists( 'citizensadvice_setup' ) ) :
function citizensadvice_setup() {
	add_filter( 'login_errors', create_function( '$a', "return null;" )); // Security: hide login error messages
	
	add_theme_support( 'automatic-feed-links' ); // Add default posts and comments RSS feed links to head.
	add_theme_support( 'title-tag' ); // Let WordPress manage the document title.
	add_theme_support( 'post-thumbnails' ); // Enable support for Post Thumbnails on posts and pages.
	
	
	register_nav_menus( array(
		'primary_menu'   		=> __( 'Primary menu', 'citizensadvice' ),
		// 'primary_menu_mobile'   => __( 'Mobile, Primary menu', 'citizensadvice' ),
		'header_top-nav' 		=> __( 'Header top navigation', 'citizensadvice' ),
		
		// 'footer_one' 			=> __( 'Footer, one', 'citizensadvice' ),
		// 'footer_two' 			=> __( 'Footer, two', 'citizensadvice' ),
		// 'footer_three' 			=> __( 'Footer, three', 'citizensadvice' ),
		// 'footer_four' 			=> __( 'Footer, four', 'citizensadvice' ),
		// 'footer_five' 			=> __( 'Footer, five', 'citizensadvice' )
		) );

	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' ); // Security: remove WordPress version number
}
endif;
add_action( 'after_setup_theme', 'citizensadvice_setup' );


function citizensadvice_scripts() {
	/**
	 * Enqueue scripts and styles.
	 */
	wp_enqueue_style( 'citizensadvice-screen', get_stylesheet_uri(), '', '', 'screen' );
	wp_enqueue_style( 'citizensadvice-print', get_template_directory_uri() . '/css/print.css', '', '', 'print' );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'citizensadvice_scripts' );


function add_favicon() {
	/**
	 * Add favicon and apple touch icon
	 */
  	$favicon_url = get_stylesheet_directory_uri() . '/img/favicon.ico';
	$appleicon_url = get_stylesheet_directory_uri() . '/img/apple-touch-icon.png';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '"/>' . "\r\n";
	echo '<link rel="apple-touch-icon" href="' . $appleicon_url . '"/>' . "\r\n";
	echo '<meta property="og:image" content="' . $appleicon_url . '"/>' . "\r\n";
}
add_action( 'wp_head', 'add_favicon' );
add_action( 'login_head', 'add_favicon' );
add_action( 'admin_head', 'add_favicon' );


function citizensadvice_login_scripts() {
	/**
	 * Enqueue login page scripts and styles.
	 */
	wp_enqueue_style( 'citizensadvice-screen', get_template_directory_uri() . '/css/login.css', '', '', 'screen' );
}
add_action( 'login_enqueue_scripts', 'citizensadvice_login_scripts' );


function citizensadvice_widgets_init() {
	/**
	 * Register sidebar
	 */

	/*
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'citizensadvice' ),
		'id'            => 'widget-one',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	*/
	
	register_sidebar( array(
		'name'          => __( 'Page, Left navigation', 'citizensadvice' ),
		'id'            => 'widget-page-nav',
		'description'   => __( 'Left hand page navigation', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Additional widgets', 'citizensadvice' ),
		'id'            => 'widget-page',
		'description'   => __( 'Drag multiple widget to build page sidebar', 'citizensadvice' ),
		'before_widget' => '<div class="index-page__box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
	register_sidebar( array(
		'name'          => __( 'Home #1', 'citizensadvice' ),
		'id'            => 'widget-home-1',
		'description'   => __( 'Home 1 of 8', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home #2', 'citizensadvice' ),
		'id'            => 'widget-home-2',
		'description'   => __( 'Home 2 of 8, Not used as the Citizens Advice search is hard coded to template', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home #3', 'citizensadvice' ),
		'id'            => 'widget-home-3',
		'description'   => __( 'Home 3 of 8', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home #4', 'citizensadvice' ),
		'id'            => 'widget-home-4',
		'description'   => __( 'Home 4 of 8', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home #5', 'citizensadvice' ),
		'id'            => 'widget-home-5',
		'description'   => __( 'Home 5 of 8', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home #6', 'citizensadvice' ),
		'id'            => 'widget-home-6',
		'description'   => __( 'Home 6 of 8', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home #7', 'citizensadvice' ),
		'id'            => 'widget-home-7',
		'description'   => __( 'Home 7 of 8', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home #8', 'citizensadvice' ),
		'id'            => 'widget-home-8',
		'description'   => __( 'Home 8 of 8', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
	register_sidebar( array(
		'name'          => __( 'Footer #1', 'citizensadvice' ),
		'id'            => 'widget-footer-1',
		'class'            => 'boogey-man',
		'description'   => __( 'Footer 1 of 5', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer #2', 'citizensadvice' ),
		'id'            => 'widget-footer-2',
		'description'   => __( 'Footer 2 of 5', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer #3', 'citizensadvice' ),
		'id'            => 'widget-footer-3',
		'description'   => __( 'Footer 3 of 5', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer #4', 'citizensadvice' ),
		'id'            => 'widget-footer-4',
		'description'   => __( 'Footer 4 of 5', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer #5', 'citizensadvice' ),
		'id'            => 'widget-footer-5',
		'description'   => __( 'Footer 5 of 5', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
	register_sidebar( array(
		'name'          => __( '404 page content', 'citizensadvice' ),
		'id'            => 'widget-404',
		'description'   => __( 'Optional, 404 page message, this will override the default message', 'citizensadvice' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h1 class="page-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'citizensadvice_widgets_init' );

add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}


require get_template_directory() . '/inc/custom-pagination.php'; // Custom Pagination

require get_template_directory() . '/inc/customizer.php';

?>
