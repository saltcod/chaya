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
		<div id="content" class="site-content" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="col two">&nbsp;</div>
				
				<div class="entry-content col eight">
					
					<?php
					$args = array( 'pagename' => 'biography'); 

					$the_query = new WP_Query( $args );


					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post();
					get_template_part('content');
					endwhile;
					endif;


					wp_reset_postdata();
					?>
					<p><img class="fade-in" src="<?php echo get_template_directory_uri();?>/images/office-2up.png" alt="Chaya, office"></p>


					<div class="block group">
						<div class="teaching group">
							<h2>Teaching</h2>

							<?php
							$args = array( 'pagename' => 'teaching'); 

							$the_query = new WP_Query( $args );


							if ( $the_query->have_posts() ) :
								while ( $the_query->have_posts() ) : $the_query->the_post();
							get_template_part('content');
							endwhile;
							endif;


							wp_reset_postdata();
							?>
						</div>

						<p><img class="fade-in" src="<?php echo get_template_directory_uri();?>/images/office-3.png" alt="Chaya, office"></p>

						



						<div class="block group">
							<div class="guest-professorships group">
								<h2>Guest professorships and residencies</h2>

								<?php
								$args = array( 'pagename' => 'guest-professorships-and-residencies'); 

								$the_query = new WP_Query( $args );


								if ( $the_query->have_posts() ) :
									while ( $the_query->have_posts() ) : $the_query->the_post();
								get_template_part('content');
								endwhile;
								endif;


								wp_reset_postdata();
								?>
							</div>









							<div class="awards">
								<h2>Awards, residencies and fellowships</h2>

								<div class="wrapper group">
									<date>2013 </date> 

									<ul>
										<li>Lucern Festival Artist in Residence.</li>
										<li>Semester-long course about Czernowin's work: "The Music of Chaya Czernowin - Sound, Body and Metaphor", Tel Aviv University Buchmann- Mehta School of Music. Taught by Prof. Zohar Eitan and Dr Hila Tamir. </li>
										<li>Helsinki usica Nova, Finland featured composer</li>
										<li>Magister Ludi Festival featured composer, Moscow. </li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>2011 </date>
									<ul>
										<li>Guggenehim Fellowship </li>

									</ul>
								</div>

								<div class="wrapper group">
									<date>2010 </date>
									<ul>
										<li>Maim one of the 10 best CDs of modern composition in The Wire Magazine</li>
										<li>A symposium about Pnima... ins innere in Stadttheater Stuttgart </li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>2009 </date>
									<ul>
										<li>Walter Bigelow Rosen Professor at Harvard University</li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>2008 </date>
									<ul>
										<li>Stockholm New Music Days, featured composer</li>
										<li>Wissenschaftskolleg Berlin, nominated. </li>
										<li>Fromm Foundation Commission</li>
									</ul>
								</div>



								<div class="wrapper group">
									<date>2007 </date>
									<ul>
										<li>Resou Varese support for Maim</li>
										<li>Artist in residence in Basel Stadttheater, Switzerland. </li>
									</ul>
								</div>



								<div class="wrapper group">
									<date>2005-6 </date>
									<ul>
										<li>Professor at the Universtiy of Music and Performing Arts Vienna</li>
										<li>Composer in Residence at the Salzburg Festival</li>
									</ul>
								</div>


								<div class="wrapper group">
									<date>2004 </date>
									<ul>
										<li>Hellerau European Center for the Arts,, Dresden Composer in Residence. </li>
										<li>Rockefeller foundation grant</li>
										<li>Ultraschall Berlin featured composer</li>
									</ul>
								</div>



								<div class="wrapper group">
									<date>2003 </date>
									<ul>
										<li>Composer's Prize (Komponisten Foerderpreis) from the Siemens Foundation. </li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>2001 </date>
									<ul>
										<li>Composer in residence in Bern Triennale. </li>
										<li>Die Kreuzung chosen for ISCM performance, Japan. </li>
									</ul>
								</div>


								<div class="wrapper group">
									<date>2000 </date>
									<ul>
										<li>Pnima... Ins Innere chosen to be the best premier of the year 2000 by the critics servey of the Magazine Opernwelt. </li>
										<li>Bayerischer theater preis for the opera Pnima... ins Innere</li>
									</ul>
								</div>



								<div class="wrapper group">
									<date>1998 </date>
									<ul>
										<li>IRCAM reading panel commission. </li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1997 </date>
									<ul>
										<li>Esperimentalstudio of the Heinrich Strobel Stiftung SWR (also in 99 02 05 07) </li>
										<li>Assistant professor position at the University of California San Diego. </li>
									</ul>
								</div>



								<div class="wrapper group">
									<date>1996 </date>
									<ul>
										<li>A fellow for a year at Akademie Schloss Solitude </li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1994-5 </date>
									<ul>
										<li>Amber for orchetsra chosen for ISCM World music days Germany</li>
										<li>American NEA fellowship for composing a piece for a Gagaku orchestra while living in Japan. </li>
									</ul>
								</div>



								<div class="wrapper group">
									<date>1993/4 </date>
									<ul>
										<li>Asahi Shimbun Fellowship (a generous invitation given to 4 international individual in all area to come and live in Japan for a year) </li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1992 </date>
									<ul>
										<li>Kranichsteiner Preis at the Darmstadt Summer courses for new music</li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1991 </date>
									<ul>
										<li>Macdowell/ Yaddo fellowship (nominated) .</li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1988 </date>
									<ul>
										<li>Stipendium preis At the Darmstadt summer course for new music. </li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1987 </date>
									<ul>
										<li>93 Various scholarships at The University of California San Diego. </li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1985 </date>
									<ul>
										<li>Milton Avery School of the Arts at Bard College grant</li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1984 </date>
									<ul>
										<li>Gaudeamus Workshop scholarship, Netherlands.</li>
										<li>Ensemblia international competition honorary mention. </li>
									</ul>
								</div>



								<div class="wrapper group">
									<date>1983-85 </date>
									<ul>
										<li>DAAD scholarship for studying in Berlin with Dieter Schnebel. </li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1983 </date>
									<ul>
										<li>First prize for composition at the Rubin Academy Tel Aviv</li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1982 </date>
									<ul>
										<li>Second place at the Clairmont competition, Israel </li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1981 </date>
									<ul>
										<li>Represented Israel in Unsco's Rostorum. </li>
									</ul>
								</div>

								<div class="wrapper group">
									<date>1978-83 </date>
									<ul>
										<li>America Israel Foundation grants and participation in Young Artist Week, Israel. </li>
									</ul>
								</div>

							</div> <!-- .awards -->

							<p><img class="fade-in" src="<?php echo get_template_directory_uri();?>/images/office4.jpeg" alt="Chaya, office"></p>

						</div>

						<div class="block group">	
							<div class="juries">
								<h2>Juries</h2>

								<?php
								$args = array( 'pagename' => 'juries'); 

								$the_query = new WP_Query( $args );


								if ( $the_query->have_posts() ) :
									while ( $the_query->have_posts() ) : $the_query->the_post();
								get_template_part('content');
								endwhile;
								endif;


								wp_reset_postdata();
								?>
							</div>
						</div>	


					</div><!-- .entry-content -->



				</article><!-- #post-<?php the_ID(); ?> -->


			</div><!-- #content .site-content -->
		</div><!-- .wrap -->
	</section><!-- #primary .content-area -->
	<?php get_footer(); ?>