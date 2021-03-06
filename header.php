<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package waterstreet
 * @since waterstreet 1.0
 */
?><!DOCTYPE html>

<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'waterstreet' ), max( $paged, $page ) );

	?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<script type="text/javascript" src="//use.typekit.net/qqo5sju.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>


		<div id="main" class="site-main group">


			<div class="wrap group">
				<header id="masthead" class="site-header group" role="banner">
					<hgroup>
						<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

						<nav role="navigation" class="site-navigation main-navigation group">
							<h1 class="assistive-text"><?php _e( 'Menu', 'waterstreet' ); ?></h1>
							<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'waterstreet' ); ?>"><?php _e( 'Skip to content', 'waterstreet' ); ?></a></div>

							<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						</nav><!-- .site-navigation .main-navigation -->
					</hgroup>

					<?php if( ! is_home() ): ?>

					<h1 class="entry-title"><?php the_title();?></h1> 
					
				<?php if( is_page('biography')): ?> 
					<span class="sub-title">What is mastered is the process of exploration <br> <em>—Roger Reynolds</em></span>
				<?php endif; ?>
				<?php endif; ?>
				
			

		</header><!-- #masthead .site-header -->
	</div>		

	