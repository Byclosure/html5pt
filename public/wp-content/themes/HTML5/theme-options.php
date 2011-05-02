<?php

$themename = "HTML5 Theme";
$shortname = "pov";
$mx_categories_obj = get_categories('hide_empty=0');
$mx_categories = array();
foreach ($mx_categories_obj as $mx_cat) {
	$mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name;
}
$categories_tmp = array_unshift($mx_categories, "Select a category:");	
$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10" );
$colorscheme = array("Default", "Brown", "Mahagon", "Green", "Blue", "Light");
$bgstyles = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10");
$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift($wp_cats, "Choose a category"); 

$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 
/* Main Setup *****************************************/
array( "name" => "General Settings",
	"type" => "section"),
array( "type" => "open"),

array( 	"name" => "Logo Display",
			"desc" => "The URL address of your logo (best is 280px x 70px). (Leaving it empty will display your blog title)",
			"id" => $shortname."_logo",
			"type" => "text",
			"std" => ""),		

array(  "name" => "Color Scheme",
        "id" => $shortname."_color",
        "type" => "select",
        "std" => "Default",
        "options" => $colorscheme),

array( "name" => "Homepage featured slider",
	"desc" => "Choose a The slider that you want in your home page",
	"id" => $shortname."_slider",
	"type" => "select",
	"options" => array("slider1", "slider2", "slider3"),
	"std" => "slider1"),

array(  "name" => "Your Twitter account",
        	"desc" => "Enter your Twitter account name",
        	"id" => $shortname."_twitter_user_name",
        	"type" => "text",
        	"std" => ""),
	
array(	"name" => "Exclude Categories",
		"desc" => "Enter a comma-separated list of the <a href='http://support.wordpress.com/pages/8/'>Category ID's</a> that you'd like to exclude from the main category navigation. (e.g. 1,2,3,4)",
		"id" => $shortname."_cat_ex",
		"std" => "",
		"type" => "text"),
	
array( "type" => "close"),


/* Layout *****************************************/

array( "name" => "Layout ",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Disable Slider?",
	"desc" => "Tick to disable SlideShow.",
	"id" => $shortname."_disslide",
	"type" => "checkbox",
	"std" => "false"),

array( "name" => "Disable Tabs section?",
	"desc" => "Tick to disable tabs section in sidebar.",
	"id" => $shortname."_distabs",
	"type" => "checkbox",
	"std" => "false"),

array( "name" => "Disable Featured section?",
	"desc" => "Tick to disable Featured section in Sidebar.",
	"id" => $shortname."_disfeatblock",
	"type" => "checkbox",
	"std" => "false"),
			
array( "name" => "Disable Newsletter box?",
	"desc" => "Tick to disable Newsletter box.",
	"id" => $shortname."_disnewsletter",
	"type" => "checkbox",
	"std" => "false"),
	
array( "name" => "Disable About box?",
	"desc" => "Tick to disable Video Me box.",
	"id" => $shortname."_disabout",
	"type" => "checkbox",
	"std" => "false"),
	
array( "name" => "Disable Tweets section?",
	"desc" => "Tick to disable.",
	"id" => $shortname."_distweet",
	"type" => "checkbox",
	"std" => "false"),
	
array( "name" => "Disable Gallery section?",
	"desc" => "Tick to disable.",
	"id" => $shortname."_indexport",
	"type" => "checkbox",
	"std" => "false"),
	
array( "name" => "Disable Contact form?",
	"desc" => "Tick to disable.",
	"id" => $shortname."_discontactf",
	"type" => "checkbox",
	"std" => "false"),
	
array( "name" => "Disable Footer Widgets?",
	"desc" => "Tick to disable Footer Widgets.",
	"id" => $shortname."_disfoo",
	"type" => "checkbox",
	"std" => "false"),

array( "type" => "close"),

/* slide *****************************************/

array( "name" => "Slider and Portfolio ",
	"type" => "section"),
array( "type" => "open"),

array( 	"name" => "Slider Category",
	"desc" => "Select the category that you would like to have displayed in the Slideshow section on your homepage.",
	"id" => $shortname."_slide_category",
	"std" => "Uncategorized",
	"type" => "select",
	"options" => $mx_categories),

array( 	"name" => "Portfolio category",
	"desc" => "Select the category that you would like to have displayed in Portfolio list.",
	"id" => $shortname."_portfolio_category",
	"std" => "Uncategorized",
	"type" => "select",
	"options" => $mx_categories),

array( "type" => "close"),



/* featured *****************************************/

array( "name" => "Featured Section",
	"type" => "section"),
array( "type" => "open"),
	
	


array( 	"name" => "Featured section in Sidebar",
	"desc" => "Select the category that you would like to have displayed in Featured list on your homepage.",
	"id" => $shortname."_story_category",
	"std" => "Uncategorized",
	"type" => "select",
	"options" => $mx_categories),
			
array(	"name" => "Number of highlight reel posts in Sidebar",
	"desc" => "Select the number of posts to display ( Upto 4 is good).",
	"id" => $shortname."_story_count",
	"std" => "3",
	"type" => "select",
	"options" => $number_entries),


array( "type" => "close"),



/* Abiut *****************************************/

array( "name" => "About and Contact Section",
	"type" => "section"),
array( "type" => "open"),

	
array( "name" => "About Text",
	"desc" => "Enter the about section text with tags intact (at least keep the &lt;p&gt; tag for different paragraphs)",
	"id" => $shortname."_about",
	"type" => "textarea",
	"std" => "<p>Integer eget dui ante, a vestibulum augue. Suspendisse lorem diam, viverra a interdum in, facilisis eget mauris."),

array("name" => "About Us Image",
	"desc" => "Enter your avatar url here.",
    "id" => $shortname."_aboutimg",
    "std" => "",
    "type" => "text"),  

array(  "name" => "Your E-mail",
    "desc" => "Enter the email address you wish to receive messages to.",
    "id" => $shortname."_email_address",
    "type" => "text",
    "std" => ""),
	
array(  "name" => "Newsletter Verify Link",
    "desc" => "Enter the verify link.",
    "id" => $shortname."_verlink",
    "type" => "text",
    "std" => ""),
	
array(  "name" => "Newsletter Website name",
    "desc" => "Enter website name.",
    "id" => $shortname."_vername",
    "type" => "text",
    "std" => ""),


array( "type" => "close"),



/* Social Networks *****************************************/

array( "name" => "Social Networks",
	"type" => "section"),
array( "type" => "open"),

array("name" => "AIM:",
			"desc" => "",
            "id" => "social_aim",
            "std" => "",
            "type" => "text"),
			
array("name" => "BEBO:",
			"desc" => "",
            "id" => "social_bebo",
            "std" => "",
            "type" => "text"),
	
array("name" => "Blogger",
			"desc" => "",
            "id" => "social_blogger",
            "std" => "",
            "type" => "text"),
			
array("name" => "Brightkite",
			"desc" => "",
            "id" => "social_brightkite",
            "std" => "",
            "type" => "text"),
			
array("name" => "Delicious",
			"desc" => "",
            "id" => "social_delicious",
            "std" => "",
            "type" => "text"),
			
array("name" => "Design Float",
			"desc" => "",
            "id" => "social_designfloat",
            "std" => "",
            "type" => "text"),

array("name" => "Design Moo",
			"desc" => "",
            "id" => "social_designmoo",
            "std" => "",
            "type" => "text"),
			
array("name" => "DeviantArt",
			"desc" => "",
            "id" => "social_deviantart",
            "std" => "",
            "type" => "text"),
			
array("name" => "Digg",
			"desc" => "",
            "id" => "social_digg",
            "std" => "",
            "type" => "text"),
			
array("name" => "Dopplr",
			"desc" => "",
            "id" => "social_dopplr",
            "std" => "",
            "type" => "text"),
			
array("name" => "Ember",
			"desc" => "",
            "id" => "social_ember",
            "std" => "",
            "type" => "text"),

array("name" => "Facebook",
			"desc" => "",
            "id" => "social_facebook",
            "std" => "",
            "type" => "text"),
			
array("name" => "Flickr",
			"desc" => "",
            "id" => "social_flickr",
            "std" => "",
            "type" => "text"),
			
array("name" => "Foursquare",
			"desc" => "",
            "id" => "social_foursquare",
            "std" => "",
            "type" => "text"),

array("name" => "FriendFeed",
			"desc" => "",
            "id" => "social_friendfeed",
            "std" => "",
            "type" => "text"),
			
array("name" => "GoogleBuzz",
			"desc" => "",
            "id" => "social_googlebuzz",
            "std" => "",
            "type" => "text"),
			
array("name" => "GoogleTalk",
			"desc" => "",
            "id" => "social_googletalk",
            "std" => "",
            "type" => "text"),
			
array("name" => "Gowalla",
			"desc" => "",
            "id" => "social_gowalla",
            "std" => "",
            "type" => "text"),
			
array("name" => "iLike",
			"desc" => "",
            "id" => "social_ilike",
            "std" => "",
            "type" => "text"),
			
array("name" => "LastFM",
			"desc" => "",
            "id" => "social_lastfm",
            "std" => "",
            "type" => "text"),
			
array("name" => "LinkedIn",
			"desc" => "",
            "id" => "social_linkedin",
            "std" => "",
            "type" => "text"),
			
array("name" => "Meetup.org",
			"desc" => "",
            "id" => "social_meetuporg",
            "std" => "",
            "type" => "text"),
			
array("name" => "Mixx",
			"desc" => "",
            "id" => "social_mixx",
            "std" => "",
            "type" => "text"),
			
array("name" => "MobileMe",
			"desc" => "",
            "id" => "social_mobileme",
            "std" => "",
            "type" => "text"),

array("name" => "MySpace",
			"desc" => "",
            "id" => "social_myspace",
            "std" => "",
            "type" => "text"),
			
array("name" => "Newsvine",
			"desc" => "",
            "id" => "social_newsvine",
            "std" => "",
            "type" => "text"),
			
array("name" => "Picasa",
			"desc" => "",
            "id" => "social_picasa",

            "std" => "",
            "type" => "text"),
			
array("name" => "Plurk",
			"desc" => "",
            "id" => "social_plurk",
            "std" => "",
            "type" => "text"),
			
array("name" => "Posterous",
			"desc" => "",
            "id" => "social_posterous",
            "std" => "",
            "type" => "text"),
			
array("name" => "Readernaut",
			"desc" => "",
            "id" => "social_readernaut",
            "std" => "",
            "type" => "text"),


array("name" => "Reddit",
			"desc" => "",
            "id" => "social_reddit",
            "std" => "",
            "type" => "text"),
			
array("name" => "Skype",
			"desc" => "",
            "id" => "social_skype",
            "std" => "",
            "type" => "text"),
			
array("name" => "StumbleUpon",
			"desc" => "",
            "id" => "social_stumbleupon",
            "std" => "",
            "type" => "text"),
			
array("name" => "Tumblr",
			"desc" => "",
            "id" => "social_tumblr",
            "std" => "",
            "type" => "text"),
			
array("name" => "Twitter",
			"desc" => "",
            "id" => "social_twitter",
            "std" => "",
            "type" => "text"),
			
array("name" => "Viddler",
			"desc" => "",
            "id" => "social_viddler",
            "std" => "",
            "type" => "text"),
			
array("name" => "Vimeo",
			"desc" => "",
            "id" => "social_vimeo",
            "std" => "",
            "type" => "text"),
			
array("name" => "Virb",
			"desc" => "",
            "id" => "social_virb",
            "std" => "",
            "type" => "text"),
			
array("name" => "WordPress",
			"desc" => "",
            "id" => "social_wordpress",
            "std" => "",
            "type" => "text"),
			
array("name" => "Xing",
			"desc" => "",
            "id" => "social_xing",
            "std" => "",
            "type" => "text"),
			
array("name" => "YahooBuzz",
			"desc" => "",
            "id" => "social_yahoobuzz",
            "std" => "",
            "type" => "text"),

array("name" => "Yelp",
			"desc" => "",
            "id" => "social_yelp",
            "std" => "",
            "type" => "text"),
			
array("name" => "YouTube",
			"desc" => "",
            "id" => "social_youtube",
            "std" => "",
            "type" => "text"),

array( "type" => "close"),



/* Banner/AdSense Ads *****************************************/

array( "name" => "Banner/AdSense Ads",
	"type" => "section"),
array( "type" => "open"),


array(	"name" => "Header Adsense code",
			"desc" => "Enter your adsense code here.",
			"id" => $shortname."_ad_head_adsense",
			"std" => "",
			"type" => "textarea"),

array(	"name" => "Banner Ad Header - Image Location",
			"desc" => "Enter the URL for this banner ad.",
			"id" => $shortname."_ad_head_image",
			"std" => "",
			"type" => "text"),

array(	"name" => "Banner Ad Header - Destination",
			"desc" => "Enter the URL where this banner ad points to.",
			"id" => $shortname."_ad_head_url",
			"std" => "#",
			"type" => "text"),


array(	"name" => "Disable Header Ad",
			"desc" => "Disable the ad space",
			"id" => $shortname."_ad_head_disable",
			"type" => "checkbox"),
	


array(	"name" => "Content Adsense code",
			"desc" => "Enter  adsense code for content ad (468x60px).",
			"id" => $shortname."_ad_content_adsense",
			"std" => "",
			"type" => "textarea"),

array(	"name" => "Banner Ad Content - Image Location",
			"desc" => "Enter the URL for this banner ad (468x60px).",
			"id" => $shortname."_ad_content_image",
			"std" => "",
			"type" => "text"),

array(	"name" => "Banner Ad Content - Destination",
			"desc" => "Enter the URL where this banner ad points to.",
			"id" => $shortname."_ad_content_url",
			"std" => "",
			"type" => "text"),

array(	"name" => "Disable Content Ad",
			"desc" => "Disable the ad space",
			"id" => $shortname."_ad_content_disable",
			"type" => "checkbox"),


array(	"name" => "Sidebar Adsense code",
			"desc" => "Enter your adsense code here (300x250px).",
			"id" => $shortname."_ad_sidebar_adsense",
			"std" => "",
			"type" => "textarea"),

array(	"name" => "Banner Ad Sidebar - Image Location",
			"desc" => "Enter the URL for this banner ad (300x250px).",
			"id" => $shortname."_ad_sidebar_image",
			"std" => "",
			"type" => "text"),

array(	"name" => "Banner Ad Sidebar - Destination",
			"desc" => "Enter the URL where this banner ad points to.",
			"id" => $shortname."_ad_sidebar_url",
			"std" => "#",
			"type" => "text"),


array(	"name" => "Disable Sidebar Ad",
			"desc" => "Disable the ad space",
			"id" => $shortname."_ad_sidebar_disable",
			"type" => "checkbox"),


array( "type" => "close"),


/* Other Ads *****************************************/

array( "name" => "Other Ads",
	"type" => "section"),
array( "type" => "open"),



array("name" => "Banner-1 Image",
			"desc" => "Enter your 125x125 banner image url here.",
            "id" => $shortname."_banner1",
            "std" => "",
            "type" => "text"),     
	   
array("name" => "Banner-1 Url",
			"desc" => "Enter the banner-1 url here.",
            "id" => $shortname."_url1",
            "std" => "",
            "type" => "text"),    
	      
	 
array("name" => "Banner-2 Image",
			"desc" => "Enter your 125x125 banner image url here.",
            "id" => $shortname."_banner2",
            "std" => "",
            "type" => "text"),    
	   
array("name" => "Banner-2 Url",
			"desc" => "Enter the banner-2 url here.",
            "id" => $shortname."_url2",
            "std" => "",
            "type" => "text"), 

array("name" => "Banner-3 Image",
			"desc" => "Enter your 125x125 banner image url here.",
            "id" => $shortname."_banner3",
            "std" => "",
            "type" => "text"),    
	   
array("name" => "Banner-3 Url",
			"desc" => "Enter the banner-3 url here.",
            "id" => $shortname."_url3",
            "std" => "",
            "type" => "text"),
			
array("name" => "Banner-4 Image",
			"desc" => "Enter your 125x125 banner image url here.",
            "id" => $shortname."_banner4",
            "std" => "",
            "type" => "text"),    
	   
array("name" => "Banner-4 Url",
			"desc" => "Enter the banner-4 url here.",
            "id" => $shortname."_url4",
            "std" => "",
            "type" => "text"),


array( "name" => "Disable Sidebar Ads?",
			"desc" => "Tick to disable Ad section.",
			"id" => $shortname."_disads",
			"type" => "checkbox",
			"std" => "false"),
	
	

array( "type" => "close"),

array( "name" => "Footer",
	"type" => "section"),
array( "type" => "open"),

	
array( "name" => "Google Analytics Code",
	"desc" => "You can paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.",
	"id" => $shortname."_google_analytics",
	"type" => "textarea",
	"std" => ""),

array( "type" => "close")
 
);


function mytheme_add_admin() {
 
global $themename, $shortname, $options;
 
if ( $_GET['page'] == basename(__FILE__) ) {
 
	if ( 'save' == $_REQUEST['action'] ) {
 
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
 
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
 
	header("Location: admin.php?page=theme-options.php&saved=true");
die;
 
} 
else if( 'reset' == $_REQUEST['action'] ) {
 
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
 
	header("Location: admin.php?page=theme-options.php&reset=true");
die;
 
}
}
 
add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
}

function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/functions/rm_script.js", false, "1.0");

}
function mytheme_admin() {
 
global $themename, $shortname, $options;
$i=0;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>
<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> Settings</h2>
 
<div class="rm_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
 
<?php break;
 
case "close":
?>
 
</div>
</div>
<br />

 
<?php break;
 
case "title":
?>
<p>To easily use the <?php echo $themename;?> theme, you can use the menu below.</p>

 
<?php break;
 
case 'text':
?>

<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
<?php
break;
 
case 'textarea':
?>

<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
  
<?php
break;
 
case 'select':
?>

<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;
 
case "checkbox":
?>

<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />


	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; 
case "section":

$i++;

?>

<div class="rm_section">
<div class="rm_title"><h3><img src="<?php bloginfo('template_directory')?>/functions/images/trans.png" class="inactive" alt="""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
</span><div class="clearfix"></div></div>
<div class="rm_options">

 
<?php break;
 
}
}
?>
 
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<div style="font-size:9px; margin-bottom:10px;">
		<a href="http://beatheme.com">Beatheme</a> and <a href="http://goodtheme.org">GoodTheme</a>
	
</div>
 </div> 
 

<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');

automatic_feed_links();


?>