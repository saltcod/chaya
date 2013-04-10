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



			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
					<p>Proin id felis ut dui posuere adipiscing sit amet et arcu. Nulla malesuada auctor nisi, a gravida felis blandit in. In convallis, dui vel ultrices ultricies, erat magna sollicitudin sem, at cursus ligula nibh et erat. Integer orci augue, sollicitudin non vestibulum sed, auctor a ligula. Morbi congue porta leo, eget posuere mauris vulputate vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>

					<img src="http://chayaczernowin.com/wp-content/themes/chaya/images/field-landscape.jpg" alt="">

 
					<div class="milestone-list">
						
						<div class="milestone">
							<h3 class="title">Composition of ballet music Maa, premiered by Finnish National Ballet</h3>
							<date>Jan 1, 2003</date>
						</div>

						
						<div class="milestone">
							<h3 class="title">Graal Théâtre</h3>
							<date>2002</date>
						</div>
						
						<div class="milestone">
							<h3 class="title">Composition of ballet music Maa, premiered by Finnish National Ballet</h3>
							<date>2000</date>
						</div>
						
						<div class="milestone">
							<h3 class="title">L'Amour de Loin</h3>
							<date>1998</date>
						</div>
						
						<div class="milestone">
							<h3 class="title">Ars Electronica Prize for Stilleben and Io; one year residency at the University of San Diego</h3>
							<date>1995</date>
						</div>
						
						
						
						
						
					</div>



				</div><!-- .entry-content -->



			</article><!-- #post-<?php the_ID(); ?> -->


		</div><!-- #content .site-content -->
	</div><!-- .wrap -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>