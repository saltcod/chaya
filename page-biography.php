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

				<aside class="col four">
					<div class="featured-image">
						<img class="fade-in" src="<?php echo get_template_directory_uri();?>/images/chaya-at-office.png" alt="">
					</div>
				</aside>

				<div class="entry-content col eight">
					<div class="block group">
						<div class="two-col">
							<p>Czernowin was born on Dec 12 1957 in Israel and studied composition at the Tel Aviv Rubin Academy of Music from 1976 until 1982. After studying in Berlin 1983-1985, and in the USA at Bard University 1986-87, and at UCSD,  1987-1993, she received fellowships for Tokyo Japan,  1993-1995 and for a year at the Akademie Schloss Solitude, Stuttgart, 1996. During these years she was able to concentrate on forming her musical language and thought. Her main teachers were: Abel Ehrlich, Izhak Sadai, Dieter Schnebel, Eli Yarden, Joan Tower, Brian Ferneyhough and Roger Reynolds.</p>
						</div>

						<blockquote>
							"Vital, visceral, wild and undefined as experience itself - can music be that?  I have heard such music, rarely, but, it has changed my life. Attempting to work towards it, though, is a difficult balancing act: one must be as sensually sensitive as if one has no skin, while exercising the analytical clarity, precision and focus of holding a surgeon's knife."
							<cite>—Chaya Czernowin</cite>
						</blockquote>
						<div class="two-col">	
							<p>Czernowin strives for her music to starts where words end, very literally. Motives, dramatic gestural constructs and standardised forms, are “words”,  “sentences” and frozen containers  which she tries to avoid in order to start from that which  lies underneath. The different stages of her work can all be seen as ways towards this uncovering. In the nineties Czernowin’s work focused on looking at how far sonic identity can stretch under extreme circumstances.  This led to questioning instrumental identities by combining varied instruments into a meta instrument, or creating varied characters  of the same instrument. These appeared in torn forms, and dream-scape structures, where scale can change instantly. The Opera Pnima…ins Innere, written 98/9 for the Munich Biennale 2000 is the culmination of this period. Pnima is an opera with no libretto  which deals with  the inability of communicating a traumatic experience, in this case the Jewish holocaust. The work was awarded the Bavarian Theater Prize and was named “Best Premiere of the Year 2000” by the critic's survey of the magazine Opernwelt. </p>
						</div>
					</div>
					
					<hr>
					
					<p>Adama, fragments is Czernowin second opera. It was written for the Salzburg festival, where Czernowin was composer in residence  In 2005 and in 2006.  Mozart's unfinished opera “Zaïde” is the base for the piece.  “Zaide/Adama, fragments”, is a first attempt of its kind to answer an unfinished work with an intervening contemporary “counterpoint work”.The piece was broadcasted on ARD TV and recorded on Deutsche Grammophon.  </p>

					<p>During the  first decade of the 21st century Czernowin’s work moved gradually from engaging with  the psychological to the natural arena by  creating musical objects or organisms which evolve with their own specific internal logic, at times on the border of what can be considered “logical”. The works  Maim and  Sahaf, characterize this period. Since 2010 she has written a few large orchestral pieces where she works towards avoiding  the schism  between sound as a phenomenon and time as the force which develops sound material. The works Zohar Iver, the Quiet, Esh and At the fringe of our gaze have been written from 2010-2013. These works are neither processes or sonic meditations alone. They are musical experiences attempting to be seen touched and felt through the ear. </p>

					<p>In 2013 She is composer in residence at Lucerne Festival, with a large perspective of her work, including Pnima, at the fringe of our gaze, (for WEDO and Daniel Barenboim) White wind waiting (for guitarist Stephan Schmidt and SWR with François-Xavier Roth) and a variety of  chamber pieces</p>
					<hr>




					<div class="two-col">

						<p>Czernowin sees composition teaching as directly connected to her compositional work. She has taught composition at the Yoshiro Irino Institute, JML, Tokyo City Japan and at the Darmstadt International Summer Courses for New Music. 1997-2006  Czernowin was professor of music composition at the University of California, San Diego. In 2006-2009 she was chosen to be the first female composition professor at the University of Music in Vienna. In September 2009 she became the Walter Bigelow Rosen Professor of Music at Harvard University. Since 2003 Czernowin has taught at  the Academy for Composers at the "Akademie Schloss Solitude", Stuttgart with her husband Steven Kazuo Takasugi. Since 2010 they have taught together  also at Tzlil Meudcan summer course and  festival in Israel. Czernowin has been invited as a Guest professorships to many of the world leading institutions in new music (from Eastman school of music  to Basel Academy, Graz, Sibelius Academy, and Stanford University, Matrix and Impuls to mention just a few). </p>

						<p>In addition to numerous other prizes, Czernowin represented Israel at the Unesco Composers Rostrum in 1980, and recieved the DAAD scholarship ´83-´85, Various fellowships at Bard college and UCSD 85-93, Yaddo and Macdowell fellowships 91 Kranichsteiner Musikpreis Darmstadt Ferienkurse 1992, 1993 Asahi Shimbun Fellowship, 1994 American National Endowment of the Arts Fellowship, ISCM 1995/2001, IRCAM reading panel commission 1998, a few scholarships of the SWR experimental Studio Freiburg, Composer prize of  the Ernst-von-Siemens Music Foundation in 2003, Rockefeller Foundation grant 2004, Fromm Foundation Award 2008, and a nomination as a fellow to the Wissenschaftkolleg Berlin in 2008, Guggenheim fellowship 2011.  Her work is exclusively published by Schott.</p> 

						<p>She live in Newton MA with her husband Composer Steven Kazuo Takasugi and their son.</p>
					</div>


					<div class="block group">

						<div class="teaching group">
							<h2>Teaching</h2>
							<p>Nunc in eros lectus. Donec a eros massa, vel pretium magna. Nunc vestibulum laoreet neque, nec convallis elit auctor a. Fusce commodo augue id ligula condimentum dictum. Aenean sed mauris erat. Donec non augue odio. Integer a urna elit, ullamcorper laoreet nisi. Donec rhoncus ligula at ipsum lacinia semper malesuada turpis consectetur. Phasellus sed eros vitae leo fringilla iaculis a id dui. Sed eros leo, venenatis a venenatis in, tristique non lectus. Praesent dignissim venenatis justo, ac suscipit nulla pharetra et. Praesent posuere dui quis metus vestibulum ut pulvinar velit dapibus. Praesent ac lobortis nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
							<p>Aliquam quis arcu at ipsum gravida sagittis. Nunc id tellus sed tellus pretium ullamcorper sit amet vel urna. Nunc vitae adipiscing risus. Etiam luctus vehicula mi at aliquet. Vivamus malesuada, est sit amet ornare suscipit, magna turpis dapibus justo, sit amet rhoncus dui nisi ac lectus. Duis eros neque, auctor et blandit at, bibendum eu tortor. Fusce sagittis, ante sit amet tempor sodales, mauris ipsum gravida eros, ac hendrerit est libero ut sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus enim, commodo quis interdum ut, accumsan sed tortor. Pellentesque sed leo non risus auctor vestibulum porttitor at nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia risus at elit suscipit dignissim varius sapien lobortis. Fusce venenatis ullamcorper gravida. Maecenas id enim vel orci sagittis ultricies ac ut lacus. Mauris dapibus auctor dolor ut rhoncus. Praesent lobortis, elit id molestie ultrices, nulla ante iaculis dui, eu faucibus nisi turpis et felis.</p>
						</div>


						<div class="awards">
							<h2>Awards, residencies and fellowships</h2>

							<p>Aliquam quis arcu at ipsum gravida sagittis. Nunc id tellus sed tellus pretium ullamcorper sit amet vel urna. Nunc vitae adipiscing risus. Etiam luctus vehicula mi at aliquet. Vivamus malesuada, est sit amet ornare suscipit, magna turpis dapibus justo, sit amet rhoncus dui nisi ac lectus. Duis eros neque, auctor et blandit at, bibendum eu tortor. Fusce sagittis, ante sit amet tempor sodales, mauris ipsum gravida eros, ac hendrerit est libero ut sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus enim, commodo quis interdum ut, accumsan sed tortor. Pellentesque sed leo non risus auctor vestibulum porttitor at nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia risus at elit suscipit dignissim varius sapien lobortis. Fusce venenatis ullamcorper gravida. Maecenas id enim vel orci sagittis ultricies ac ut lacus. Mauris dapibus auctor dolor ut rhoncus. Praesent lobortis, elit id molestie ultrices, nulla ante iaculis dui, eu faucibus nisi turpis et felis.</p>
							<p>Aliquam quis arcu at ipsum gravida sagittis. Nunc id tellus sed tellus pretium ullamcorper sit amet vel urna. Nunc vitae adipiscing risus. Etiam luctus vehicula mi at aliquet. Vivamus malesuada, est sit amet ornare suscipit, magna turpis dapibus justo, sit amet rhoncus dui nisi ac lectus. Duis eros neque, auctor et blandit at, bibendum eu tortor. Fusce sagittis, ante sit amet tempor sodales, mauris ipsum gravida eros, ac hendrerit est libero ut sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus enim, commodo quis interdum ut, accumsan sed tortor. Pellentesque sed leo non risus auctor vestibulum porttitor at nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia risus at elit suscipit dignissim varius sapien lobortis. Fusce venenatis ullamcorper gravida. Maecenas id enim vel orci sagittis ultricies ac ut lacus. Mauris dapibus auctor dolor ut rhoncus. Praesent lobortis, elit id molestie ultrices, nulla ante iaculis dui, eu faucibus nisi turpis et felis.</p>
						</div>


						<img src="http://placehold.it/760x350/E8117F/fff&text=Placeholder">
					</div>

					<div class="block group">	
						<div class="juries">
							<h2>Juries</h2>

							<p>Aliquam quis arcu at ipsum gravida sagittis. Nunc id tellus sed tellus pretium ullamcorper sit amet vel urna. Nunc vitae adipiscing risus. Etiam luctus vehicula mi at aliquet. Vivamus malesuada, est sit amet ornare suscipit, magna turpis dapibus justo, sit amet rhoncus dui nisi ac lectus. Duis eros neque, auctor et blandit at, bibendum eu tortor. Fusce sagittis, ante sit amet tempor sodales, mauris ipsum gravida eros, ac hendrerit est libero ut sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus enim, commodo quis interdum ut, accumsan sed tortor. Pellentesque sed leo non risus auctor vestibulum porttitor at nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia risus at elit suscipit dignissim varius sapien lobortis. Fusce venenatis ullamcorper gravida. Maecenas id enim vel orci sagittis ultricies ac ut lacus. Mauris dapibus auctor dolor ut rhoncus. Praesent lobortis, elit id molestie ultrices, nulla ante iaculis dui, eu faucibus nisi turpis et felis.</p>
							<p>Aliquam quis arcu at ipsum gravida sagittis. Nunc id tellus sed tellus pretium ullamcorper sit amet vel urna. Nunc vitae adipiscing risus. Etiam luctus vehicula mi at aliquet. Vivamus malesuada, est sit amet ornare suscipit, magna turpis dapibus justo, sit amet rhoncus dui nisi ac lectus. Duis eros neque, auctor et blandit at, bibendum eu tortor. Fusce sagittis, ante sit amet tempor sodales, mauris ipsum gravida eros, ac hendrerit est libero ut sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus enim, commodo quis interdum ut, accumsan sed tortor. Pellentesque sed leo non risus auctor vestibulum porttitor at nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia risus at elit suscipit dignissim varius sapien lobortis. Fusce venenatis ullamcorper gravida. Maecenas id enim vel orci sagittis ultricies ac ut lacus. Mauris dapibus auctor dolor ut rhoncus. Praesent lobortis, elit id molestie ultrices, nulla ante iaculis dui, eu faucibus nisi turpis et felis.</p>
						</div>
					</div>	


				</div><!-- .entry-content -->



			</article><!-- #post-<?php the_ID(); ?> -->


		</div><!-- #content .site-content -->
	</div><!-- .wrap -->
</section><!-- #primary .content-area -->
<?php get_footer(); ?>