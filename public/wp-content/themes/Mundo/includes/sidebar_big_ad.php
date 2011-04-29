<div class="sidebaradvert_300x250">

	<?php if (get_option('pov_ad_sidebar_adsense') <> "") { echo stripslashes(get_option('pov_ad_sidebar_adsense')); ?>
	
	<?php } else { ?>
	
		<a href="<?php echo get_option('pov_ad_sidebar_url'); ?>"><img src="<?php echo get_option('pov_ad_sidebar_image'); ?>" width="300" height="250" alt="advert" /></a>
		
	<?php } ?>	

</div>