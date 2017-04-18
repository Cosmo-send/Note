<?
require "config.php";
	date_default_timezone_set('Europe/Moscow');

	$error_user  = 0;
	$error_email = 0;
							//обнуление ошибок
	$confirm = 0;
							//проверка на успешную запись
	$today =        date("Y-m-d H:i:s");
	$username =     trim(stripcslashes(htmlspecialchars(strtolower($_POST['username']))));
	$userpassword = trim(stripcslashes(htmlspecialchars($_POST['userpassword'])));
	$useremail =    trim(stripcslashes(htmlspecialchars(strtolower($_POST['useremail']))));


	if(mysqli_num_rows(mysqli_query($connection, "SELECT `id` FROM `users` WHERE `username`='$username'"))){
		$error_user  = 1;
	}
	elseif(mysqli_num_rows(mysqli_query($connection, "SELECT `id` FROM `users` WHERE `email`='$useremail'"))){
		$error_email  = 1;
	}else{
		$result = mysqli_query($connection,"INSERT INTO users (username,password,email,date,image) VALUES ('$username','$userpassword','$useremail','$today','unknown')");
		$confirm = 1;
	}

	if ($error_email == 1) {
		echo 3; 	//Сообщение "Пользователь с такой почтой уже существует"
	}elseif ($error_user == 1){
		echo 2;  	//Сообщение "Пользователь с таким логином уже существует"
	}elseif ($confirm == 0){
		echo 1; 	//Ошибка записи в БД
	}elseif ($confirm == 1){
		echo 0; 	////Сообщение "Вы успешно зарегистрировались"
	}
