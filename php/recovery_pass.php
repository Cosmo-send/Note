<?php
// Скрипт отправки секретного ключа на почту и базу
require "config.php";
$error_email_rec  = 0;

$recovery = trim(stripcslashes(htmlspecialchars(strtolower($_POST['recovery']))));

if(mysqli_num_rows(mysqli_query($connection, "SELECT `id` FROM `users` WHERE `email`='$recovery'"))){
	$error_email_rec  = 1;
}

if ($error_email_rec == 1) {

	function random_str($num = 5 ){
		return substr(str_shuffle('0132465789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $num);
	}
	$code = random_str(5);

	/* тема/subject */
	$subject = "Секретный ключ";

	/* сообщение */
	$message = '
	<html>
	<head>
	 <title>Письмо</title>
	</head>
	<body>
		<h2>Cosmo-send</h2><p>Чтобы поменять пароль, введите этот код на сайте <b>'.$code.'</b></p>
	</body>
	</html>
	';

	/* Для отправки HTML-почты вы можете установить шапку Content-type. */
	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "From: Cosmo-send <Cosmo-send@yandex.ru>\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";


	/* и теперь отправим из */
	mail($recovery, $subject, $message, $headers);
	mysqli_query($connection, "UPDATE `users` SET `recovery_pass` = '$code' WHERE `email` = '$recovery' ");


}else{
	echo 1;
}


?>