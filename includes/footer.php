	<div class="footer">
	<div id="up_decor"><h3 class="logo_up_decor">Cosmo-send</h3></div>   <!--  Объект декорации  -->
		<div class="position">	
			<div id="conten_footer" class="inborderpage">
				<div id="recents_block">
					<h2>Последние статьи:</h2>
					<div id="recent_block">
					<span id="all_view"><a href="articles.php">Показать всё</a></span>
					<!-- 	БЛОК вывода последних статей	 -->
					<?php
					$articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 2");

						while ($art = mysqli_fetch_assoc($articles)) {	
					?>		
					<a href="articles_id.php?id=<?=$art['id'];?>">			
					<div id="first_art" class="recent_art"> <!-- 	Блок для картинки и текста 	-->
						<div class="img_for_art"><img src="img/articles/<?php echo $art['image'];?>" width="200" height="156"></div>
						<div class="description">
						<h4><?=$art['title'];?></h4>
						<p><?php echo mb_substr(strip_tags($art['text']), 0, 220, 'utf8').'...'?></p>		
						</div>
					</div>

					</a>
						<?php
						}
					?>
 				</div>
 				</div>
				<div id="contact">
					<h2>Напишите нам</h2>	
					<?if ($result_auth == $auth){
					
					echo '<p><input id="user_name" type="text" name="name" value="'.$_SESSION ['username'].'">Ваш логин</p>
					<p><input id="user_email" type="text" name="email" value="'.$_SESSION ['email'].'"> Ваш email</p>';
					
				}elseif ($result_auth == $guest){
					echo '<p><input id="user_name" type="text" name="name">Ваш логин</p>
					<p><input id="user_email" type="text" name="email"> Ваш email</p>';
				}
			?>
					<textarea id="text_comment" placeholder="Ваше сообщение" maxlength="1000" cols="29" rows="6" name="message"></textarea>
					<button id="button_for_feedback">Отправить</button>
					<span id="error_recall" class=""></span>
				</div>
			</div>
		</div>
		<div id="bottom">  <!-- 	Самая нижняя часть декорации 	-->
				<div id="about" class="inborderpage">	
					<p>Copyright © 2017, Все права защищены.</p>
				</div>
				<div id="strips">   <!-- 	Объект декорации	 -->
					<div class="strip"></div>
					<div class="strip"></div>	
				</div>
		</div>
	</div>