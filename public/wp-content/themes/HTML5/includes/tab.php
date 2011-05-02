<!-- TABS STARTS --> 
	<div id="tabs">
		
		<ul class="gttTabs tabs">
			<li><a href="#pop">Popular</a></li>
			<li><a href="#feat">Latest</a></li>
			<li><a href="#comm">Comments</a></li>
			
		</ul>	
		
		<div class="fix"></div>
		
		<div class="inside">
		 
       	
		<div id="pop">
			
				
				<!-- begin popular posts -->
				
					
					<ul class="popular">
						<?php $pc = new WP_Query('orderby=comment_count&posts_per_page=7'); ?>
						<?php while ($pc->have_posts()) : $pc->the_post(); ?>
							<li>
								<div class="thumb"><a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a></div>
								<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<small><?php the_time('M j, y') ?>  with  <?php comments_popup_link('No Comments;', '1 Comment', '% Comments'); ?></small>
							</li>

						<?php endwhile; ?>
					</ul>
	
	
				<!-- end popular posts -->
				
				
           </div>
		
		
		
		
		
         <div id="feat"> 
	        		<ul class="popular">
						<?php $the_query = new WP_Query('cat=' . $ex_feat . '&showposts=5&orderby=post_date&order=desc');	
						while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;?>
							<li>
								<div class="thumb"><a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a></div>
								<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<small><?php the_time('M j, y') ?>  with  <?php comments_popup_link('No Comments;', '1 Comment', '% Comments'); ?></small>
							</li>
						<?php endwhile; ?>		
			</ul>
          </div>
		  
		  
		  
		  
		  
		  
          <div id="comm">  
			<ul>
                <?php include(TEMPLATEPATH . '/includes/comments.php' ); ?>                    
			</ul>
	      </div>
			
		
        
		</div>
		
	</div>
	
	
	 
	<!-- TABS END -->
