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
    <div class="photo-credit">Alexandra Gardner, Marianthi Papalexandri-Alexandri</div>

	<div class="wrap group">
		<div id="content" class="site-content" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				
				<div class="col two">&nbsp;</div>
				

				<div class="entry-content col eight">
				
				<nav class="biography group">
					
					<ul>
						<li><strong>Sections:</strong></li>
						<li><a href="#teaching">Teaching</a></li>
						<li><a href="#guest">Guest Professorships and Residencies</a></li>
						<li><a href="#awards">Awards</a></li>
						<li><a href="#juries">Juries</a></li>
					</ul>
				</nav>
					
					<div class="block group">
						<?php chaya_fetch_page('biography') ?> 

						<p><img class="fade-in" src="<?php echo get_template_directory_uri();?>/images/office-2up.png" alt="Chaya, office"></p>
					</div> <!-- biography -->




					<div class="block group">
						<div class="teaching group">
							<h2 id="teaching">Teaching</h2>
							<?php chaya_fetch_page('teaching') ?> 
						</div>

						<p><img class="fade-in" src="<?php echo get_template_directory_uri();?>/images/office-3.png" alt="Chaya, office"></p>
					</div> <!-- teaching  -->




					<div class="block group">
						<div class="guest-professorships group">
							<h2 id="guest">Guest professorships and residencies</h2>
							<?php chaya_fetch_page('guest-professorships-and-residencies') ?>
						</div>
					</div> <!-- .guest-professorships -->






					<div class="awards">
						<h2 id="awards">Awards, residencies and fellowships</h2>

						<?php chaya_fetch_page('awards') ?>
						<p><img class="fade-in" src="<?php echo get_template_directory_uri();?>/images/office4.jpeg" alt="Chaya, office"></p>

					</div> <!-- .awards -->






					<div class="block group">	
						<div class="juries">
							<h2 id="juries">Juries</h2>
							<?php chaya_fetch_page('juries') ?>
						</div>
					</div>	


				</div><!-- .entry-content -->

			</article><!-- #post-<?php the_ID(); ?> -->


		</div><!-- #content .site-content -->
	</div><!-- .wrap -->
</section><!-- #primary .content-area -->
<?php get_footer(); ?>