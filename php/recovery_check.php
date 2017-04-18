<?
// Скрипт проверки секретного ключа 
require "config.php";

$recovery = trim(stripcslashes(htmlspecialchars(strtolower($_POST['recovery']))));
$check =       trim(stripcslashes(htmlspecialchars(strtolower($_POST['check']))));


if(mysqli_num_rows(mysqli_query($connection, "SELECT * FROM `users` WHERE `email`='$recovery' and `recovery_pass`='$check'"))){
echo 1;
}
