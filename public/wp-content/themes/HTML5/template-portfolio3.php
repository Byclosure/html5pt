<?php
/*
Template Name: Portfolio Template Col 3
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
	<div id="port-templ">


				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
				
				<!-- Start Post Loop -->

				
					
					<?php
					$portfoliocat = get_option('pov_portfolio_category');
					$temp = $wp_query;
					$limit = get_option('posts_per_page');
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$wp_query= null;
					$wp_query = new WP_Query();
					$wp_query->query('showposts=' . $limit . '&paged=' . $paged . '&category_name= ' . $portfoliocat);
					$wp_query->is_home = false;
					?>

					<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>
							
							<!-- Start Post -->
							<div class="one_third">
							<div id="post-<?php the_ID(); ?>" class="portpost2">
			
							
							
							
							<div class="portthumb2">
    						<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'medium', 'alt="' . $post->post_title . '"'); ?></a>
							</div>
							
							<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
							
							
							<?php echo pov_excerpt( get_the_excerpt(), '200'); ?>
							<div style="clear: both;"></div>	
							</div>
							<!-- End Post -->
							</div>
					
					<?php endwhile; ?>
							<div class="clear"></div>
							
					<?php if(show_posts_nav()): ?>
							<div style="float:left;">
							<!-- end pagination -->
								<div class="navigation">
									<?php include('wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
								</div>
							<!-- end pagination -->
							</div>
					<?php endif; ?>
							
					<?php else : ?>

							<h2>Not Found</h2>
							<p>Sorry, but you are looking for something that isn't here.</p>
							<?php get_search_form(); ?>

					<?php endif; ?>

				
				<!-- End Post Loop -->
	</div>
</div>
<?php get_footer(); ?>