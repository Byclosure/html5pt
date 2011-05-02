<div id="sidebar">
<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>



<div id="topside">	
				
                
                <!-- Start Search -->
					<?php include (TEMPLATEPATH . '/includes/searchformhead.php'); ?>
				<!-- End Search -->
                
			
				<!-- Start tab section -->
				<?php if ($pov_distabs == "true") { } else { ?>
					<?php include (TEMPLATEPATH . '/includes/tab.php'); ?>
					<div class="clear"></div>
				<?php } ?>
				<!-- End tab section -->
				
				
				
				
				<!-- begin ads -->
				<?php if ($pov_disads == "true") { } else { ?>    
					<!--<?php include(TEMPLATEPATH."/includes/ads.php");?>
					<div class="clear"></div>-->
				<?php } ?>	
				<!-- end ads -->
				
				
				
			
				
</div> 				
	
				
				<!-- widget -->
				<div id="dynamics">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Right Sidebar") ) : ?>
					
					
					<?php endif; ?>
				</div>
				<!-- end widget -->
				
				
				
				
				
				
							
				
				<?php if ($pov_disnewsletter == "true") { } else { ?>
				<!-- subscribe -->
				<div class="clear"></div>
				<div class="bloxs2">
  				<div id="subscribe">
    					<h4>NewsLetter</h4>
						<p>Escreva o seu e-mail</p>
							
							
						<?php 
							$verlink = get_option('pov_verlink'); 
							$vername = get_option('pov_vername'); 
						?>
							
							
    						<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('<?php echo ($verlink); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
      						<input type="text" name="email" class="email" />
        					<input type="hidden" value="<?php echo ($vername); ?>" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" class="lettersubmit" value="Subscrever" />
      						
    						</form>
  				</div>
				</div>
  				<!-- end subscribe -->
				<?php } ?>
			
			
			
			






<div class="clear"></div>
			<div class="reklabig">
					<!--<?php if (!get_option('pov_ad_sidebar_disable') && !$is_paged && !$ad_shown) { include (TEMPLATEPATH . "/includes/sidebar_big_ad.php"); $ad_shown = true; }?>-->
			
			</div>
			




</div>
