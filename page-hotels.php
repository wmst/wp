<?php include '_includes/header.php' ?>
<section class="hotels">
	<div class="container">
		<div class="hotels-title">
			<h2>True to our value investing roots we negotiate
			terrific rates with two wonderful resorts.</h2>
			<p>We are competing with another event this year so please book soon to ensure your room.</p>
		</div>
		<div class="column-wrapper">
			<div class="row">
				<?php
				$posts = get_posts( array(
					'numberposts' => 6,
					'category'    => 3,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  =>'',
					'post_type'   => 'post',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );
				
				foreach( $posts as $post ){
					setup_postdata($post);
					?>
					<div class="col-md-6">
							<div class="column">
								<h3>From <?=the_title();?> website:</h3>
								<?=the_content();?>
								<p><span>Reservations:</span> <?=the_field('reservations');?><br><?=the_field('reservations_2');?>
							<p><span>Rates:</span> <?=the_field('rates');?><br><?=the_field('rates2');?></p>
							<img src="<?=the_field('hotel_img');?>" alt="<?=the_title();?>" class="column-logo-1">
						</div>
					</div>
					<?php
				}
				
				
			?>
				
			 
	</div>
</div>
</div>
</div>
</section>
<section class="bottom-section" style="background-image: url('<?=get_template_directory_uri();?>/_imgs/slider-section-bg.jpg');">
	<h2>Receive updates for this and future events</h2>
	<p>As bonus, you'll receive useful articles from Vitaliy N. Katsenelson </p>
	<div class="custom-form">
	<?php echo do_shortcode( '[mc4wp_form id="113"]' ); ?> 
	</div>
	<br>
	<div class="copyright with-bg">valuexvail &#169; 2017</div>
</section>
<?php include '_includes/footer.php' ?>