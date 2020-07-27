<?php include '_includes/header.php' ?>
<section class="presentation-section">
		<?php   
			$year = preg_replace("/[^0-9]/", '', $_SERVER['REQUEST_URI']);
			$posts_count = get_posts( array(
				'numberposts' => -1,
				'category'    => 2, 
			));
			$posts = get_posts( array(
				'numberposts' => -1,
				'category'    => 2,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'include'     => array(),
				'exclude'     => array(),
				'meta_key'    => '',
				'meta_value'  =>'',
				'post_type'   => 'post',
				'meta_query'	=> array( 
					array(
						'key'		=> 'presentation_date',
						'compare'	=> 'LIKE',
						'value'		=> $year,
					),
				), 
				'suppress_filters' => false, // подавление работы фильтров изменения SQL запроса
			) );  
			
		?>
	<div class="filter">
		<ul>
			<li><a href="/presentations/">all</a></li>
			<?
			$y=[];
			foreach( $posts_count as $post ){
				setup_postdata($post);
				$dt=date("Y",strtotime(get_field('presentation_date')));
				if(in_array($dt,$y)==false){
					$y[]=$dt;
					?>
					<li><a href="/presentations/<?=$dt;?>/" class="current" ><?=$dt;?> </a></li>
					<?php
				}
			}
			?> 
		</ul>
	</div>
		<div class="presentation-inner">
		<div class="container">
			<div class="row">
				<?php
				foreach( $posts as $post ){
					setup_postdata($post);
					?>
					<div class="col-md-4">
						<a href="<?php the_field('presentation_pdf'); ?>"><div class="post-img" style="background-image: url('<?php the_field('presentation_img'); ?>')"></div></a>
					</div>
					<?php
				}
				?> 
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