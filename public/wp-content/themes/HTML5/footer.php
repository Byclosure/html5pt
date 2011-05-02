</div>

		
			<?php include (TEMPLATEPATH . '/includes/footer_ad.php'); ?>
    	

<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<div id="footer">
<div class="box">

	<?php if ($pov_disfoo == "true") { } else { ?>
	


  
  
<!-- Start Footer Widget 1 -->
<div class="widgetfooter">
	
	<?php if ($pov_disabout == "true") { } else { ?>
	<h2>Sobre n&oacute;s</h2>			
	<div id="about">
		<?php $aboutimg = get_option('pov_aboutimg'); ?><img src="<?php echo ($aboutimg); ?>" alt="About Us!" />
		<?php $about = get_option('pov_about'); if ($about != '') { echo stripslashes($about); } ?>
	</div>
	<div class="clear"></div>
	<?php } ?>	
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Left") ) : ?>
	<?php endif; ?>
</div>
<!-- End Footer Widget 1 -->




<!-- Start Footer Widget 2 -->
<div class="widgetfooter">
	
	<!-- latest tweets -->
	<?php if ($pov_distweet == "true") { } else { ?>
	<?php $twit_user_name="#" ?><?php if (get_settings('pov_twitter_user_name')) { $twit_user_name = get_settings('pov_twitter_user_name') ; } ?>
	<h2><a href="http://twitter.com/<?php echo $twit_user_name; ?>">Siga-me</a></h2>
	
	<div id="lasttwit">
		<div id="tweets"></div>
	</div>
	<?php } ?>						
	<!-- end latest tweets -->
	
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Center Left") ) : ?>
	<?php endif; ?>
	
</div>
<!-- End Footer Widget 2 -->




<!-- Start Footer Widget 3 -->
<div class="widgetfooter3">
	<?php if ($pov_indexport == "true") { } else { ?>
	<!-- Start Portfolio -->
	<h2>Galeria</h2>
	<div class="portfolio-index">
	
		<?php $slidecat = get_option('pov_portfolio_category'); 
		$my_query = new WP_Query('category_name= '. $slidecat .'&showposts=12'.$slidecount.''); while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
		?>
  		<!-- Start Slide Thumb -->
		<div class="portfoo-img">
		<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'title="' . $post->post_title . '"'); ?></a>
		</div>
		<!-- End Slide Thumb -->
				
		<?php endwhile; ?>
		  	
	</div>
	<!-- End Portfolio -->
	<?php } ?>
	
	
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Center Right") ) : ?>
	<?php endif; ?>
	
</div>
<!-- End Footer Widget 3 -->







<div id="widgetfooter5">
	<?php if ($pov_discontactf == "true") { } else { ?>
		<h2>Contactos</h2>
		<?php include (TEMPLATEPATH . '/includes/contact.php'); ?>
	<?php } ?>			
				
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Right") ) : ?>
	<?php endif; ?>
	
</div>




<?php } ?>
</div>


<div id="foot">
	<div class="box">
			<div style="float:left">
				<p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></p>
			</div>
			
			<div style="float:right">
				<p><a href="#">Ir para o topo</a></p>
			</div>
			
			
			

	</div>

</div>
</div>
<?php if ($pov_distweets == "true") { } else { ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tweet.js"></script>
<script type='text/javascript'> 
      jQuery(document).ready(function($) {
        $("#tweets").tweet({
          join_text: "auto",
          username: "<?php if (get_settings('pov_twitter_user_name')) { $twit_user_name = get_settings('pov_twitter_user_name') ; } ?><?php echo $twit_user_name; ?>",
          avatar_size: 0,
          count: 3,
          auto_join_text_default: "", 
          auto_join_text_ed: "",
          auto_join_text_ing: "",
          auto_join_text_reply: "",
          auto_join_text_url: "",
          loading_text: "loading tweets..."
        });
      })      
    </script> 
<script type="text/javascript">

jQuery('.slthumb img').animate({opacity: 0.4}, "slow");
jQuery('.slthumb img').hover(function() {
jQuery(this).animate({opacity: 1}, "slow");
}, function() {
jQuery(this).animate({opacity: 0.4}, "slow");
}); 


jQuery('.thumb,.recentthumb,.featurethumb,.portthumb2 img,.portthumb4 img').hover(function() {
jQuery(this).animate({opacity: 0.6}, "normal");
}, function() {
jQuery(this).animate({opacity: 1}, "normal");
}); 


</script>
<?php } ?>
<?php 
$pov_google_analytics = get_option('pov_google_analytics');
if ($pov_google_analytics != '') { echo stripslashes($pov_google_analytics); }
?>
<?php wp_footer(); ?>
</body>



</html>
