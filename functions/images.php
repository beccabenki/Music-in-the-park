<?php

add_action('init', 'pentangle_set_image_sizes' );
add_filter('image_size_names_choose', 'my_image_sizes');

function pentangle_image_sizes()
{
	if ( function_exists( 'add_image_size' ) ) {
		$image_sizes = array(
			array('code'=>'front', 'name'=>'Front Thumbnail', 'width'=>1140, 'height'=>420,  'crop'=>TRUE),
			array('code'=>'tsquare', 'name'=>'Thumb Square', 'width'=>255, 'height'=> 255, 'crop'=>TRUE),
			array('code'=>'image', 'name'=>'Category Image', 'width'=>285, 'height'=>190,  'crop'=>TRUE),
			array('code'=>'team', 'name'=>'Team', 'width'=>200, 'height'=>300,  'crop'=>TRUE),
			array('code'=>'band', 'name'=>'Band', 'width'=>250, 'height'=>250,  'crop'=>TRUE),
			array('code'=>'band_front', 'name'=>'Band Front', 'width'=>350, 'height'=>350,  'crop'=>TRUE),
			array('code'=>'block',  'name'=>'block Image 572xauto', 'width'=>572,  'height'=>9999, 'crop'=>FALSE),
			array('code'=>'slider-image', 'name'=>'Slider Image',   'width'=> 2000, 'crop'=>TRUE),


		);
		return $image_sizes;
	}
}


function pentangle_set_image_sizes()
{
	$image_sizes = pentangle_image_sizes();
	if($image_sizes)
	{
		foreach($image_sizes as $is)
		{
			add_image_size( $is['code'], $is['width'], $is['height'], $is['crop']);
		}
	}
}

function my_image_sizes($sizes) {

	$image_sizes = pentangle_image_sizes();
	if($image_sizes)
	{
		foreach($image_sizes as $is)
		{
			$addsizes[$is['code']]	= $is['name'];
		}
	}
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}