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

<sidebar>
	<div class="featured-image">
		<img class="fade-in" src="<?php echo get_template_directory_uri();?>/images/chaya-at-office.png" alt="">
	</div>

	<div class="nav">
		<ul>
			<li><a href="#teaching">Teaching</a></li>
			<li><a href="#awards">Awards, residencies and fellowships</a></li>
			<li><a href="#juries">Juries</a></li>
		</ul>
	</div>
</sidebar>
<div class="entry-content">
	<p class="two-col">Proin id felis ut dui posuere adipiscing sit amet et arcu. Nulla malesuada auctor nisi, a gravida felis blandit in. In convallis, dui vel ultrices ultricies, erat magna sollicitudin sem, at cursus ligula nibh et erat. Integer orci augue, sollicitudin non vestibulum sed, auctor a ligula. Morbi congue porta leo, eget posuere mauris vulputate vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam semper augue vel risus accumsan et congue neque sodales. Ut rutrum eros lorem. Praesent a lacus purus. Mauris posuere consequat dictum. Pellentesque imperdiet, lacus sit amet eleifend imperdiet, ipsum libero molestie sem, nec mollis leo nisi ut elit. Donec ipsum eros, hendrerit eget faucibus et, interdum ac eros. Integer feugiat auctor euismod.
	</p>
	<blockquote>Morbi congue porta leo, eget posuere mau­ris vulpu­tate vel. Pel­len­tesque habi­tant morbi tris­tique senec­tus et netus et male­suada fames ac turpis eges­tas. Etiam sem­per augue vel risus accum­san et congue neque sodales. </blockquote>



	<div id="teaching"></div>
	<h2>Teaching</h2>
	<p>Nunc in eros lectus. Donec a eros massa, vel pretium magna. Nunc vestibulum laoreet neque, nec convallis elit auctor a. Fusce commodo augue id ligula condimentum dictum. Aenean sed mauris erat. Donec non augue odio. Integer a urna elit, ullamcorper laoreet nisi. Donec rhoncus ligula at ipsum lacinia semper malesuada turpis consectetur. Phasellus sed eros vitae leo fringilla iaculis a id dui. Sed eros leo, venenatis a venenatis in, tristique non lectus. Praesent dignissim venenatis justo, ac suscipit nulla pharetra et. Praesent posuere dui quis metus vestibulum ut pulvinar velit dapibus. Praesent ac lobortis nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
	</p>
	
	<p>Aliquam quis arcu at ipsum gravida sagittis. Nunc id tellus sed tellus pretium ullamcorper sit amet vel urna. Nunc vitae adipiscing risus. Etiam luctus vehicula mi at aliquet. Vivamus malesuada, est sit amet ornare suscipit, magna turpis dapibus justo, sit amet rhoncus dui nisi ac lectus. Duis eros neque, auctor et blandit at, bibendum eu tortor. Fusce sagittis, ante sit amet tempor sodales, mauris ipsum gravida eros, ac hendrerit est libero ut sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus enim, commodo quis interdum ut, accumsan sed tortor. Pellentesque sed leo non risus auctor vestibulum porttitor at nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia risus at elit suscipit dignissim varius sapien lobortis. Fusce venenatis ullamcorper gravida. Maecenas id enim vel orci sagittis ultricies ac ut lacus. Mauris dapibus auctor dolor ut rhoncus. Praesent lobortis, elit id molestie ultrices, nulla ante iaculis dui, eu faucibus nisi turpis et felis.

</p>
	

	<div id="awards"></div>
	<h2>Awards, residencies and fellowships</h2>

	<p>Aliquam quis arcu at ipsum gravida sagittis. Nunc id tellus sed tellus pretium ullamcorper sit amet vel urna. Nunc vitae adipiscing risus. Etiam luctus vehicula mi at aliquet. Vivamus malesuada, est sit amet ornare suscipit, magna turpis dapibus justo, sit amet rhoncus dui nisi ac lectus. Duis eros neque, auctor et blandit at, bibendum eu tortor. Fusce sagittis, ante sit amet tempor sodales, mauris ipsum gravida eros, ac hendrerit est libero ut sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus enim, commodo quis interdum ut, accumsan sed tortor. Pellentesque sed leo non risus auctor vestibulum porttitor at nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia risus at elit suscipit dignissim varius sapien lobortis. Fusce venenatis ullamcorper gravida. Maecenas id enim vel orci sagittis ultricies ac ut lacus. Mauris dapibus auctor dolor ut rhoncus. Praesent lobortis, elit id molestie ultrices, nulla ante iaculis dui, eu faucibus nisi turpis et felis.
	</p><p>Aliquam quis arcu at ipsum gravida sagittis. Nunc id tellus sed tellus pretium ullamcorper sit amet vel urna. Nunc vitae adipiscing risus. Etiam luctus vehicula mi at aliquet. Vivamus malesuada, est sit amet ornare suscipit, magna turpis dapibus justo, sit amet rhoncus dui nisi ac lectus. Duis eros neque, auctor et blandit at, bibendum eu tortor. Fusce sagittis, ante sit amet tempor sodales, mauris ipsum gravida eros, ac hendrerit est libero ut sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus enim, commodo quis interdum ut, accumsan sed tortor. Pellentesque sed leo non risus auctor vestibulum porttitor at nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia risus at elit suscipit dignissim varius sapien lobortis. Fusce venenatis ullamcorper gravida. Maecenas id enim vel orci sagittis ultricies ac ut lacus. Mauris dapibus auctor dolor ut rhoncus. Praesent lobortis, elit id molestie ultrices, nulla ante iaculis dui, eu faucibus nisi turpis et felis.
</p>

<div id="juries"></div>
<h2>Juries</h2>

<p>Aliquam quis arcu at ipsum gravida sagittis. Nunc id tellus sed tellus pretium ullamcorper sit amet vel urna. Nunc vitae adipiscing risus. Etiam luctus vehicula mi at aliquet. Vivamus malesuada, est sit amet ornare suscipit, magna turpis dapibus justo, sit amet rhoncus dui nisi ac lectus. Duis eros neque, auctor et blandit at, bibendum eu tortor. Fusce sagittis, ante sit amet tempor sodales, mauris ipsum gravida eros, ac hendrerit est libero ut sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus enim, commodo quis interdum ut, accumsan sed tortor. Pellentesque sed leo non risus auctor vestibulum porttitor at nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia risus at elit suscipit dignissim varius sapien lobortis. Fusce venenatis ullamcorper gravida. Maecenas id enim vel orci sagittis ultricies ac ut lacus. Mauris dapibus auctor dolor ut rhoncus. Praesent lobortis, elit id molestie ultrices, nulla ante iaculis dui, eu faucibus nisi turpis et felis.</p>
<p>Aliquam quis arcu at ipsum gravida sagittis. Nunc id tellus sed tellus pretium ullamcorper sit amet vel urna. Nunc vitae adipiscing risus. Etiam luctus vehicula mi at aliquet. Vivamus malesuada, est sit amet ornare suscipit, magna turpis dapibus justo, sit amet rhoncus dui nisi ac lectus. Duis eros neque, auctor et blandit at, bibendum eu tortor. Fusce sagittis, ante sit amet tempor sodales, mauris ipsum gravida eros, ac hendrerit est libero ut sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus enim, commodo quis interdum ut, accumsan sed tortor. Pellentesque sed leo non risus auctor vestibulum porttitor at nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia risus at elit suscipit dignissim varius sapien lobortis. Fusce venenatis ullamcorper gravida. Maecenas id enim vel orci sagittis ultricies ac ut lacus. Mauris dapibus auctor dolor ut rhoncus. Praesent lobortis, elit id molestie ultrices, nulla ante iaculis dui, eu faucibus nisi turpis et felis.

</p>

</div><!-- .entry-content -->



</article><!-- #post-<?php the_ID(); ?> -->


	</div><!-- #content .site-content -->
</div><!-- .wrap -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>