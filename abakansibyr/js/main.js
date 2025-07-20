 $(document).ready(function () { 
 	$.ajax({
 		url: 'scripts/verstka.php?load_news',
 		type: 'POST'
 	
 	})
 	.done(function(data) {
		 $('#news_container').html(data);
 	})

 });

 $('body').on('click', '#menu_about', function(event) {
	$.ajax({
		url: 'scripts/verstka.php?load_about',
		type: 'POST',
		success:
			function(data){
				$('#main_container').html(data);
			}
	})	
});

$('body').on('click', '#menu_computer', function(event) {
	$.ajax({
		url: 'scripts/verstka.php?load_computers',
		type: 'POST',
		success:
			function(data){
				$('#main_container').html(data);
			}
	})	
});


$('body').on('click', '#menu_index', function(event) {
	$.ajax({
		url: 'scripts/verstka.php?load_index',
		type: 'POST',
		success:
			function(data){
				$('#main_container').html(data);
			}
	})

	$.ajax({
		url: 'scripts/verstka.php?load_news',
		type: 'POST'
	
	})
	.done(function(data) {
		$('#news_container').html(data);
	})
	
});

$('body').on('click', '#menu_orgtechnical', function(event) {
	$.ajax({
		url: 'scripts/verstka.php?load_orgtechnical',
		type: 'POST',
		success:
			function(data){
				$('#main_container').html(data);
			}
	})	
});

$('body').on('click', '#menu_uslugi', function(event) {
	$.ajax({
		url: 'scripts/verstka.php?load_uslugi',
		type: 'POST',
		success:
			function(data){
				$('#main_container').html(data);
			}
	})	
});


$('body').on('click', '#menu_korz', function(event) {
	$.ajax({
		url: 'scripts/verstka.php?load_korz',
		type: 'POST',
		success:
			function(data){
				$('#main_container').html(data);
			}
	})	
});



$('body').on('click', '.btn_add_korz', function(event){
    var id =this.getAttribute('data-id');
    $.ajax({
		url: 'scripts/actions.php?add_korz',
		data: {'id_tovar':id},
        type: 'POST',
		success:
			function(data){
                if (data == 1)
                    alert("Успешно добавлено");
                else
				    alert(data);
			}
	})	
    
});

$('body').on('click', '#menu_vhod', function(event){
  $.ajax({
		url: 'scripts/verstka.php?load_vhod',
		type: 'POST',
		success:
			function(data){
				$('#main_container').html(data);
			}
	})	
});




$('body').on('click', '#reg', function(event){
    
  $.ajax({
		url: 'scripts/verstka.php?load_reg',
		type: 'POST',
		success:
			function(data){
				$('#main_container').html(data);
			}
	})	
    
});



$('body').on('click', '#btn_reg', function(event){
    var login = $('#login_reg').val();
    var pass  = $('#pass_reg').val();
    var name  = $('#name_reg').val();
    var mail = $('#mail_reg').val();
    
    if (login != "" && pass != "" && name != "" && mail != "")
    {
      $.ajax({
        url: 'scripts/actions.php?reg_user',
        type: 'POST',
        data : {'login':login, 'pass':pass, 'name':name, 'mail':mail},
        success:
            function(data){
                if (data == 1)
                {
                    alert("Успешно зарегистрирован");
                    $('#menu_vhod').click();
                }
                else
                    alert(data);
            }
      })	  
    }
    else
        alert("Заполните пустые поля");
});





$('body').on('click', '#btn_vhod', function(event){
    var login = $('#login_vhod').val();
    var pass  = $('#pass_vhod').val();
    
    $.ajax({
        url: 'scripts/actions.php?vhod_user',
        type: 'POST',
        data : {'login':login, 'pass':pass},
        success:
            function(data){
                if (data == 1){
                    location.reload();
                    return false;
                }
                else
                    alert(data);
            }
        })	 
});


$('body').on('click', '#menu_korz', function(event){
    $.ajax({
        url: 'scripts/verstka.php?load_korzina',
        type: 'POST',
        success:
            function(data){
                if (data == 1)
                    alert("Вы не авторизованы");
                else
                    $('#main_container').html(data);
            }
        })	
    
});


$('body').on('click', '#delet_tmp_korz', function(event){
    var id = this.getAttribute('name');
    $.ajax({
        url: 'scripts/actions.php?delete_from_korzina',
        type: 'POST',
        data: {'id' : id},
        success:
            function(data){
                $('#menu_korz').click();
            }
    })	
    
});


$('body').on('click', '#menu_exit', function(event){
     $.ajax({
        url: 'scripts/actions.php?user_exit',
        type: 'POST',
        success:
            function(data){
                location.reload();
                return false;
            }
        })
});

$('body').on('click', '#finish_order',  function(event){
     $.ajax({
        url: 'scripts/actions.php?finish_order',
        type: 'POST',
        success:
            function(data){
                $('#menu_korz').click();
            }
        })
    
    
    
});


$('body').on('click', '#menu_myorders', function(event){
    
    $.ajax({
        url: 'scripts/verstka.php?load_myorders',
        type: 'POST',
        success:
            function(data){
                $('#main_container').html(data);
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
                $('#main_container').html(data);
            }
    })	
    
});


