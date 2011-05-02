

<div id="menu">	
<div class="box">
			<div id="categories">
            <ul class="sf-menu"><li id="home"><a href="<?php echo get_settings('home'); ?>/">In&iacute;<br/> <span></span></a></li></ul>
			<?php $menuClass = 'sf-menu';
				$menuID = 'secondary-menu';
				$secondaryNav = '';
				if (function_exists('wp_nav_menu')) {
					$secondaryNav = wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false ) ); 
				};
				if ($secondaryNav == '') { ?>
					<ul id="<?php echo $menuID; ?>" class="sf-menu">
                    
						<?php if (get_option('pov_home_link')) : ?>
					
					<?php endif; ?>

					<?php foreach ( (get_categories('exclude='.get_option('pov_cat_ex') ) ) as $category ) { if ( $category->category_parent == '0' ) { ?>
  					
                    <li>
                        <a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->cat_name; ?><br/> <span><?php echo $category->category_description; ?></span></a>
                        
                        <?php if (get_category_children($category->cat_ID) ) { ?>
                        <ul><?php wp_list_categories('title_li&child_of=' . $category->cat_ID ); ?></ul>
                        <?php } ?>
                    </li>
	
					<?php } } ?>
					</ul> <!-- end ul#nav -->
				<?php }
				else echo($secondaryNav); ?>
			</div>
			
			
</div>
</div>
<div style="clear: both;"></div>






