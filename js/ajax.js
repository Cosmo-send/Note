$(document).ready(function(){
	$('#button_for_feedback').click(function(){
	// Фома обратной связи
		var error_user_email =0;
		var error_empty =0;

		var user_name =    $('#user_name').val();
		var user_email =   $('#user_email').val();
		var text_comment = $('#text_comment').val();

		if( user_name =="" || user_email =="" || text_comment ==""){
			var error_empty = 1;
			$('#error_recall').text("Все поля должны быть заполненными").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}
		if (/^[A-Za-z0-9!#$%&\'*+-/=?^_`{|}~]+@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)+[A-Za-z]$/.test(user_email) === false){
			var error_user_email = 1;
			$('#error_recall').text("Email должен быть корректным").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}


		if (!(error_empty == 1 || error_user_email == 1)){

			$.ajax({
			url: "php/action.php",
			type: "post", 
			dataType: "json", // тип передачи данных
			data: { 
				"user_name": 	user_name,
				"user_email": 	user_email,
				"text_comment": text_comment
			},
			success: function(data){
				if (data == 0) {
						$('#error_recall').text("Ваше сообщение успешно отправлено").removeClass('error').addClass('greenlite').show().delay(3500).fadeOut(500);
					}
				}
			});
		}
	});
	$('#registration').click(function(){

		var error_user = 0;
		var error_pass = 0;
		var error_mail = 0;
		var error_empty =0;
							//обнуляем ошибки

		var username =         $('#username').val();
		var userpassword = $('#userpassword').val();
		var useremail =       $('#useremail').val();
							//передаем заполненные поля

		if(/^[a-zA-Z1-9]+$/.test(username) === false){
			var error_user = 1;
			$('#error1').text("В логине должны быть только английские буквы без пробелов").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}
		if(username.length < 4 || username.length > 20){
			var error_user = 1;
			$('#error1').text("В логине должено быть от 4 до 20 символов'").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}
		if(parseInt(username.substr(0, 1))){
			var error_user = 1;
			$('#error1').text("Логин должен начинаться с буквы").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}


		if(userpassword.length < 4 || userpassword.length > 64){
			var error_pass = 1;
			$('#error1').text("Пароль должен быть не менее 4х символов").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}


		if (/^[A-Za-z0-9!#$%&\'*+-/=?^_`{|}~]+@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)+[A-Za-z]$/.test(useremail) === false){
			var error_mail = 1;
			$('#error1').text("Email должен быть корректным").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}


		if( username =="" || userpassword =="" || useremail ==""){
			var error_empty = 1;
			$('#error1').text("Все поля должны быть заполненными").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}
			if (!(error_user == 1 || error_pass == 1 || error_mail == 1 || error_empty == 1)){

			$.ajax({
				url: "php/register.php",
				type: "post", 
				data: { 
					"username": 	username,
					"userpassword": userpassword,
					"useremail":    useremail
				},
				success: function(data){
					if (data == 0) {
						$('#error').text("Вы успешно зарегистрировались").removeClass('error').addClass('greenlite').show().delay(3500).fadeOut(500);
						location.reload(true)
					}else if(data == 1){			
						$('#error').text("Что то пошло не так, попробуйте зарегистрироваться позже").removeClass('greenlite').addClass('error').show().delay(3500).fadeOut(500);
										
					}else if(data == 2){				
						$('#error').text("Пользователь с таким логином уже существует").removeClass('greenlite').addClass('error').show().delay(3500).fadeOut(500);
					
					}else if(data == 3){				
						$('#error').text("Пользователь с такой почтой уже существует").removeClass('greenlite').addClass('error').show().delay(3500).fadeOut(500);
					}
				}
			});
		}
	});

	$('#enter').click(function(){
		// Скрипт авторизации
		var login =       $('#login').val();
		var password = $('#password').val();

		var error_pass = 0;
		var error_login = 0;
		var error_empty =0;
							//обнуляем ошибки
		
		if(password.length < 4 || password.length > 64){
			var error_pass = 1;
			$('#error1').text("Пароль должен быть не менее 4х символов и не более 64х").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}

		if(/^[a-zA-Z1-9]+$/.test(login) === false){
			var error_login = 1;
			$('#error1').text("В логине должны быть только английские буквы без пробелов").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}
		if(login.length < 4 || login.length > 20){
			var error_login = 1;
			$('#error1').text("В логине должено быть от 4 до 20 символов'").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}
			
		if (login == "" || password == "") {
				var error_empty = 1;
				$('#error1').text("Все поля должны быть заполненными").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}
		if (!(error_pass == 1 || error_login == 1 || error_empty == 1)){

			$.ajax({
			url: "php/auth.php",
			type: "post", 
			data: { 
				"login": 	login,
				"password": password,
				},
				success: function(data){
					if (data == 0) {
						$('#error1').text("Вы успешно авторизовались").removeClass('error').addClass('greenlite').show().delay(3500).fadeOut(500);
							setTimeout(function() { location.reload(true) }, 1500);
					}else{
						$('#error1').text("Неверно введен логин или пароль").removeClass('greenlite').addClass('error').show().delay(3500).fadeOut(500);
					}
				},

			});
		}
	});

		
	$('#recovery_for_email').click(function(){	
		// Скрипт отправки секретного ключа на почту и базу
		var recovery =    $('#recovery_email').val();
		$.ajax({
		url: "php/recovery_pass.php",
		type: "post", 
		data: { 
			"recovery": recovery,
			},
			success: function(data){
					if (data == 1) {
						$('#error1').text("Этот Email не найден в базе данных").removeClass('greenlite').addClass('error').show().delay(3500).fadeOut(500);
					
					}else{
						$('#error1').text("Вам отправили письмо для восстановления пароля").removeClass('error').addClass('greenlite').show().delay(3500).fadeOut(500);
						$('#recovery_email').fadeOut(10);
						$('#recovery_for_email').fadeOut(10);
						$('#recovery_password').fadeIn(10);
						$('#recovery_for_password').fadeIn(10);
						$('#repeat_recovery').fadeIn(10);

					}
			},

		});
	
	});	


	$('#recovery_for_password').click(function(){	
		// Скрипт проверки секретного ключа
		var recovery = $('#recovery_email').val();
		var check = $('#recovery_password').val();
		$.ajax({
		url: "php/recovery_check.php",
		type: "post", 
		data: { 
			"check": check,
			"recovery": recovery,
			},
			success: function(data){
					if (data == 1) {
						$('#error1').text("код правильный").removeClass('error').addClass('greenlite').show().delay(3500).fadeOut(500);
						$('#recovery_password').fadeOut(10);
						$('#recovery_for_password').fadeOut(10);
						$('#repeat_recovery').fadeOut(10);
						$('#new_password').fadeIn(10);
						$('#new_for_password').fadeIn(10);

					
					}else{
						$('#error1').text("код введен неверно").removeClass('greenlite').addClass('error').show().delay(3500).fadeOut(500);
					}
			},

		});
	
	});

	$('#new_for_password').click(function(){	
		//Скрипт обновления пароля
		var new_password = $('#new_password').val();
		var recovery =   $('#recovery_email').val();
		if(new_password.length < 4 || new_password.length > 64){
			$('#error1').text("Пароль должен быть не менее 4х символов и не более 64х").removeClass('greenlite').addClass('error').show().delay(2500).fadeOut(500);
		}else{
			$.ajax({
			url: "php/new_pass.php",
			type: "post", 
			data: { 
				"new_password": new_password,
				"recovery": recovery,
				},
				success: function(data){
						if (data == 1) {
							$('#error1').text("Пароль успешно изменен").removeClass('error').addClass('greenlite').show().delay(3500).fadeOut(500);
								setTimeout(function() { location.reload(true) }, 1500);						
						}
				},
			});
		}
	});
	$('#button_comm').click(function(){	
		//Скрипт отправки комментов
		var your_avatar = $('.your_avatar_hidden').val();
		var your_login =   $('.your_login_hidden').val();
		var comm_text =            $('#comm_text').val();
		var id_art =      	   $('.id_art_hidden').val();
		
		if( comm_text ==""){
			$('#result_message').text("Введите сообщение").removeClass('greenlite').addClass('error').show().delay(3500).fadeOut(500);
		}else{
			$.ajax({
			url: "php/commets_handler.php",
			type: "post", 
			data: { 
				"your_avatar": your_avatar,
				"your_login":   your_login,
				"comm_text":     comm_text,
				"id_art":           id_art,

			},
			success: function(data){
				if (data == 0) {
			$('#result_message').text("Сообщение добавлено").removeClass('error').addClass('greenlite').show().delay(3500).fadeOut(500);
				setTimeout(function() { location.reload(true) }, 1500);
				}
			}
			});
		}

	});
	$('#save_choose').click(function(){	
		//Скрипт для аватара
		var your_ava = $('.main_sibling').attr('src');
		var num = (your_ava).replace(/\D+/g, "");
		var login = $('#session_user').val();
			$.ajax({
			url: "php/choose_avatar.php",
			type: "post", 
			data: { 
				"num":     num,
				"login": login,
			},
			success: function(data){
				if (data == 0) {
				 setTimeout(function() { location.reload(true) }, 500);
				}
			}
			});
	 });
	

});

