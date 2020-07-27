<?php include '_includes/header.php' ?>
<section class="main-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_imgs/main-section-bg.jpg');">
	<div class="clip-overlay" style="height: 152.4px;">
		<svg class="svg-wave" width="" height="" version="1.1" viewBox="0 0 100 10" preserveAspectRatio="none" xmlns="//www.w3.org/2000/svg">
		<path class="front-wave" d="M0,0 C30,6 80,4 100,0 L100,10 L0,10 Z" fill="#4f8abb"></path>
	</svg>
</div>
<div class="title-container">
	<h1><?=the_field('next_presentatabout_h_nameion_txt');?></h1>
	<div class="location">
		<span class="date"><img src="<?php echo get_template_directory_uri(); ?>/_imgs/date-icon.png" alt=""><? $dt = get_field('next_presentation_date'); echo date("F Y",strtotime($dt))?></span>
		<span class="city"><img src="<?php echo get_template_directory_uri(); ?>/_imgs/city-icon.png" alt=""><?=get_field('next_presentation_location');?></span>
	</div>
</div>
<div class="form-wrapper">
	<div class="form-title">
		<h2>Receive updates for this and future events</h2>
		<p>As bonus, you'll receive useful articles from Vitaliy N. Katsenelson </p>
		<!-- <form action="post" class="custom-form">
			<input type="text" placeholder="your name">
			<input type="email" placeholder="your email">
			<input type="submit" value="sing up" class="submit">
		</form> -->
		<div class="custom-form">
		<?php echo do_shortcode( '[mc4wp_form id="113"]' ); ?> 
		</div>
		
	</div>
</div>
</section>

<section class="presentation">
<div class="presentation-inner">
	<h2>Presentation from previous Conferences</h2>
	<div class="container" id="primary">
		<div class="row"  id="content" role="main">

		<?php
			$about_h_name = get_field('about_h_name');
			$about_h_text = get_field('about_h_text'); 
			$posts = get_posts( array(
				'numberposts' => 6,
				'category'    => 2,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'include'     => array(),
				'exclude'     => array(),
				'meta_key'    => '',
				'meta_value'  =>'',
				'post_type'   => 'post',
				'suppress_filters' => false, // подавление работы фильтров изменения SQL запроса
			) );  
			
			foreach( $posts as $post ){
				setup_postdata($post);
				?>
				<div class="col-md-4 col-sm-6">
					<a href="<?php the_field('presentation_pdf'); ?>"><div class="post-img" style="background-image: url('<?php the_field('presentation_img'); ?>')"></div></a>
				</div> 
				<?php
 
			}
			
			
		?>
		 
		</div>
		<a href="/presentations/" class="btn big-round-btn">Check out all presentations</a>
	</div>
</section>
<section class="slider-section clearfix" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_imgs/slider-section-bg.jpg');">
	<div class="text-block clearfix">
		<img src="<?php echo get_template_directory_uri(); ?>/_imgs/avatar.png" alt="avatar">
		<div class="description"> 
			<h3><?=$about_h_name;?></h3>
			<p><?=$about_h_text;?></p>
			<a href="/about/" class="btn white-btn">learn more</a>
		</div>
	</div>
	<?php include '_includes/block_photo.php';?>
	
</section>
<?php include '_includes/footer.php' ?>