<?php
/**
 * The template part for displaying an author byline
 */
?>

<p class="byline">
	
	<?php echo get_the_time( __('F j Y', 'jointswp') );?>
	<span>|</span>
	<?php echo get_the_category_list(', ');?>

</p>	
