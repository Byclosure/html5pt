
<?php
	// Get Social links into array
	$social_links = array();
	$social_options = array(
		array(	'AIM', 'social_aim'	),
		array(	'BEBO', 'social_bebo'	),
		array(	'Blogger', 'social_blogger'	),
		array(	'Brightkite', 'social_brightkite'	),
		array(	'Delicious', 'social_delicious'	),
		array(	'DesignFloat', 'social_designfloat'	),
		array(	'DesignMoo', 'social_designmoo'	),
		array(	'Deviantart', 'social_deviantart'	),
		array(	'Digg', 'social_digg'	),
		array(	'Dopplr', 'social_dopplr'	),
		array(	'Ember', 'social_ember'	),
		array(	'Facebook', 'social_facebook'	),
		array(	'Flickr', 'social_flickr'	),
		array(	'Foursquare', 'social_foursquare'	),
		array(	'FriendFeed', 'social_friendfeed'	),
		array(	'GoogleBuzz', 'social_googlebuzz'	),
		array(	'GoogleTalk', 'social_googletalk'	),
		array(	'Gowalla', 'social_gowalla'	),
		array(	'iLike', 'social_ilike'	),
		array(	'LastFM', 'social_lastfm'	),
		array(	'LinkedIn', 'social_linkedin'	),
		array(	'Meetup.org', 'social_meetuporg'	),
		array(	'Mixx', 'social_mixx'	),
		array(	'MobileMe', 'social_mobileme'	),
		array(	'MySpace', 'social_myspace'	),
		array(	'Newsvine', 'social_newsvine'	),
		array(	'Picasa', 'social_picasa'	),
		array(	'Plurk', 'social_plurk'	),
		array(	'Posterous', 'social_posterous'	),
		array(	'Readernaut', 'social_readernaut'	),
		array(	'Reddit', 'social_reddit'	),
		array(	'Skype', 'social_skype'	),		
		array(	'StumbleUpon', 'social_stumbleupon'	),
		array(	'Tumblr', 'social_tumblr'	),
		array(	'Twitter', 'social_twitter'	),
		array(	'Viddler', 'social_viddler'	),
		array(	'Vimeo', 'social_vimeo'	),
		array(	'Virb', 'social_virb'	),
		array(	'WordPress', 'social_wordpress'	),
		array(	'Xing', 'social_xing' ),
		array(	'YahooBuzz', 'social_yahoobuzz'	),
		array(	'Yelp', 'social_yelp'	),
		array(	'YouTube', 'social_youtube'	),
	);
	foreach ($social_options as $social) {
		if ($link = get_option($social[1])) {
			$link = trim($link);
			
			// Special Handling of ',' and '|'
			$split_links = explode(',',$link);
			if (sizeof($split_links)>0) {
				foreach ($split_links as $link) {
					$link_parts = explode('|', $link);
					if (sizeof($link_parts)==2) {						
						// Add it
						$sort_social_links[] = trim($link_parts[0]);
						$social_links[] = array( 'name' => trim($link_parts[0]), 'link' => trim($link_parts[1]), 'icon' => get_bloginfo('template_url').'/images/networks/'.strtolower($social[0]).'_32.png' );						
					} else {
						// Add it (no custom title)
						$sort_social_links[] = $social[0];
						$social_links[] = array( 'name' => $social[0], 'link' => trim($link_parts[0]), 'icon' => get_bloginfo('template_url').'/images/networks/'.strtolower($social[0]).'_32.png' );
					}
				}
			}
		}
	}
	
	
	
	// Display
	if (sizeof($social_links)>0) {
		
		$name = array();
		foreach ($social_links as $key => $row) {
		    $name[$key]  = strtolower($row['name']);
		}
		array_multisort($name, SORT_ASC, $social_links);
		
		echo '<ul class="social">';
		$alt = -1;
		$loop = 1;
		foreach($social_links as $social) {			
			echo '<li class="';
			if ($alt==1) echo 'alt ';
			if ($loop==1 || $loop==2) echo 'first';
			echo '"><a href="'.str_replace('&','&amp;',str_replace('&amp;','&',$social['link'])).'" style="background-image: url('.$social['icon'].')">'.$social['name'].'</a></li>';
			$alt = $alt*-1;
			$loop++;
		}
		echo '</ul><div class="clear"></div>';
	}
?>

