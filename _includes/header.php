<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="/favicon.ico">
		<title>
		</title>
		<meta property="og:title" content="" />
		<meta property="og:description" content="" />
		<meta property="og:url" content="" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="" />
		<meta property="og:site_name" content="" /> 
		<?=wp_head()?>
	</head>
	<body>
		
		<header class="main-header">
			<div class="container-fluid">
				<div class="logo">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/_imgs/logo.png" alt="logo"></a>
				</div>
				<nav class="main-nav">
				<?php wp_nav_menu(array(
							'container'			=>	'ul',
							'container_class'	=>	'top-nav-menu',
							'menu_class'		=>	'top-nav-menu',
							'menu_id'			=>	'',
							'echo'				=>	true,
							'fallback_cb'		=>	'wp_page_menu',
							'before'			=>	'',
							'after'				=>	'',
							'link_before'		=>	'',
							'link_after'		=>	'',
							'items_wrap'		=>	'<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'				=>	0,
							'walker' 			=>	''

						));
						?> 
				</nav>
			</div>
			<div class="menu-button">
				<span></span>
			</div>
			<div class="pre-title">
				<h1><?php echo the_title();?></h1>
				<div class="clip-overlay" style="height: 152.4px;">
					<svg class="svg-wave" width="" height="" version="1.1" viewBox="0 0 100 10" preserveAspectRatio="none" xmlns="//www.w3.org/2000/svg">
					<path class="front-wave" d="M0,0 C30,6 80,4 100,0 L100,10 L0,10 Z" fill="#4f8abb"></path>
				</svg>
			</div>
		</div>
	</header>