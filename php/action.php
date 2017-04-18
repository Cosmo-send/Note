<?

	$user_name =          trim(stripcslashes(htmlspecialchars(strtolower($_POST['user_name']))));
	$user_email =        trim(stripcslashes(htmlspecialchars(strtolower($_POST['user_email']))));
	$text_comment =    trim(stripcslashes(htmlspecialchars(strtolower($_POST['text_comment']))));
	/* получатели */
	$to= "<Cosmo-send@yandex.ru>";


	/* тема/subject */
	$subject = "Письмо обратной связи";

	/* сообщение */
	$message = '
	<html>
	<head>
	 <title>Письмо</title>
	</head>
	<body>
		<h3>'.$user_name.'</h3>
		<h3>'.$user_email.'</h3>
		<p>'.$text_comment.'</p>

	</body>
	</html>
	';

	/* Для отправки HTML-почты вы можете установить шапку Content-type. */
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";


	/* и теперь отправим из */
	mail($to, $subject, $message, $headers);
	echo 0;