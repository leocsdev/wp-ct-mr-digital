<?php
	
	// load all css
	function load_css() {
		// load bootstrap
		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
		wp_enqueue_style('bootstrap');

		// load magnific popup css
		wp_register_style('magnific-popup-css', get_template_directory_uri() . '/css/magnific-popup.css', array(), false, 'all');
		wp_enqueue_style('magnific-popup-css');
		
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

		// load magnific popup js
		wp_register_script('magnific-popup-js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', 'jquery', false, true);
		wp_enqueue_script('magnific-popup-js');

		// load custom js
		wp_register_script('custom-js', get_template_directory_uri() . '/js/custom.js', 'jquery', false, true);
		wp_enqueue_script('custom-js');
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



	// register custom post type
	function my_first_post_type() {
		$args = array(
			'labels' => array(
				'name' => 'Cars',
				'singular_name' => 'Car'
			),
			'hierarchical' => true,
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-images-alt2',
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
			// 'rewrite' => array('slug' => 'my-cars')
		);

		register_post_type('cars', $args);
	}

	add_action('init', 'my_first_post_type');



	// register taxonomy
	function my_first_taxonomy() {
		$args = array(
			'labels' => array(
				'name' => 'Brands',
				'singular_name' => 'Brand'
			),
			'public' => true,
			// will act more as Categories but under the name Brands
			'hierarchical' => true
		);
		
		// attach this taxonomy to Cars custom posts
		register_taxonomy('brands', array('cars'), $args);
	}

	add_action('init', 'my_first_taxonomy');


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