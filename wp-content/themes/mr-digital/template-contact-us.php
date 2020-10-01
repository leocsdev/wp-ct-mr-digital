<?php
/*
	Template Name: Contact Us
*/
?>

<?php get_header(); ?>
<div class="page-wrap">
	<div class="container">
		<h1><?php the_title(); ?></h1>

		<div class="row">
			<div class="col-md-6">
				contact form goes here.
			</div>
			<div class="col-md-6">
				<?php get_template_part('includes/section', 'content') ?>
			</div>
		</div>	
	</div>
</div>

<?php get_footer(); ?>