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
					<div class="block group">
						<div class="two-col">
							<p>Chaya Czernowin was born and brought up in Israel. After her studies in Israel, at the age of 25, she continued studying in Germany (DAAD grant), the US and then was invited to live in Japan (Asahi Shimbun Fellowship and American NEA grant) Tokyo, in Germany (at the Akademie Schloss Solitude) and in Vienna. Her music has been performed throughout the world, and she has held professorships at UCSD, and was the first woman to be appointed as a composition professor at the University of Music and Performing Arts in Vienna, Austria (2005-2009), and at Harvard University in (2009 and on) where she is the Walter Bigelow Rosen Professor of Music . Together with her husband, composer Steven Kazuo Takasugi, she has founded the summer Academy at Schloss Solitude, a biannual course for composers.</p>
						</div>

						<blockquote>
							"Vital, visceral, wild and undefined as experience itself - can music be that? I have heard such music, rarely, but, it has changed my life. Attempting to work towards it, though, is a difficult balancing act: one must be as sensually sensitive as if one has no skin, while exercising the analytical clarity, precision and focus of holding a surgeon's knife."
							<cite>—Chaya Czernowin</cite>
						</blockquote>
						<div class="two-col">	
							<p>Czernowin’s output includes chamber and orchestral music, with and without electronics. Her works were played in most of the significant new music festival in Europe and also in Japan Korea, Australia US and Canada. She composed 2 large scale works for the stage: Pnima...ins Innere (2000, Munich Biennale) chosen to be the best premiere of the year by Opernwelt yearly critic survey, and Adama (2004/5) with Mozart's Zaide (Salzburg Festival 2006). Both operas have biographical and political undercurrents. She was appointed Artist in residence at the Salzburg Festival in 2005/6 and will be Artist in residence at the Lucern Festival, Switzerland in 2013. Characteristic of her work are working with metaphor as a means of reaching a sound world which is unfamiliar; the use of noise and physical parameters as weight, textural surface (as in smoothness or roughness etc), problematiszation of time and unfolding and shifting of scale in order to create a vital, visceral and direct sonic experience. </p>
						</div>
					</div>
					
					<hr>
					
					<p>In addition to numerous other prizes, Czernowin represented Israel at Uncesco composer's Rostorum 1980; and was awarded the DAAD scholarship 83- 85; Stipendiumpreis (88) and Kranichsteiner Musikpreis (92) , at the Darmstadt Fereinkurse,: IRCAM (Paris) reading panel commission 1998; scholarships of SWR experimental Studio Freiburg 98/00/ 01; The composer’s prize of Siemens Foundation 2003; the Rockefeller Foundation, 2004; a nomination as a fellow to the Wissenschaftkolleg Berlin in 2008; Fromm Foundation Award 2009; and Guggenheim Foundation fellowship 2011. She is published by Schott. Her music is recorded on Mode records NY, Wergo, Col Legno, Deutsche Gramophone, Neos , Ethos, Telos and Einstein Records. She lives near Boston with, composer Steven Kazuo Takasugi and their son. </p>

 
 					<hr>

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