<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package waterstreet
 * @since waterstreet 1.0
 */

get_header(); ?>
 
<div id="primary" class="content-area">
	<div class="wrap group">
		<div id="content" class="site-content" role="main">

			<?php if ( is_front_page() ): ?>
			
				<h3>....heartbreakingly vulnerable. <br> Its sounds—often rasping, grating bundles of energy—project across impossibly large spaces, like concrete cantilevers, precisely tensioned just short of breaking point. Listening is like discovering butterflies trapped under stones.
				<span>Tim Rutherford-Johnson reviewing <em>Shifting Gravity</em> in  <a class="white" href="http://johnsonsrambler.wordpress.com/">The Rambler</a>, May 26th 2011</span></h3>
				
			<?php endif; ?>


			<?php if ( ! is_front_page() ): ?>
			<?php if ( have_posts() ) : ?>

			<?php waterstreet_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php waterstreet_content_nav( 'nav-below' ); ?>

				<?php else : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>
		<?php endif; ?>

	</div><!-- #content .site-content -->
</div><!-- .wrap -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>