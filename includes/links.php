<?php
	require "php/config.php";

    session_start(); 
    $auth = 'Пользователь';
    $guest = 'Гостcь';
    if (isset($_SESSION['username'])){
            $result_auth = $auth;
        }else{
            $result_auth = $guest;
        }

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?=$config['title'];?></title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">   <!-- 	Иконка сайта 	 -->
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <link href="css/main/index.css" rel="stylesheet">
    <link href="css/main/auth.css" rel="stylesheet">
    <link href="css/main/header.css" rel="stylesheet">
    <link href="css/main/content.css" rel="stylesheet">
    <link href="css/main/footer.css" rel="stylesheet">
    <link href="css/main/comments.css" rel="stylesheet">
 	<!-- 	Подключаем стили для слайдера	 -->
    <link rel="stylesheet" href="css/slider/slick.css">
    <link rel="stylesheet" href="css/slider/slick-theme.css">
    <link rel="stylesheet" href="css/slider/slider.css">
    <!-- 	Подключаем скрипты для слайдера	   -->
    <script src="https://code.jquery.com/jquery-3.1.1.js" type="text/javascript" defer></script>
	<script src="js/slick.min.js" type="text/javascript" defer></script>
	<script src="js/slider.js" type="text/javascript" defer></script>
    <!--    Файлы подправки для различных страниц   -->
    <link rel="stylesheet" href="css/articles/articles.css">
    <link rel="stylesheet" href="css/articles/view.css">
    <link rel="stylesheet" href="css/gallery/content.css">
    <link rel="stylesheet" href="css/media/media.css">
    <link rel="stylesheet" href="css/rules/rule.css">
    <!--    Скрипт для галереи   -->
    <script src="js/gallery.js" type="text/javascript" defer></script>
    <!--    Скрипт для окна авторизации   -->
    <script src="js/js.js" type="text/javascript" defer></script>
    <!--    Скрипт для авторизации   -->
    <script src="js/ajax.js" type="text/javascript" defer></script>
    <!--    Скрипт для выбора аватара    -->
    <script src="js/choose_avatar.js" type="text/javascript" defer></script>

</head>