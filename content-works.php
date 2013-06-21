<?php
/**
 * @package waterstreet
 * @since waterstreet 1.0
 */
?>

<?php 
global $cfs; 
global $work; 

while ($work->have_posts()) : $work->the_post(); 

?>

<?php
$terms = get_the_terms( $post->ID, 'work-type' );

if ( $terms && ! is_wp_error( $terms ) ) : 

	$work_type = array();

foreach ( $terms as $term ) {
	$work_type[] = $term->name;
}

$work_type_name = join( ", ", $work_type );
?>

<?php endif; ?>


<div class="work <?php echo $work_type_name; ?> group">
	<span class="title"><a href="<?php echo $cfs->get('work_link'); ?>"><?php the_title(); ?></a></span>

	<?php if ( $cfs->get('release_year') ):?>
		<span class="release-year"><?php echo $cfs->get('release_year'); ?></span>
		<span class="separator">/</span> 
	<?php endif; ?>

	<?php if ( $cfs->get('work_details') ):?>
		<span class="details"><?php echo $cfs->get('work_details'); ?></span>
		<span class="separator">/</span>
	<?php endif; ?>
	
	<?php if ( $cfs->get('work_publisher') ):?>
		<span class="publisher"><?php echo $cfs->get('work_publisher'); ?></span>
		<span class="separator">/</span>
	<?php endif; ?>

 
	<span class="work-type"><?php echo $work_type_name; ?> </span>
 

<?php 
		// If the post has an audio link in its post meta, produce a player
$audio = get_post_meta($post->ID, 'audio_link', true); 
?>

<?php if( $audio == true ): ?>
	<span class="audio-link"><?php echo do_shortcode('[audio ' . $cfs->get('audio_link') . ']'); ?></span>
<?php endif; ?>

</div>

<?php $shortcode=get_post_meta($post->ID,'your_custom_field',true); echo do_shortcode($shortcode); ?> 

<?php endwhile; ?>
