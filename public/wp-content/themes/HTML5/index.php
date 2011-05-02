<?php get_header(); ?>
<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>


<div id="container">




<div id="content">
	
	
	
<?php if ($pov_disslide == "true") { } else { ?>
		
<?php $slider = get_option('pov_slider'); ?>
<?php if($slider == 'slider1')  {
	include( TEMPLATEPATH . '/includes/slider1.php' );
}elseif($slider == 'slider2'){
	include( TEMPLATEPATH . '/includes/slider2.php' );
	
} elseif($slider == 'slider3') {
	include( TEMPLATEPATH . '/includes/slider3.php' );
} else {
	include( TEMPLATEPATH . '/includes/slider1.php' );
}?>
		
<?php } ?>	
	
	
	
	
		<!-- start featured news -->	
			<?php if ($pov_disfeatblock == "true") { } else { ?>			
			
				<?php 
				$highcat = get_option('pov_story_category'); 
				$highcount = get_option('pov_story_count');
	
				$my_query = new WP_Query('category_name= '. $highcat .'&showposts='.$highcount.'');
				while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
				?>

			<div class="feature">
						
						<div class="featurethumb">
						<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a>
						</div>
						<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<small>
						<?php the_time('M j, y') ?> &bull; <?php the_category(', ') ?> &bull; <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
						</small>
						<br/>
						<?php echo pov_excerpt( get_the_excerpt(), '220'); ?><br/>
						
			</div>
			<?php endwhile; ?>
			
			<?php } ?>		

		<!-- end featured news -->
	
	
	
	


	<!-- recent post -->	
	<div class="recentpost">
	<div class="leadhead">
	<h4 style="float:left">Recent <span>Posts</span></h4>
	
	<h4 style="float:right; padding:0 3px 0 0;"><a href="<?php bloginfo('rss2_url'); ?>"><img class="tipos" alt="RSS" title="Subscribe to our RSS Feed" src="<?php bloginfo('template_directory'); ?>/images/icons/rss.png" /></a></h4>
	</div>
	<div class="clear"></div>
	<!-- start posts loop -->	
	
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="indexpost" id="post-<?php the_ID(); ?>">
				<div class="recentthumb">
						<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'medium', 'alt="' . $post->post_title . '"'); ?></a>
				</div>
				<h2><a href="<?php the_permalink(); ?>"><?php 
				// short_title($after, $length)
				echo short_title('...', 10); 
				?></a></h2>
				
				<div class="entry">
					<?php echo pov_excerpt( get_the_excerpt(), '150'); ?><br/>
				</div>
				
				<small><?php the_category(', ') ?> &bull; <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></small>
				
			</div>

		
		
		<?php endwhile; ?>
			<!-- end pagination -->
			<div class="clear"></div>
			
			<div class="navigation">
				<?php include('wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			</div>
			<!-- end pagination -->
			
			
			
			
		<?php else : ?>

			<p>Sorry, no posts matched your criteria.</p>
		
		<?php endif; ?>
		<!-- end posts loop -->	


	
	<div class="clear"></div>
	</div>
	<!-- end recent post -->
	
</div>
	
	
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>