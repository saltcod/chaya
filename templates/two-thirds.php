<?php
/**
 * Template Name: Two-thirds
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
<?php get_sidebar(); ?>

<h1 class="entry-title"><?php the_title();?></h1>
<div class="page-break"> 
	<img src="<?php echo get_template_directory_uri();?>/images/page-break.png">
</div>



<div id="primary" class="content-area">
	<div class="wrap group">
	<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

		<?php waterstreet_content_nav( 'nav-above' ); ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'two-thirds' ); ?>

	<?php endwhile; ?>

<?php else : ?>

	<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif; ?>

</div><!-- #content .site-content -->
</div><!-- .wrap -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>