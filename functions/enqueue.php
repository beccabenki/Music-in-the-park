<?php

function enqueue_scripts() {
	
	/* enqueue styles */
	
	wp_enqueue_style (
		'bootstrap_css',
		get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css',
		NULL,
		'3.3.5',
		'screen'
	);	
	
	// wp_enqueue_style (
	// 	'bootstrap_theme_css',
	// 	get_template_directory_uri() . '/bootstrap/css/bootstrap-theme.min.css',
	// 	NULL,
	// 	'3.3.5',
	// 	'screen'
	// );
	
	wp_enqueue_style (
		'style_css',
		get_template_directory_uri() . '/style.css',
		NULL,
		'1.0.0',
		'screen'
	);

	wp_enqueue_style (
		'common_css',
		get_template_directory_uri() . '/assets/css/main.css',
		NULL,
		'1.0.0',
		'screen'
	);


	

	wp_enqueue_style (
		'colorbox_css',
		get_template_directory_uri() . '/assets/css/colorbox.css',
		NULL,
		'0.1.0',
		'screen'
	);

	// wp_enqueue_style (
	// 	'datepicker3',
	// 	get_template_directory_uri() . '/assets/css/bootstrap-datepicker3.min.css',
	// 	NULL,
	// 	'1.6.1',
	// 	'screen'
	// );
	
	/* enqueue scripts */
	
	wp_enqueue_script(
		'bootstrap_js',
		get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js',
		array ('jquery'),
		'3.3.5',
		true
	);

	wp_enqueue_script(
		'colorbox_js',
		get_template_directory_uri() . '/assets/js/jquery.colorbox-min.js',
		array ('jquery'),
		'0.1.0',
		true
	);

	// wp_enqueue_script(
	// 	'datepicker_min_js',
	// 	get_template_directory_uri() . '/assets/js/bootstrap-datepicker.min.js',
	// 	array ('jquery'),
	// 	'1.6.1',
	// 	true
	//);

	wp_enqueue_script(
		'matchHeight_min_js',
		get_template_directory_uri() . '/assets/js/jquery.matchHeight-min.js',
		array ('jquery'),
		'0.1.0',
		true
	);

	wp_enqueue_style(
        'fancybox_style',
        get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css',
        NULL,
        'all'
    );
    wp_enqueue_script(
        'fancybox_javascript',
        get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js',
        array( 'jquery' ),
        false, true
     );
	
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts');