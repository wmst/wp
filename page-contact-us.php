<?php include '_includes/header.php' ?>
<section class="contact-us">
	<div id="map"></div> 
	<script>
		function initMap() { 
			var element = document.getElementById('map');
			var options = {
				zoom: 17,
				center: { lat: <?=get_field('map_lat')?>, lng: <?=get_field('map_lon')?> }
			};

			var myMap = new google.maps.Map(element, options);
			var marker = new google.maps.Marker({
				position: { lat: <?=the_field('map_lat')?>, lng: <?=get_field('map_lon')?> },
				icon: "<?=get_template_directory_uri()?>/_imgs/marker.png",
				map: myMap
			});
		}; 
	</script>
	<div class="form-wrapper clearfix">
		<div class="col-md-6">
			<div class="row">
				<div class="form-container">
					<h3>Ask a Question</h3>
					<!-- <form action="post">
						<input type="text" placeholder="Your Name">
						<input type="text" placeholder="Your Email">
						<input type="text" placeholder="Subject">
						<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
						<input type="submit" value="send" class="submit">
					</form> --> 
					<?php echo do_shortcode( '[wpforms id="112" title="false" description="false"]' ); ?>

				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="address-container">
				<h3>Contact Information</h3>
				<p>Address: <strong><?=get_field('address');?></strong></p>
				<p>Email: <a href="mailto:<?=get_field('email');?>"><?=get_field('email');?></a></p>
			</div>
		</div>
	</div>
</section>
<section class="slider-section clearfix" style="background-image: url('<?=get_template_directory_uri();?>/_imgs/slider-section-bg.jpg');">
<?php include '_includes/block_photo.php';?>
</section>
<?php include '_includes/footer.php' ?>