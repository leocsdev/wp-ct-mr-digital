<?php

	function loadCSS() {
		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

		wp_enqueue_style('bootstrap');
	}

	add_action('wp_enqueue_scripts', 'loadCSS');


	function loadJS() {
		wp_register_script('bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);

		wp_enqueue_script('bootstrapJS');

		wp_enqueue_script('jquery');
	}

	add_action('wp_enqueue_scripts', 'loadJS');




	
?>