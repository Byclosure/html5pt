<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title>
<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Search Results<?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
		<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
		<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
		<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>

</title>

<?php global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style-<?php echo $pov_color; ?>.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />


	
	
<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('Coin', get_stylesheet_directory_uri() .'/js/coin-slider.min.js');
wp_enqueue_script('sprinkle', get_stylesheet_directory_uri() .'/js/sprinkle.js');
wp_enqueue_script('jquery-ui-personalized-1.5.2.packed', get_stylesheet_directory_uri() .'/js/jquery-ui-personalized-1.5.2.packed.js');
?>		
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tiptip.minified.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/hoverIntent.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/pngfix.js"></script>
<![endif]-->

<script type="text/javascript">

$(document).ready(function(){ 
        $("ul.sf-menu").superfish(); 
    }); 

$(function(){
	$(".tipos").tipTip({maxWidth: "auto", edgeOffset: 10});
});
</script>


<!--[if lte IE 6]>
<style>
#menu,.sf-menu li li,.sf-menu li li li,.sf-menu li:hover, .sf-menu li.sfHover,
.sf-menu a:focus, .sf-menu a:hover, .sf-menu a:active,.sf-sub-indicator,.coco .searchSubmit,.slpost,
ul#tabsmall,.feature,#sidebar,.indexpost,ul.gttTabs li,#dynamics h2,#dynamics ul,#recentposthead,#header,#footer
{
 background-image: none;
 filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src=images/yourImage.png,
sizingMethod='scale');
}
</style>

<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>






<?php wp_head(); ?>
</head>
<body <?php body_class( $body_classes ); ?>>






<div id="tophead">		
		
		<div class="box">
		
			<?php $menuClass = 'menu';
			$menuID = 'top-menu';
			$primaryNav = '';
			if (function_exists('wp_nav_menu')) {
				$primaryNav = wp_nav_menu( array( 'container_class' => 'menu','theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false ) ); 
			};
			if ($primaryNav == '') { ?>
				<ul id="<?php echo $menuID; ?>" class="menu">
					<?php wp_list_pages('title_li=&depth=2&sort_column=menu_order'); ?>
				</ul> <!-- ul#nav -->
			<?php }
			else echo($primaryNav); ?>
	
			<!-- today date -->
    			<div class="today-date">
      				<?php echo date('l, F jS Y'); ?>
    			</div>
    		<!-- / today date -->
		</div>	
		

</div>


<div id="header">
		<div class="box">
		<div id="headerleft">
			<h1><a href="<?php echo get_settings('home'); ?>/"><?php if($pov_logo) { ?><img class="tipos" title="<?php bloginfo('description'); ?>" src="<?php echo $pov_logo;?>" alt="<?php bloginfo('name'); ?>"/><?php } else { bloginfo('name'); } ?>	</a></h1>
		</div>	
		
		
		<!--<div id="headerright">  
				<?php if (!get_option('pov_ad_head_disable') && !$is_paged && !$ad_shown) { include (TEMPLATEPATH . "/includes/header_ad.php"); $ad_shown = true; }?>
		</div>-->
		</div>	
	
</div>
<?php include(TEMPLATEPATH."/includes/categories.php");?>	


