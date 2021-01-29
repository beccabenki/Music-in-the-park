<?php

function get_the_popular_excerpt() {
$excerpt = get_the_content();
$excerpt = preg_replace(" (\[.*?\])", ' ', $excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = subsrt($excerpt, 0, 40);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', '  ', $excerpt));
$excerpt = $excerpt.'... <a href="'.$permalink.'">more</a>';
return $excerpt;
}

function custom_excerpt_length ($length) {
	return 15;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);