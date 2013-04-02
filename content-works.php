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

	<div class="performance group">
		<span class="title"><a href="<?php echo $cfs->get('work_link'); ?>"><?php the_title(); ?></a></span>
		<span class="composer"><?php echo $cfs->get('work_composer'); ?></span>
		<span class="release-year"><?php echo$cfs->get('release_year'); ?></span>
		<span class="details"><?php echo$cfs->get('work_details'); ?></span>
		<span class="publisher"><?php echo$cfs->get('work_publisher'); ?></span>
		<span class="work-type"><?php echo get_the_term_list( $id, 'work-type', '', '', '' ) ?> </span>

	</div>


<?php endwhile; ?>




<?php edit_post_link( __( 'Edit', 'waterstreet' ), '<span class="edit-link">', '</span>' ); ?>

