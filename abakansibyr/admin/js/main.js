

$('body').on('click', '#menu_tovar', function(event) {
	$.ajax({
		url: 'scripts/verstka.php?load_tovar',
		type: 'POST',
		success:
			function(data){
				$('#mein_container').html(data);
			}
	})	
});


$('body').on('click', '#menu_status', function(event) {
	$.ajax({
		url: 'scripts/verstka.php?load_status',
		type: 'GET',
		success:
			function(data){
				$('#mein_container').html(data);
			}
	})	
});

$('body').on('click', '#menu_user', function(event) {
	$.ajax({
		url: 'scripts/verstka.php?load_user',
		type: 'POST',
		success:
			function(data){
				$('#mein_container').html(data);
			}
	})	
});

$('body').on('click', '#menu_news', function(event) {
	$.ajax({
		url: 'scripts/verstka.php?load_news',
		type: 'POST',
		success:
			function(data){
				$('#mein_container').html(data);
			}
	})	
});


$('body').on('click', '#btn_search_login', function (event){
    
   var login = $('#inpt_search_login').val();
   $.ajax({
		url: 'scripts/verstka.php?load_user_login',
		type: 'POST',
        data:{'login':login},
		success:
			function(data){
				$('#pnkt_menu_container').html(data);
			}
	})
});


$('body').on('click', '#change_pass_btn', function(event){
   var id = $(this).attr('name');
	$.ajax({
		url: 'scripts/verstka.php?change_pass_user',
		type: 'POST',
        data:{'id':id},
		success:
			function(data){
				$('#mein_container').append(data);
			}
	})	   
});


$('body').on('click', '#change_pass_btn_confirm', function(event){
    var pass = $('#confir_pass_change_inpt').val();
    var id = $(this).attr('name');
   $.ajax({
		url: 'scripts/actions.php?change_pass',
		type: 'POST',
        data:{'pass':pass, 'id': id},
		success:
			function(data){
                alert('Успешно изменено');
				$('#menu_user').click();
			}
	})
    
});


$('body').on('click', '#delete_news', function(event){
    var id = $(this).attr('name');
   $.ajax({
		url: 'scripts/actions.php?delete_news',
		type: 'POST',
        data:{'id': id},
		success:
			function(data){
				$('#menu_news').click();
			}
	})    
});


$('body').on('click', '#add_news', function(event){
    $.ajax({
		url: 'scripts/verstka.php?add_news',
		type: 'POST',
		success:
			function(data){
				$('#mein_container').html(data);
			}
	})	   
});

//


$('body').on('click', '#btn_add_news', function(event){
    var text = $('#inpt_add_news').val();
   $.ajax({
		url: 'scripts/actions.php?add_news_conf',
		type: 'POST',
        data:{'text':text},
		success:
			function(data){
                alert('Успешно добавлено');
				$('#menu_news').click();
			}
	})
    
});

$('body').on('click', '#change_news', function(event){
    var id = $(this).attr('name');
    $.ajax({
		url: 'scripts/verstka.php?change_news',
		type: 'POST',
        data:{'id':id},
		success:
			function(data){
				$('#mein_container').html(data);
			}
	})	   
});


$('body').on('click', '#btn_update_news', function(event){
    var text = $('#inpt_update_news').val();
    var id= $(this).attr('name');
   $.ajax({
		url: 'scripts/actions.php?update_news_conf',
		type: 'POST',
        data:{'text':text, 'id':id},
		success:
			function(data){
                alert('Успешно изменено');
				$('#menu_news').click();
			}
	})
    
});

$('body').on('change', '#select_status', function(event){
   var status = $(this).val();
    var id = $(this).attr('name');
   $.ajax({
    url: 'scripts/actions.php?update_status_order',
    type: 'POST',
    data:{'status':status, 'id':id},
    success:
        function(data){
      
        }
	})
});





$('body').on('click', '#orders_about', function(event){
    
    var id = this.getAttribute('name');
    $.ajax({
        url: 'scripts/verstka.php?about_order',
        type: 'POST',
        data: {'id' : id},
        success:
            function(data){
                $('#mein_container').html(data);
            }
    })	
    
});