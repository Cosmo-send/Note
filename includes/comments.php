<?
	$comments = mysqli_query($connection, "SELECT * FROM `comments` WHERE `articles_id` = " . (int) $art['id'] . " ORDER BY `id` DESC");
?>
<div class="comments">
<div class="comments_area">Комментарии</div>
	<div class="your_message">
	<?if ($result_auth == $auth){?>
		<h4 id="your_login" class="your_login"><?=ucfirst($_SESSION ['username'])?></h4>
		<img class="your_avatar" src="img/avatar/<?=$_SESSION ['image']?>.png">
		<div class="text_area"><textarea id="comm_text" placeholder="Ваше сообщение" maxlength="1000" cols="29" rows="6" name="message"></textarea></div>
		<div  id="result_message" ><h3 class=""></h3></div>
		<div class="for_button"><button id="button_comm">Отправить</button></div>
		<?}elseif ($result_auth == $guest){?>
			<h2 class="comments_area">Зарегистрируйтесь чтобы оставлять комментарии</h2>			
		<?}?>
	</div>


	<?
	if( mysqli_num_rows($comments) <= 0 ) {
		echo "<h3>Нет Комментариев</h3>";
	}
    while ($comment = mysqli_fetch_assoc($comments)) {	?>
		<div class="other_message">
		<h5 class="other_login"><?=ucfirst($comment['author']);?></h5>
		<img class="other_avatar" src="img/avatar/<?=$comment['image'];?>.png">
		<p><?= $comment['message_comment'];?></p>
	</div>
	<span><p class="time_add"><?=$comment['date'];?></p></span>	
	<?
		}	
	?>

						<!-- 	Спрятанные классы для передачи в БД-->
	<input type="text" name="id_art" class="id_art_hidden" value="<?=$art['id'];?>">
	<input type="text" name="your_login" class="your_login_hidden" value="<?=$_SESSION ['username']?>">
	<input type="text" name="your_avatar" class="your_avatar_hidden" value="<?=$_SESSION ['image']?>">
</div>