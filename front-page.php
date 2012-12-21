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
<?php get_sidebar(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

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

				<?php endwhile; endif; ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
			
			
			
			<div class="sub group">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec neque semper mauris tincidunt rutrum et nec orci. Nunc quis elit felis. Ut varius tristique dapibus. Sed ullamcorper euismod fermentum. Fusce euismod faucibus iaculis. Praesent elit massa, iaculis luctus eleifend et, dapibus vel massa. Duis vel turpis in lorem cursus placerat quis vel metus. Pellentesque ante urna, auctor at ullamcorper quis, pulvinar ut ipsum. Sed viverra massa at nulla auctor sit amet lacinia purus accumsan. Donec sodales turpis ac nibh porttitor eleifend. Vestibulum fermentum diam sit amet erat eleifend non egestas elit accumsan.

Aenean ut tellus arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas elementum gravida ultricies. Donec tincidunt, nisi sit amet dapibus ultrices, enim augue posuere risus, et ultricies neque lorem nec dui. Aliquam consequat dapibus est, sit amet hendrerit urna mollis at. Sed vel urna id lectus lacinia iaculis eget at lorem. Nunc posuere varius neque, a pulvinar nunc egestas vitae. Fusce mollis adipiscing porttitor. Nulla vitae hendrerit erat.

Quisque porttitor odio non neque sodales laoreet. Mauris vel mi mi. Nulla iaculis, leo eu rhoncus gravida, ligula felis feugiat velit, et commodo augue nunc vel urna. Phasellus facilisis, libero nec pellentesque venenatis, sapien mi dictum urna, at vehicula nisi augue ut mauris. Etiam vitae metus felis. Aliquam feugiat lorem vitae neque mollis cursus posuere urna porta. Fusce pulvinar, nisi a posuere vehicula, tellus lectus semper nulla, at mattis dolor tortor non purus. Donec nunc urna, sollicitudin sed suscipit vitae, feugiat sit amet mauris. Nam eleifend dolor in purus dictum quis mollis diam accumsan. Etiam auctor velit a nibh varius eu bibendum diam condimentum. Nullam pellentesque laoreet sollicitudin. Duis commodo diam cursus tortor porta viverra. Suspendisse feugiat dapibus tortor, blandit tempor nisi aliquet vulputate. Nunc cursus facilisis nisl, eu laoreet diam scelerisque ut. Maecenas ullamcorper elementum viverra. Duis sodales elementum dignissim.

Phasellus sed arcu risus. In hac habitasse platea dictumst. Aliquam id auctor tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi ac lectus sit amet magna semper pharetra vel quis velit. Nulla blandit, felis sed dictum sodales, est eros mollis felis, vestibulum posuere felis turpis vitae mi. Nunc orci eros, lacinia a commodo vitae, tempus vel nulla. Vestibulum pharetra pulvinar fermentum. Cras blandit imperdiet justo nec pharetra. Suspendisse potenti. Pellentesque at odio neque.

Nam mattis sapien lorem. Sed sagittis erat ac nunc ornare id pulvinar nisl commodo. Nunc lacinia congue purus mattis fermentum. Integer vulputate nulla id libero aliquet id lacinia tortor vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean in diam nunc, vel feugiat magna. Praesent sed sapien et massa tempor ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac dui nibh. Nullam consectetur dolor quis urna suscipit dictum.</p>
			</div>


<?php get_footer(); ?>