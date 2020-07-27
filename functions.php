<?php

function css_to_wp_head() {
     wp_enqueue_style( 'wp_head_style1', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700', array(), null );
     wp_enqueue_style( 'wp_head_style2', get_stylesheet_directory_uri() . '/_css/bootstrap.min.css', array(), null );
     wp_enqueue_style( 'wp_head_style3', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), null );
     wp_enqueue_style( 'wp_head_style4', get_stylesheet_directory_uri() . '/_css/fancybox.css', array(), null );
     wp_enqueue_style( 'wp_head_style5', get_stylesheet_directory_uri() . '/_css/styles.css?v='.rand(), array(), null );
     wp_enqueue_style( 'wp_head_style6', get_stylesheet_directory_uri() . '/_css/responsive.css', array(), null ); 
}
 
add_action( 'wp_enqueue_scripts', 'css_to_wp_head' );

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function true_loadmore_scripts() {
	wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
 	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/_js/loadmore.js?v=s', array('jquery') );
}
 
add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

function true_load_posts(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
 
	// обычно лучше использовать WP_Query, но не здесь
    query_posts( $args );
     
	// если посты есть
	if( have_posts()) {
        // запускаем цикл
        $art=[];
		while( have_posts()){
            the_post();
            $ph = get_field('photos'); 
             
            $art[]=array('thumb_img'=>wp_get_attachment_image($ph,'medium'),'full'=>wp_get_attachment_image_url($ph,'full'));
            
            //get_template_part( 'template-parts/post/content', get_post_format() );
 
        }
        die(json_encode($art));
 
    } 
	die();
}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');