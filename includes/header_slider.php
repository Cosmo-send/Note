	<div class="header">









<div id="hover"></div>
<div id="overlay_auth">    <!--  Блок авторизации  -->
	<h2 id="close_auth_form">X</h2>
	<!--   Форма авторизации   -->
		<div class="auth">
	        <div id= "recovery_pass"><p id="recovery_pass_button">Забыли пароль?</p></div>
	       
			<input id="login" type="text" placeholder="Логин:"></br>

			<input id="password" type="password" placeholder="Пароль:"></br>

			<button id="enter">Войти</button>
  
			<input id="register" type="button" value="Зарегистрироваться">
		</div>
		<span id="error1" class=""></span>
</div>

<div id="overlay_reg">    <!--  Блок регистрации  -->
	<h2 class="close_form">X</h2>
        <input id="username" class="over_reg" type='text' placeholder="Логин:">

        <input id="userpassword" class="over_reg" type='password' placeholder="Пароль:">

        <input id="useremail" class="over_reg" type='text' placeholder="Email:">
        
        <button id="registration">Зарегистрироваться</button> 		
	<span id="error" class=""></span>

</div>



<div id="overlay_recovery">    <!--  Блок восстановления пароля  -->
	<h2 class="close_form">X</h2>

    <input id="recovery_email" class="over_recovery" type="Email" placeholder="Email при регистрации:">
    <input id="recovery_password" class="over_recovery" type="text" placeholder="Введите полученный код">
    <input id="new_password" class="over_recovery" type="password" placeholder="Введите новый пароль">
	<p id="repeat_recovery">Отправить новый код</p>
	<button id="recovery_for_email">Восстановить</button>
	<button id="recovery_for_password">Проверить код</button>
	<button id="new_for_password">Изменить пароль</button>
</div>	
<div id="overlay_setting">
	<h2 id="close_sitting_form">X</h2>
	<div class="choose_avatar">
		<div class="choose_you_ava"><p>Ваш аватар</p></div>
		<div class="choose_ava"><p>Выберите себе аватар</p></div>
	</div>
	<div class="main_avatar">
		<img class="main_sibling" src="img/avatar/<?=$_SESSION['image']?>.png"/>
	</div>
	<div class="sibling">
		<img class="mini_siblings" src="img/avatar/1.png"/>
		<img class="mini_siblings" src="img/avatar/2.png"/>
		<img class="mini_siblings" src="img/avatar/3.png"/>
		<img class="mini_siblings" src="img/avatar/4.png"/>
		<img class="mini_siblings" src="img/avatar/5.png"/>
		<img class="mini_siblings" src="img/avatar/6.png"/>
	</div>
		<button id="save_choose">Сохранить насторйки</button>
</div>


<?php
if ($result_auth == $auth){
	echo '<span><button id="logout" onClick=\'location.href = "php/logout.php"\'>Выйти</button></span>';
}elseif ($result_auth == $guest){
	echo '<input id="button_authorization" type="button" name="button_authorization" value="регистрация/авторизация">';
}

?>


<input id="button_feedback" type="button" name="button_feedback" value="Обратная связь" />

								<!-- Скрипт проверки на авторизацию-->

		<div class="position">	
			<?if ($result_auth == $auth){
					$uname = "Добро пожаловать: ".ucfirst($_SESSION ['username']);
					$setting = '<span id = "setting">&#9776;Настройки</span>';
					echo '<div class="name_and_setting">'.$uname.$setting.'</div>';					
				}elseif ($result_auth == $guest){
					$nots = '<div class = "name_and_setting">Здравствуй гость</div>';
					echo $nots;
				}
			?>

			<!-- Скрытая сторка -->
			<input type="tetx" name="session_user" id="session_user" class="your_login_hidden" value="<?=ucfirst($_SESSION ['username']);?>">  
			<!-- ============== -->


			<h1 class="logo"><?=$config['title'];?></h1> <!-- 	Вывод титульника 	-->
			<nav id="navigator">
				<?php
					$categories = mysqli_query($connection, "SELECT * FROM `articles_categories`");
					while ( ($cat = mysqli_fetch_assoc($categories)) ) {
						?>
							<a href="<?=$cat['page'].'.php';?>"><?=$cat['title'];?></a>
					<?php
					}
				?>
			</nav>

			<section class="variable slider">
		    <div>
			    <a href="gallery.php"><img src="img/slider/gallery.png"></a>
			    <div class="desc">
			    	<h3>Галерея картинок</h3>
		    	</div>
		    </div>
		    <div>
		    	<a href="articles.php"><img src="img/slider/arcticles.png"></a>
		    	<div class="desc">
		    		<h3>Статьи</h3>
	        	</div>
		    </div>
		    <div>
		    	<a href="rules.php"><img src="img/slider/rules.png"></a>
		    	<div class="desc">
		    		<h3>Правила</h3>
		    	</div>
		    </div>
		    <div>
		    	<a href="media.php"><img src="img/slider/media.png"></a>
		    	<div class="desc">
		    		<h3>Медиа</h3>
		    	</div>
		    </div>
	   		<div>
			    <a href="resources.php"><img src="img/slider/resurses.png"></a>
			    <div class="desc">
				    <h3>Интересные ресурсы</h3>
		    	</div>
		    </div>
	    </section>

		</div>
	</div>