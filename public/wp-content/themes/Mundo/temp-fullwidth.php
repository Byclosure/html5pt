<?php
/*
Template Name: Full Width Page
*/
?>


<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>


<?php get_header(); ?>




<div id="container">
		<div id="fullcontent">
					
				<!-- begin post -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	
									<?php the_content(); ?>
    								<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?><br/>
    								
	
	
	
				<?php endwhile; endif; ?>
				<!-- end post -->
				
				
		</div>




<?php get_footer(); ?>