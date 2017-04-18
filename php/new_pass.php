<?
//Скрипт обновления пароля
require "config.php";

$new_password =      trim(stripcslashes(htmlspecialchars($_POST['new_password'])));
$recovery =  trim(stripcslashes(htmlspecialchars(strtolower($_POST['recovery']))));

mysqli_query($connection, "UPDATE `users` SET `password` = '$new_password' WHERE `email` = '$recovery' ");
echo 1;