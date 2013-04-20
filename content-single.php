<?php
/**
 * @package waterstreet
 * @since waterstreet 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<header class="entry-header col three">

		<div class="entry-meta">
			<?php waterstreet_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content col nine ">
		<?php  if( !empty($post->post_excerpt) ) {
				the_excerpt();
				echo '<span class="read-more"><a href="';
				echo get_permalink();
				echo '"> Read More...</a></span>';
		
		} else {
			the_content();
		}
		 ?>

		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'waterstreet' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
		/* translators: used between list items, there is a space after the comma */
		$category_list = get_the_category_list( __( ', ', 'waterstreet' ) );

		/* translators: used between list items, there is a space after the comma */
		$tag_list = get_the_tag_list( '', ', ' );

		if ( ! waterstreet_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
			if ( '' != $tag_list ) {
				$meta_text = __( '%2$s', 'waterstreet' );
			} else {
				
			}

		} else {
				// But this blog has loads of categories so we should probably display them here
			if ( '' != $tag_list ) {
				$meta_text = __( '', 'waterstreet' );
			} else {
				$meta_text = __( '', 'waterstreet' );
			}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
				);
				?>

				<?php edit_post_link( __( 'Edit', 'waterstreet' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
		</article><!-- #post-<?php the_ID(); ?> -->
