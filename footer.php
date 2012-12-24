<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package waterstreet
 * @since waterstreet 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<a class="tab" href="contact">Contact +</a>
		<div class="site-info">
			<?php do_action( 'waterstreet_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'waterstreet' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'waterstreet' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'waterstreet' ), 'waterstreet', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
<?php wp_footer(); ?>
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->


</body>
</html>