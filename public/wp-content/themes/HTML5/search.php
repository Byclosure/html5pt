<?php get_header(); ?>
<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<div id="container">

	<div id="content">
	<!-- start posts loop -->
	<?php if (have_posts()) : ?>

		<div class="leadhead">
			<h4>Search Results for <span>"<?php echo $s; ?>"</span></h4>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
			
             	<div class="featurethumb">
					<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a>
				</div>
				
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
				<small><?php the_time('M j, y') ?> &bull; <?php the_category(', ') ?> &bull; <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></small><br/>
				<?php echo pov_excerpt( get_the_excerpt(), '250'); ?><br/>
			   
			</div>

		<?php endwhile; ?>

			<!-- end pagination -->
			<div class="navigation">
				<?php include('wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			</div>
			<!-- end pagination -->

	<?php else : ?>
		<div class="post">
			<h2 class="center">No posts found. Try a different search?</h2>
				<div style="float:left;">
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				</div>
				
			<div style="clear: both;"></div>
		
			<h2>Or use these Tags to move on:</h2>
				<?php wp_tag_cloud('smallest=8&largest=36&'); ?>
		</div>
	<?php endif; ?>

	</div>

<?php include(TEMPLATEPATH."/sidebar.php");?>

<?php get_footer(); ?>