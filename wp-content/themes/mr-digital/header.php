<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
	<title>WP Mr Digital Theme</title>
</head>
<body>
	<header>
		<div class="container">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'top-nav',
						'menu_class' => 'top-navbar'
					)
				);
			?>
		</div>
	</header>

