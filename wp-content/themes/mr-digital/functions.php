<?php
	
	// load all css
	function load_css() {
		// load bootstrap
		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

		wp_enqueue_style('bootstrap');

		// load main.css
		wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

		wp_enqueue_style('main');
	}

	// hook the function load_css to header
	add_action('wp_enqueue_scripts', 'load_css');

	// load all javascript
	function load_js() {
		// load bootstrap js
		wp_register_script('bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);

		wp_enqueue_script('bootstrapJS');

		// load jquery
		wp_enqueue_script('jquery');
	}

	// hook the function load_js to header
	add_action('wp_enqueue_scripts', 'load_js');


	// theme options
	add_theme_support('menus');


	// menus
	register_nav_menus(
		array(
			'top-nav' => 'Top Menu Location',
			'mobile-nav' => 'Mobile Menu Location',
		)
	);




	
?>