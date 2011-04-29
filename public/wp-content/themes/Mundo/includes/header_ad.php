<div class="headadvert_468x60">

	<?php if (get_option('pov_ad_head_adsense') <> "") { echo stripslashes(get_option('pov_ad_head_adsense')); ?>
	
	<?php } else { ?>
	
		<a href="<?php echo get_option('pov_ad_head_url'); ?>"><img src="<?php echo get_option('pov_ad_head_image'); ?>" width="468" height="60" alt="advert" /></a>
		
	<?php } ?>	

</div>