<!-- start title with text -->
		<div id="titul">	
		<div id="titulright">
			<div id="title">
				<?php $title = get_option('pov_title'); if ($title != '') { echo stripslashes($title); } ?>
			</div>
			
			
			<div id="title_text">
				<?php $title_text = get_option('pov_title_text'); if ($title_text != '') { echo stripslashes($title_text); } ?>
			</div>
		</div>	
		<div id="titulleft">	
			<div class="titlebutton">
				<?php $readmore="#" ?>
				<?php if (get_settings('pov_readmore')) { $readmore = get_settings('pov_readmore') ; } ?>
    			<a href="<?php echo $readmore; ?>" title="Ler mais">
				
				<!-- Button text -->
				View Demo 
				<!-- End Button text -->
				
				&raquo;</a> 
    		</div>
			
			<div class="titlebutton">
				<?php $moredetails="#" ?>
				<?php if (get_settings('pov_moredetails')) { $moredetails = get_settings('pov_moredetails') ; } ?>
    			<a href="<?php echo $moredetails; ?>" title="Mais detalhes">
				
				<!-- Button text -->
				More Details 
				<!-- End Button text -->
				
				&raquo;</a> 
    		</div>
		</div>	
		<div class="line"></div>
		</div>
		<!-- end title with text -->
