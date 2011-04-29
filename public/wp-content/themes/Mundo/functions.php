<?php

if ( ! isset( $content_width ) )
	$content_width = 535;

// Shordcodes
require_once (TEMPLATEPATH.'/functions/shortcodes/shortcodes.php');

// LightBox
require('lightbox/wp-lightboxJS.php');

$includes_path = TEMPLATEPATH . '/includes/';

// Load Javascript in wp_head
require_once ($includes_path . 'theme-js.php');

// Use shortcodes in text widgets.
add_filter('widget_text', 'do_shortcode');

wp_enqueue_script('theme_functions', get_bloginfo('template_url').'/js/functions.js', array('jquery'));

function show_posts_nav() {
    global $wp_query;
    return ($wp_query->max_num_pages > 1);
}
require_once(TEMPLATEPATH . '/theme-options.php');


if ( function_exists('register_sidebar') ) 
{ 
   
register_sidebar(array('name' => 'Right Sidebar','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>')); 
register_sidebar(array('name' => 'Footer Left','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));     
register_sidebar(array('name' => 'Footer Center Left','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));    
register_sidebar(array('name' => 'Footer Center Right','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));  
register_sidebar(array('name' => 'Footer Right','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>')); 
}

// navigation menu
function register_main_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'secondary-menu' => __( 'Secondary Menu' )
		)
	);
};
if (function_exists('register_nav_menus')) add_action( 'init', 'register_main_menus' );

// custom background
add_custom_background();  

// Displays post image attachment (sizes: thumbnail, medium, full)
function dp_attachment_image($postid=0, $size='Large', $attributes='') {
	if ($postid<1) $postid = get_the_ID();
	if ($images = get_children(array(
		'post_parent' => $postid,
		'post_type' => 'attachment',
		'numberposts' => 1,
		'post_mime_type' => 'image',)))
		foreach($images as $image) {
			$attachment=wp_get_attachment_image_src($image->ID, $size);
			?><img class="tipos" src="<?php echo $attachment[0]; ?>" <?php echo $attributes; ?> /><?php
		}
}




# custom background
add_custom_background(); 

// Shorten post title
function short_title($after = '', $length) {
	$mytitle = explode(' ', get_the_title(), $length);
	if (count($mytitle)>=$length) {
		array_pop($mytitle);
		$mytitle = implode(" ",$mytitle). $after;
	} else {
		$mytitle = implode(" ",$mytitle);
	}
	return $mytitle;
}

// Shorten Excerpt text for use in theme
function pov_excerpt($text, $chars = 120) {
	$text = $text." ";
	$text = substr($text,0,$chars);
	$text = substr($text,0,strrpos($text,' '));
	$text = $text."...";
	return $text;
}

function trim_excerpt($text) {
  return rtrim($text,'[...]');
}
add_filter('get_the_excerpt', 'trim_excerpt');


?>
<?php
function widget_mytheme_search() {
?>

<form class="searchformhead" method="get" action="<?php bloginfo('url'); ?>">
	<p class="coco"><input type="text" name="s" class="s" size="30" value="<?php the_search_query(); ?>" /><input type="submit" class="searchSubmit" value="" /></p>
</form>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_mytheme_search');

// "rel" attribute for images
function pov_imgrel_replace($string) {
	$pattern = '/(<a(.*?)href="([^"]*.)'.IMAGE_FILETYPE.'"(.*?)><img)/ie';
  	$replacement = 'stripslashes(strstr("\2\5","rel=") ? "\1" : "<a\2href=\"\3\4\"\5 rel=\"lightbox\"><img")';
	return preg_replace($pattern, $replacement, $string);
}

function dojo_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>">
			<p class="title comment-author vcard">
				<?php echo get_avatar($comment,$size='64' ); ?>
				
			</p>
			<?php if ($comment->comment_approved == '0') : // If comment is not approved ?>
				<p class="alert"><em><?php _e('Your comment is awaiting moderation.') ?></em></p>
			<?php endif; ?>
			<div class="content">
				<?php comment_text() ?>
			</div>
			<p class="metadata comment-meta commentmetadata"><small>
				<?php printf(__('<span class="says">by</span> <cite class="fn">%s</cite>'), get_comment_author_link()) ?> on 
				
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a>.
				<?php comment_reply_link(array_merge( $args, array('reply_text' => '(Reply)', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				<?php edit_comment_link(__('(Edit)'),'  ','') ?>
			</small></p>
		</div>
	<?php
}







?>