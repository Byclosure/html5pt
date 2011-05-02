		<div class="postauthor ">
			<?php   echo get_avatar( get_the_author_id(), '65' );   ?><h4>About <span>the Author:</span> <?php the_author(); ?></h4>
 			<?php the_author_description(); ?>
			
			<div class="contad">
				<?php if (!get_option('pov_ad_content_disable') && !$is_paged && !$ad_shown) { include (TEMPLATEPATH . "/includes/content_ad.php"); $ad_shown = true; } ?>
    		</div>
		</div>

		
		
		
		
		<div id="relatedpop">
		
		
		
		
		
		
		
				
		<!-- start related posts -->		
		
			<h4>Related <span>Posts</span></h4>		
			<ul class="related">	
				
			<?php
			$backup = $post;
			$tags = wp_get_post_tags($post->ID);
			if ($tags) {
				$tag_ids = array();
				foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

				$args=array(
					'tag__in' => $tag_ids,
					'post__not_in' => array($post->ID),
					'showposts'=>3, // Number of related posts that will be shown.
					'caller_get_posts'=>1
				);
				$my_query = new wp_query($args);
				if( $my_query->have_posts() ) {
					echo '';
					while ($my_query->have_posts()) {
						$my_query->the_post();
			?>
					<li>
						<div class="thumb"><a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a></div>
						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<?php echo pov_excerpt( get_the_excerpt(), '130'); ?><br/>
						<small><?php the_time('F jS, Y') ?> with
    					<?php comments_popup_link('No Comments;', '1 Comment', '% Comments'); ?></small>

					</li>
			<?php
					}
					echo '';
				}
			}
			$post = $backup;
			wp_reset_query(); 
			?>
			</ul>
					
			<!-- end related posts -->

		
		
		</div>

	
	
	<div class="clear"></div>