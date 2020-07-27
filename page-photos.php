<?php include '_includes/header.php' ?>
<section class="photos">
	<div class="container">
		<div class="row" id="photos">
			<?php
				$per =get_field('photos_per_page');	
				$q=array(
					'posts_per_page' => $per,
					'category'    => 4,
					'post_type'   => 'post'
				);
				query_posts( $q );  
			?>
			<?php
			$i=0;
				while( have_posts() ){
					the_post();
					$ph = get_field('photos'); 
					?>
					<div class="col-md-4 col-sm-6">
						<a href="<?=wp_get_attachment_image_url($ph,'full')?>" class="photo-open"><?=wp_get_attachment_image($ph,'medium'); ?><img src="<?php echo get_template_directory_uri(); ?>/_imgs/eye-overlay.png" alt="overlay" class="eye"></a>
					</div>
					<?php
					 
				wp_reset_postdata();
				}
			?> 
		</div>
	</div> 
		<script>
		var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
		var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
		var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
		var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
		var qurl='<?=get_template_directory_uri()?>';
		</script>
		<div><a href="javascript:void(0)" id="true_loadmore" class="btn load-more">load more</a> </div>
	
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