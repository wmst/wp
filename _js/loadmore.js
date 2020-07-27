jQuery(function($){
	$('#true_loadmore').click(function(){
		$(this).text('Loading...'); 
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
                $('#true_loadmore').text('load more');
				if( data ) {   
                    data=JSON.parse(data);
                    current_page++; 
                    $.each(data,function(i,v){
                        if(v.thumb_img){
                            $('#photos').append('<div class="col-md-4 col-sm-6"><a href="'+v.full+'" class="photo-open">'+v.thumb_img+'<img src="'+qurl+'/_imgs/eye-overlay.png" alt="overlay" class="eye"></a></div>');
                        }else{
                            $("#true_loadmore").remove();
                        }
                    }); 
				} else {
					$('#true_loadmore').remove(); 
				}
			}
		});
	});
});