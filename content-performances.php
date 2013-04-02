<?php
/**
 * @package waterstreet
 * @since waterstreet 1.0
 */
?>

<?php 
	global $cfs; 
	global $performances; 

	while ($performances->have_posts()) : $performances->the_post(); 

?>

	<div class="performance group">
		<span class="title"><a href="<?php echo $cfs->get('link'); ?>"><?php the_title(); ?></a></span>
		<span class="sub-title"><?php echo $cfs->get('subtitle'); ?></span>
		<span class="details"><?php echo date('F j, Y', strtotime($cfs->get('date'))); ?></span>
	</div>


<?php endwhile; ?>




<?php edit_post_link( __( 'Edit', 'waterstreet' ), '<span class="edit-link">', '</span>' ); ?>

