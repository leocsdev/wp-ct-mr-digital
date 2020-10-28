<?php get_header(); ?>
<p class="text-muted">single-cars.php template</p>

<section class="page-wrap">
	<div class="container">
		
		<h1 class="text-center mb-4"><?php the_title(); ?></h1>
		
		<?php if(has_post_thumbnail()) : ?>
			<div class="img-container mb-4">
				<div class="gallery">
					<a href="<?php the_post_thumbnail_url('blog-large'); ?>">
						<img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail mb-3">
					</a>
				</div>
			</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-lg-6">
				<?php get_template_part('includes/section', 'cars'); ?>

				<!-- FOR POST PAGE BREAK NAVIGATION -->
				<?php wp_link_pages(); ?>
			</div>
			
			<div class="col-lg-6">
				<h3>Car Details:</h3>
				<ul>
					<li>
						Colour: <?php the_field('colour'); ?>
					</li>

					<li>
						Registration: <?php the_field('registration'); ?>
					</li>
				</ul>

				<!-- if it has features, display all features -->
				<?php if(have_rows('features')) : ?>
					<h4>Features</h4>
					<ul>
						<?php 
							// loop through features 
							while(have_rows('features')) : the_row();
							$feature = get_sub_field('feature');
						?>
						<li>
							<?php echo $feature; ?>
						</li>
						<?php endwhile; ?>
						
					</ul>
				<?php endif; ?>

				<!-- Display Gallery -->
				<?php $gallery = get_field('gallery'); ?>
				<?php if($gallery) : ?>
					<h4>Image Gallery</h4>

					<div class="gallery">

						<?php foreach($gallery as $image) : ?>
							<a href="<?php echo $image['sizes']['blog-large']; ?>">
								<img class="img-fluid my-3" src="<?php echo $image['sizes']['blog-small']; ?>" alt="image">
							</a>
						<?php endforeach; ?>

					</div>


				<?php endif; ?>

			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>