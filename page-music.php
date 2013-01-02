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
 

		
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<h1 class="entry-title"><?php the_title();?></h1>

		<span class="fourcol">what can go in here? </span>
		<div class="concerts eightcol last">
			<dl class="dates group">
				<dt>2012</dt>
					<dd>
						<ul>
							<li>Ali­quam erat velut­pat</li>
							<li>Elpu­tate at sodales non, pel­len­tesque vitae lec­tus</li>
							<li>Nunc diam ligula, tesque vitae lec­tus</li>
							<li>Sed non sem odio. </li>
							<li>Donec ali­quet nisi non augue sodales con­se­quat.</li>
						</ul>
						
					</dd>

				<dt>2011</dt>
					<dd>
						<ul>
							<li>Sed non sem odio. </li>
							<li>Nunc diam ligula, vulpu­tate at sodales non, pel­len­tesque vitae lec­tus</li>
							<li>Donec ali­quet nisi non augue sodales con­se­quat.</li>

						</ul>
						
					</dd>

				<dt>2010</dt>
					<dd>
						<ul>
							<li>Ali­quam erat velut­pat</li>
							<li>Sed non sem odio. </li>
							<li>Donec ali­quet nisi non augue sodales con­se­quat.</li>
						</ul>
						
					</dd>

				 
			</dl>
		</div>

		
</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>