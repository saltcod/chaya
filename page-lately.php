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

<section id="primary" class="content-area">
  <div class="wrap group">
		<div id="content" class="site-content eight" role="main">


		<?php if ( have_posts() ) : ?>

 		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content','lately' ); ?>
		<?php endwhile; ?>

		<?php waterstreet_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #content .site-content -->
	</div><!-- .wrap -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>