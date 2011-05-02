


<div id="indexcenter">
			
			
			
			<!-- start video section -->
			<?php if ($pov_disvideo == "true") { } else { ?>
			<div class="bloxs">
			
			
				<div id="video">
					<h4>Featured <span>Video</span></h4>
					<?php $pov_video = get_option('pov_video'); if ($pov_video != '') { echo stripslashes($pov_video); } ?>
					</div>
			
			
			</div>
			<?php } ?>
			<!-- end video section -->
			
			
			
			
			
			<!-- widget -->
			<div id="centerdynamics">

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Center Index") ) : ?>
					
				<?php endif; ?>
			
			</div>
			<div class="clear"></div>
			<!-- end widget -->
			
			
			
			
			
	
	
			
			<div class="bloxs2">
			<h4>From Our <span>Portfolio</span></h4>
			<div class="portfolio-index">
			<!-- Start Portfolio -->
			<?php 
			$slidecat = get_option('pov_portfolio_category'); 
			
			$my_query = new WP_Query('category_name= '. $slidecat .'&showposts=12'.$slidecount.'');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
			?>
  			
			

					<!-- Start Slide Thumb -->
					<div class="portfoo-img">
							<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'title="' . $post->post_title . '"'); ?></a>
					</div>
					<!-- End Slide Thumb -->
				
					
		
      		

			<?php endwhile; ?>
			<!-- End Portfolio -->		  	
		
			</div>
			</div>
			
			
			
			
			
			
			<?php if ($pov_disadcenter == "true") { } else { ?>
			<div class="bloxs">
			
			<div class="rekla1">
	
				<ul>
	
					<li>
						<?php 
						$banX1 = get_option('pov_bannerX1'); 
						$urlX1 = get_option('pov_urlX1'); 
						?>
						<a href="<?php echo ($urlX1); ?>" rel="bookmark" title=""><img src="<?php echo ($banX1); ?>" alt="" /></a>
					</li>
	
				</ul>
			</div>
			</div>
			<?php } ?>
			
			
			
			
			
			
			
			
			
			
			
			
			<!-- latest tweets -->
			<?php if ($pov_distweets == "true") { } else { ?>
				<!-- Start Latest Tweets -->
							<div id="lasttwit">
							<h4>My Latest <span>Tweets</span></h4>
								<div id="tweets"></div>
							</div>
							
							<!-- Start Twitter Button -->
								<div id="twitbutt">
									<?php $twit_user_name="#" ?>
									<?php if (get_settings('pov_twitter_user_name')) { $twit_user_name = get_settings('pov_twitter_user_name') ; } ?>
									<h4 style=" text-align:right;"><a href="http://twitter.com/<?php echo $twit_user_name; ?>">Follow <span>Me</span></a></h4>
								</div>
								<!-- End Twitter Button -->
							
							
			<?php } ?>
			<!-- end latest tweets -->
	
	
	
	
	
	
			
	</div>








