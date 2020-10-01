<?php
	
	// load all css
	function loadCSS() {
		// load bootstrap
		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

		wp_enqueue_style('bootstrap');

		// load main.css
		wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

		wp_enqueue_style('main');
	}

	add_action('wp_enqueue_scripts', 'loadCSS');

	// load all javascript
	function loadJS() {
		// load bootstrap js
		wp_register_script('bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);

		wp_enqueue_script('bootstrapJS');

		// load jquery
		wp_enqueue_script('jquery');
	}

	add_action('wp_enqueue_scripts', 'loadJS');


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