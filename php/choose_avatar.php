<?
    session_start(); 
	require "config.php";

	$num =     trim(stripcslashes(htmlspecialchars(strtolower($_POST['num']))));
	$login = trim(stripcslashes(htmlspecialchars(strtolower($_POST['login']))));

	$result_choose_ava = mysqli_query($connection,"UPDATE `users` SET `image` = '$num' WHERE `username` = '$login' ");
	$result_comm_ava = mysqli_query($connection,"UPDATE comments SET `image` = '$num' WHERE `author` = '$login'");
	$_SESSION['image'] = $num;
	echo 0;