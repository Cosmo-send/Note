<?  
require "config.php";
session_start();
	$login =    trim(stripcslashes(htmlspecialchars(strtolower($_POST['login']))));
	$password =          trim(stripcslashes(htmlspecialchars($_POST['password'])));
								//передаем заполненные поля

	$result = mysqli_query($connection,"SELECT * FROM `users` WHERE `username` = '$login' AND BINARY `password` = '$password'");
	$rows = mysqli_fetch_assoc($result);

	if ($result->num_rows == 1) {
		$_SESSION ['username'] = $rows['username'];
		$_SESSION ['email'] =       $rows['email'];
		$_SESSION ['password'] = $rows['password'];
		$_SESSION ['image'] =       $rows['image'];
		echo 0;					//подключение успешно
	}else{
		echo 1;					//результат ошибки
	}