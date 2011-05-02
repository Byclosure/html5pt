


<div id="featured-content" class="slideshow">
					
			<div class="items">
			
				<?php 
				$featucat = get_option('pov_slide_category');
				$my_query = new WP_Query('showposts=1&category_name='. $featucat .'');	 
				if ($my_query->have_posts()) :
				?>

					
				
						<div class="item">
                        <?php while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							<?php dp_attachment_image($post->ID, 'Large', 'alt="' . $post->post_title . '"'); ?>
                        <?php endwhile; ?>    
						</div>
				
					
					
				<?php endif;  ?>
				
			</div>	
		
		</div>
		
		<div id="featured-meta" class="clearfix">
		
        <h2><a href="<?php the_permalink() ?>">
				<?php 
				// short_title($after, $length)
				echo short_title('...', 8); 
				?>
        </a></h2>
        <small><?php the_category(', ') ?> &bull; <?php comments_popup_link('Sem Comentários &#187;', '1 Comentário &#187;', '% Comentário &#187;'); ?></small><br/>
		<?php echo pov_excerpt( get_the_excerpt(), '220'); ?><br/>
		</div>
        
