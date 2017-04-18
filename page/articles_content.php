	<div class="content">
		<div class="position">	
			<div id="papper">
				
					<?php
					$articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC"); //сортировка в БД по возрастанию id (пока без лимита)

						while ($art = mysqli_fetch_assoc($articles)) {	//цикл для вывода статей
					?>		
					<!-- Для корректировки создан файл articles.css -->
					<a href="articles_id.php?id=<?=$art['id'];?>">		
					<div id="first_art" class="recent_art_cont"> <!-- 	Блок для картинки и текста 	-->
						<div class="img_for_art_cont"><img src="img/articles/<?php echo $art['image'];?>" width="250" height="200"></div>
						<div class="description_cont">
						<h3><?=$art['title'];?></h3>
						<p><?php echo mb_substr(strip_tags($art['text']), 0, 555, 'utf8').'...'?></p>		
						</div>
					</div>

					</a>
						<?php
						}
					?>




			</div>
		</div>
	</div>