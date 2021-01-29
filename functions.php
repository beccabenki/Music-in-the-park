<?php

$folder_prefix = dirname(__FILE__);

$functions_folder = $folder_prefix.'/functions/';

$scanned_files = array_diff(scandir($functions_folder), array('..', '.'));

foreach($scanned_files as $file)
{
	if(strpos($file, '.php'))
	{
		require_once($functions_folder.$file);
	}

}



// Move Yoast to bottom
function yoasttobottom() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

add_filter( 'wpcf7_support_html5_fallback', '__return_true' );

add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'repair_examples';
    remove_post_type_support( $post_type, 'editor');
}


function content_split($text, $separator = '<hr/>', $start = false ) {

if ( $start === false) {
$start = strlen($text) / 2;
}

$lastSpace = false;
$split = substr($text, 0, $start - 1);

// if the text is split at a good breaking point already.
if (in_array(substr($text, $start - 1, 1), array(' ', '.', '!', '?'))) {

$split .= substr($text, $start, 1);
// Calculate when we should start the split
$trueStart = strlen($split);

// find a good point to break the text.
} else {

$split = substr($split, 0, $start - strlen($separator));
$lastSpace = strrpos($split, ' ');

if ($lastSpace !== false) {
$split = substr($split, 0, $lastSpace);
}
if (in_array(substr($split, -1, 1), array(','))) {
$split = substr($split, 0, -1);
}

// Calculate when we should start the split
$trueStart = strlen($split);
}
//now we know when to split the text
return substr_replace($text, $separator, $trueStart, 0);

}