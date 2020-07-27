<?php include '_includes/header.php' ?>
	<section class="apply-section">
		<div class="custom-container">
		<div class="text-wrapper">
			<?php the_post(); echo the_content();?>
		</div>
		<div class="apply-form">
			<h2>Fill the Form</h2> 
				<?php echo do_shortcode( '[contact-form-7 id="129" title="apply"]' ); ?> 
		</div>
		</div>
	</section>
	<section class="slider-section clearfix" style="background-image: url('<?=get_template_directory_uri();?>/_imgs/slider-section-bg.jpg');">
	<?php include '_includes/block_photo.php';?>
	</section>
<?php include '_includes/footer.php' ?>
