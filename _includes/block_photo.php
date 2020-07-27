<div class="slider-block">
		<h2>Some Photos from Previous Conferences</h2>
		<div class="slider-wrapper">
			<div class="photo-slider clearfix">
				<?php
					$per =get_field('photos_per_page');	
					$q=array(
						'posts_per_page' => 20,
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
						<a href="<?=wp_get_attachment_image_url($ph,'full')?>" target="_blank" class="slick-slide" style="background-image: url('<?=wp_get_attachment_image_url($ph,'medium')?>');"></a>
						 
						<?php
						
					wp_reset_postdata();
					}
				?>  
			</div>
		</div> 
		<div class="copyright">valuexvail &#169; 2017</div>
	</div>