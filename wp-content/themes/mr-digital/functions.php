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

		// load jquery
		wp_enqueue_script('jquery');

		// load bootstrap js
		wp_register_script('bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);

		wp_enqueue_script('bootstrapJS');
	}

	// hook the function load_js to header
	add_action('wp_enqueue_scripts', 'load_js');


	// theme options
	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	add_theme_support('widgets');


	// register sidebars 
	function my_sidebars() {
		register_sidebar(
			array(
				'name' => 'Page Sidebar',
				'id' => 'page-sidebar',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			)
		);

		register_sidebar(
			array(
				'name' => 'Blog Sidebar',
				'id' => 'blog-sidebar',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			)
		);
	}

	add_action('widgets_init', 'my_sidebars');


	// menus
	register_nav_menus(
		array(
			'top-navbar' => 'Top Menu Location',
			'mobile-navbar' => 'Mobile Menu Location',
		)
	);

	// custom image sizes
	add_image_size('blog-large', 800, 400, true); // last parameter, true -> will crop the image 800x400
	add_image_size('blog-small', 300, 200, true);

	// NOTE: if you have a lot of images already uploaded, you may want to install the Force Regenerate Thumbnails for images to be automatically crop to custom image sizes

	
?>