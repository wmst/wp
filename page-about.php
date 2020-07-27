<?php include '_includes/header.php' ?>
<section class="about-section">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="left-side">
				<div class="big-avatar" style="background-image: url('<?php the_field('photo-autor'); ?>');"></div>
				
				<?php the_field('about-left'); ?>

				<div class="notify-form-wrapper">
					<h2>Receive Updated for Future Events</h2> 
						<?php echo do_shortcode( '[mc4wp_form id="113"]' ); ?> 
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="right-side">
				<?php the_post(); the_content();?> 
			</div>
		</div>
	</div>
</div>
</section>
<section class="slider-section clearfix" style="background-image: url('<?=get_template_directory_uri();?>/_imgs/slider-section-bg.jpg');">
<?php include '_includes/block_photo.php';?>
</section>
<?php include '_includes/footer.php' ?>