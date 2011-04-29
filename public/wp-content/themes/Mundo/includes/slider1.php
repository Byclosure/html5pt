<div id="coinslid" class="slpost ">

<?php 
	$featucat = get_option('pov_slide_category');
	$my_query = new WP_Query('showposts=8&category_name='. $featucat .'');	 
	if ($my_query->have_posts()) :
?>


	<!-- Start Slider Image -->
	<div class="tabbig">
	<?php while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
		<div id="feature-<?php the_ID(); ?>" >
		
			<div class="imgstyle">
			<a href="<?php the_permalink() ?>"></a>
			</div>
			<?php dp_attachment_image($post->ID, 'large', 'alt="' . $post->post_title . '"'); ?>
			<div class="inpost">
				<h3><a href="<?php the_permalink() ?>">
				<?php 
				// short_title($after, $length)
				echo short_title('...', 6); 
				?>
                </a></h3>
				<small><?php the_category(', ') ?> &bull; <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></small><br/>
			</div>
		</div>
		
		
		<?php endwhile; ?>
	
	
	
	</div>
	<?php endif; ?>
	<!-- End Slider Image -->



	<!-- Start Slider Small -->
	<?php if ($my_query->have_posts()) :?>

		<ul id="tabsmall" >
		<?php while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    		<li>
				<a class="slthumb" href="#feature-<?php the_ID(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'title="' . $post->post_title . '"'); ?></a>
			</li>
		<?php endwhile; ?>
		</ul>
	
	<?php endif; ?>
	<!-- End Slider Small -->


</div>