<?php

	//Load JS Scripts
function foundation_scripts() {


	// Load jQuery 2.1.1
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://code.jquery.com/jquery-2.1.1.min.js', false, null);
	wp_enqueue_script('jquery');

	// Load other scripts
	//wp_enqueue_script('foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), false, true);

}

if(!is_admin()) add_action('wp_enqueue_scripts', 'foundation_scripts');


	// Load CSS styles
	function foundation_styles() {
		// wp_enqueue_style('foundation', get_template_directory_uri() . '/css/app.min.css');
		wp_enqueue_style('wp_style_css', get_template_directory_uri() . '/style.css');
	}
	add_action('wp_enqueue_scripts', 'foundation_styles');

?>