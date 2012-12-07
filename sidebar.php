<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package waterstreet
 * @since waterstreet 1.0
 */
?>
<div id="secondary" class="widget-area" role="complementary">


	<header id="masthead" class="site-header group" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</hgroup>

		<nav role="navigation" class="site-navigation main-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', 'waterstreet' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'waterstreet' ); ?>"><?php _e( 'Skip to content', 'waterstreet' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
	</header><!-- #masthead .site-header -->
</div><!-- #secondary .widget-area -->
