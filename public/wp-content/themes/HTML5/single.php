<?php get_header(); ?>
<div id="container">
	<div id="content">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
				
                <div style="float:right; margin:-5px -12px -5px 2px;">
						<?php   echo get_avatar( get_the_author_id(), '45' );   ?>
				</div>
				
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
					
				
				<p class="postmetadata alt">
							<small><?php the_time('M j, y') ?> &bull; Category: <?php the_category(', ') ?><?php the_tags( ' &bull; Tags: ', ', ', ''); ?><br/></small>
				</p>
                <div class="clear"></div>
				<div class="entry">
				<?php the_content(''); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<div class="clear"></div>
				
				<?php include (TEMPLATEPATH . "/includes/postmore.php"); ?>	
				
				</div>
				
					

					
		</div>
		
		
		
				
				
				
				
				<div id="cometary">
					<?php comments_template(); ?>
				</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>
		<?php wp_tag_cloud('smallest=8&largest=36&'); ?>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>

	</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
