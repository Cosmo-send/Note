<?
	session_start();
	require "config.php";
	date_default_timezone_set('Europe/Moscow');

	$today =        date("Y-m-d H:i:s");
	$your_avatar = trim(stripcslashes(htmlspecialchars(strtolower($_POST['your_avatar']))));
	$your_login =   trim(stripcslashes(htmlspecialchars(strtolower($_POST['your_login']))));
	$id_art =           trim(stripcslashes(htmlspecialchars(strtolower($_POST['id_art']))));
	$comm_text =                 trim(stripcslashes(htmlspecialchars($_POST['comm_text'])));

	$result_comm = mysqli_query($connection,"INSERT INTO comments (message_comment,author,date,articles_id,image) VALUES ('$comm_text','$your_login','$today','$id_art','$your_avatar')");
	
 	echo 0;
