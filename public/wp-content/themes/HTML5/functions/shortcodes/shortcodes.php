<?php
// BUTTON
function button( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url'		=> '#',
	), $atts));
	$out = "<a class=\"button\" href=\"" .$url. "\">" .do_shortcode($content). "</a>";
	return $out; }
add_shortcode('button', 'button');

// BUTTON #2
function button2( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url'		=> '#',
	), $atts));
	$out = "<a class=\"button2\" href=\"" .$url. "\">" .do_shortcode($content). "</a>";
	return $out; }
add_shortcode('button2', 'button2');

// BUTTON #3
function button3( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url'		=> '#',
	), $atts));
	$out = "<a class=\"button3\" href=\"" .$url. "\">" .do_shortcode($content). "</a>";
	return $out; }
add_shortcode('button3', 'button3');

// BUTTON #4
function button4( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url'		=> '#',
	), $atts));
	$out = "<a class=\"button4\" href=\"" .$url. "\">" .do_shortcode($content). "</a>";
	return $out; }
add_shortcode('button4', 'button4');

// BIG BUTTON
function big_button( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url'		=> '#',
	), $atts));
	$out = "<p><a class=\"bigbutton\" href=\"" .$url. "\">" .do_shortcode($content). " &raquo; </a></p>";
	return $out; }
add_shortcode('big_button', 'big_button');

// BIG BUTTON #2
function big_button2( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url'		=> '#',
	), $atts));
	$out = "<p><a class=\"bigbutton2\" href=\"" .$url. "\">" .do_shortcode($content). " &raquo; </a></p><br/>";
	return $out; }
add_shortcode('big_button2', 'big_button2');




// COLUMN 1/2
function one_half( $atts, $content = null ) {
   return '<div class="one_half">' . do_shortcode($content) . '</div>'; }
add_shortcode('one_half', 'one_half');

// COLUMN 1/2 <
function one_half_last( $atts, $content = null ) {
   return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clear"></div>'; }
add_shortcode('one_half_last', 'one_half_last');

// COLUMN 1/3
function one_third( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode($content) . '</div>'; }
add_shortcode('one_third', 'one_third');

// COLUMN 1/3<
function one_third_last( $atts, $content = null ) {
   return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clear"></div>'; }
add_shortcode('one_third_last', 'one_third_last');

// COLUMN 2/3
function two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>'; }
add_shortcode('two_third', 'two_third');

// COLUMN 2/3<
function two_third_last( $atts, $content = null ) {
   return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clear"></div>'; }
add_shortcode('two_third_last', 'two_third_last');

// COLUMN 1/4
function one_fourth( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>'; }
add_shortcode('one_fourth', 'one_fourth');

// COLUMN 1/4<
function one_fourth_last( $atts, $content = null ) {
   return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>'; }
add_shortcode('one_fourth_last', 'one_fourth_last');

// COLUMN 3/4
function three_fourth( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>'; }
add_shortcode('three_fourth', 'three_fourth');

// COLUMN 3/4<
function three_fourth_last( $atts, $content = null ) {
   return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>'; }
add_shortcode('three_fourth_last', 'three_fourth_last');




// FEATURED BOX
function featured( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'title'			=> '',
		'title_color'	=> '666',
		'header_color'		=> 'CED3D9',
		'ribbon'		=> '',
		'height'		=> 'auto',
	), $atts));
	// check the ribbon
	if ($ribbon) { 
		$home = get_option('home');
		$r = '<div class="ribbon"><img src="'.$home.'/wp-content/themes/Mundo/images/ribbons/'.$ribbon.'.png" alt=""/></div>';} 
	// check the title
	if ($title) {$t = '<div class="t" style="background-color:#'.$header_color.'; color:#'.$title_color.'">'.$title.'</div>' ;};
	// select the class
	if ($title) {$class = "c";} else {$class = "c2";};
	$before = '
		<div class="featured">
			'.$r.$t.'
		<div class="'.$class.'" style="height:'.$height.'">
	';
	$content = do_shortcode($content);
	$after = '</div></div>';
	return $before.$content.$after; 
	}
add_shortcode('featured', 'featured');

// DISABLE AUTOFORMATING POSTS
function my_formatter($content) {
	$new_content = '';
	$pattern_full = '{(\[noformat\].*?\[/noformat\])}is';
	$pattern_contents = '{\[noformat\](.*?)\[/noformat\]}is';
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
	foreach ($pieces as $piece) {
		if (preg_match($pattern_contents, $piece, $matches)) {
			$new_content .= $matches[1];
		} else {
			$new_content .= wptexturize(wpautop($piece));
		}
	}
	return $new_content;
}
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');
add_filter('the_content', 'my_formatter', 99);


// BASIC LIST
function basic_list( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="basic_list">', do_shortcode($content));
	return $content; }
add_shortcode('basic_list', 'basic_list');

// CHECK LIST
function check_list( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="check_list">', do_shortcode($content));
	return $content; }
add_shortcode('check_list', 'check_list');

// NO LIST
function no_list( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="no_list">', do_shortcode($content));
	return $content; }
add_shortcode('no_list', 'no_list');

// GREEN MESSAGE
function green_message( $atts, $content = null ) {
	$out = "<div class=\"green_message\">" .do_shortcode($content). "</div>";
	return $out; }
add_shortcode('green_message', 'green_message');

// BLUE MESSAGE
function blue_message( $atts, $content = null ) {
	$out = "<div class=\"blue_message\">" .do_shortcode($content). "</div>";
	return $out; }
add_shortcode('blue_message', 'blue_message');

// YELLOW MESSAGE
function yellow_message( $atts, $content = null ) {
	$out = "<div class=\"yellow_message\">" .do_shortcode($content). "</div>";
	return $out; }
add_shortcode('yellow_message', 'yellow_message');

// QUOTE
function quote( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'author'		=> '',
	), $atts));
	$out = "<div class=\"bgt\"><div class=\"bgb\"><blockquote class=\"center\">" .do_shortcode($content). " <div class=\"a\">" .$author. "</div></blockquote></div></div>";
	return $out; }
add_shortcode('quote', 'quote');

// QUOTE LEFT
function quote_left( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'author'		=> '',
	), $atts));
	$out = "<blockquote class=\"left\">" .do_shortcode($content). " <div class=\"a\">" .$author. "</div></blockquote>";
	return $out; }
add_shortcode('quote_left', 'quote_left');

// QUOTE RIGHT
function quote_right( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'author'		=> '',
	), $atts));
	$out = "<blockquote class=\"right\">" .do_shortcode($content). " <div class=\"a\">" .$author. "</div></blockquote>";
	return $out; }
add_shortcode('quote_right', 'quote_right');




// CLEAR
function clear( $atts, $content = null ) {
   return '<div class="clear"></div>'; }
add_shortcode('clear', 'clear');

// LINE
function line( $atts, $content = null ) {
   return '<div class="line"></div>'; }
add_shortcode('line', 'line');
?>
