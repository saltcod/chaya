<?php
/**
 * waterstreet functions and definitions
 *
 * @package waterstreet
 * @since waterstreet 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since waterstreet 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'waterstreet_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since waterstreet 1.0
 */
function waterstreet_setup() {

	/* Custom template tags for this theme. */
	require( get_template_directory() . '/inc/template-tags.php' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'waterstreet' ),
		) );

}
endif; // waterstreet_setup
add_action( 'after_setup_theme', 'waterstreet_setup' );

// Make the HTML editor the default when creating content
	add_filter( 'wp_default_editor', create_function( '', 'return "html";' ) );


/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since waterstreet 1.0
 */
function waterstreet_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'waterstreet' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
		) );
}
add_action( 'widgets_init', 'waterstreet_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function waterstreet_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );
	
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '2.0.3' );
	
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array( 'jquery' ), '2.0.3', true );
	
	wp_enqueue_script( 'jquery.backstretch', get_template_directory_uri() . '/js/jquery.backstretch.min.js', array( 'jquery' ), '2.0.3' );

	wp_enqueue_script( 'jquery.scrollspy', get_template_directory_uri() . '/js/jquery.scrollspy.js', array( 'jquery' ), '2.0', true );
	
	wp_enqueue_script( 'jquery.smoothscroll', get_template_directory_uri() . '/js/jquery.smooth-scroll.js', array( 'jquery' ), '2.0', true );
}
add_action( 'wp_enqueue_scripts', 'waterstreet_scripts' );




/**
 * Register the 'Performances' & 'Works' post types
 *   
 * @since 0.1
 */
 

register_post_type(
	'work',
	array(
		'label' => 'Work',
		'description' => '',
		'public' => true,
		'menu_icon' => get_bloginfo( 'template_directory' ) . '/images/music-icon.png',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => true,
		'rewrite' => array( 'slug' => '' ),
		'query_var' => true,
		'supports' => array( 'title', 'custom-fields'),
		'labels' => array (
			'name' => 'Works',
			'singular_name' => 'Work',
			'menu_name' => 'Works',
			'add_new' => 'Add Work',
			'add_new_item' => 'Add new Work',
			'edit' => 'Edit',
			'edit_item' => 'Edit Work',
			'new_item' => 'New Work',
			'view' => 'View Work',
			'view_item' => 'View Work',
			'search_items' => 'Search Works',
			'not_found' => 'No Works Found',
			'not_found_in_trash' => 'No Works Found in Trash',
			'parent' => 'Parent Work',
			), ) );


//Register a taxonomy for type of work/music

function register_guide_type_taxonomy() {
	register_taxonomy(
		'work-type', 'work', array(
			'label' => __( 'Work type' ),
			'sort' => true,
			'args' => array( 'orderby' => 'term_order' ),
			'hierarchical' => true,
			'show_admin_column' => true
			)
		);
}

add_action( 'init', 'register_guide_type_taxonomy' );



/**
 * Fetch a list of Performances, via WP_Query 
 *  
 * @param: $year
 *
 * @since 0.1
 */

function chaya_fetch_performances( $year ){
	global $performances;

	$performances = new WP_Query( array( 
		'post_type' => 'performances', 
		'posts_per_page' => -1, 
		'orderby' => 'meta_value',
		'meta_key'=>'date',
		'order'=>'DESC',
		'meta_query' => array(
			array(
				'key' => 'year',
				'value' => $year
				)
			)
		));
}





/**
 * Fetch a list of Works, via WP_Query 
 *  
 * @param: $year
 *
 * @since 0.1
 */

function chaya_fetch_work(){
	global $work;

	$work = new WP_Query( array( 
		'post_type' => 'work', 
		'posts_per_page' => -1, 
		'orderby' => 'meta_value',
		'meta_key'=>'release_year',  
		'orderby' => 'meta_value_num', 
		'order' => 'DESC'
		));
}




/**
 * Fetch a specific page, via WP_Query 
 *  
 * @param: $slug
 *
 * @since 0.1
 */

function chaya_fetch_page($slug){
 
	$page = new WP_Query( array( 
 		'pagename' => $slug
	));

 
	// The Loop
	if ( $page->have_posts() ) :
		while ( $page->have_posts() ) : $page->the_post();
			get_template_part('content');
		endwhile;
	endif;
 
	// Reset Post Data
	wp_reset_postdata();
}




/**
 * Add admin columns  for Performances
 *
 * @since 0.1

add_filter( 'manage_edit-performances_columns', 'my_edit_performances_columns' ) ;

function my_edit_performances_columns( $columns ) {

	$columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => __( 'Performance' ),
		'year' => __( 'Year' ),
		'Details' => __( 'Details' ),
		);

	return $columns;
}

/* Add info to the columns */

add_action( 'manage_performances_posts_custom_column', 'my_manage_performances_columns', 10, 2 );

function my_manage_performances_columns( $column, $post_id ) {
	global $post;

	switch( $column ) {

		/* If displaying the 'year' column. */
		case 'year' :

		/* Get the post meta. */
		$year = get_post_meta( $post_id, 'year', true );

		echo $year;

		/* If no duration is found, output a default message. */
		if ( empty( $year ) )
			echo 'Unknown';

		break;

		case 'Details' :

		/* Get the post meta. */
		$details = get_post_meta( $post_id, 'details', true );

		echo $details;

		/* If no duration is found, output a default message. */
		if ( empty( $details ) )
			echo 'Unknown';

		break;

		/* Just break out of the switch statement for everything else. */
		default :
		break;
	}
}
 
/**
 * oembed for Soundcloud
 *
 * @since 0.1
 */


// Add SoundCloud oEmbed
function chaya_add_oembed_soundcloud(){
	wp_oembed_add_provider( 'http://soundcloud.com/*', 'http://soundcloud.com/oembed' );
}
add_action('init','chaya_add_oembed_soundcloud');



/**
 * Print out the current template file to the footer. 
 * Obviously to be removed in production
 *
 * @since 0.1
 */

function chaya_show_template() {
	if ( is_super_admin() ){
		global $template;
		echo '<strong>Template file:</strong>';
		print_r($template);
	}
}
add_action('wp_footer', 'chaya_show_template');




 /**
 * Include the page slug in the body class attribute.
 *
 * @since 0.1
 *
 */

 function waterstreet_better_body_classes( $classes ){
 	global $post;
 	if ( isset( $post ) ) {
 		$classes[] = $post->post_type . '-' . $post->post_name;
 	}
 	return $classes;
 }
 add_filter('body_class', 'waterstreet_better_body_classes');



/**
 * Add slug to menu li classes
 *
 * @since 0.1
 */

function waterstreet_add_slug_class_to_menu_item($output){
	$ps = get_option('permalink_structure');
	if(!empty($ps)){
		$idstr = preg_match_all('/<li id="menu-item-(\d+)/', $output, $matches);
		foreach($matches[1] as $mid){
			$id = get_post_meta($mid, '_menu_item_object_id', true);
			$slug = basename(get_permalink($id));
			$output = preg_replace('/menu-item-'.$mid.'">/', 'menu-item-'.$mid.' menu-item-'.$slug.'">', $output, 1);
		}
	}
	return $output;
}
add_filter('wp_nav_menu', 'waterstreet_add_slug_class_to_menu_item');



