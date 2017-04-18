<?php
    include "includes/links.php";
?>

<body>
<div class="wrapper">


<!-- 	Блок с линками, шапкой и слайдером -->
<?php
	include "includes/header.php";
?>
<!-- ===================================== -->
<!-- 	Блок с основным контентом 	-->
	<div class="content">
		<div class="position">	
			<div id="papper">
				<?php
					$articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = " .(int) $_GET['id']); //сортировка в БД по id (int для безопасности)

					if (mysqli_num_rows($articles) <=0) {
						?>
							<h1 style="color: #222;">Запрашиваемая вами статья не существует!</h1>
						<?php
					}else{
						$art = mysqli_fetch_assoc($articles);
						mysqli_query($connection,  "UPDATE `articles` SET `views` = `views` + 1 WHERE `id` = ".(int) $_GET['id']);

						?>
						<!-- Для корректировки создан файл view.css -->
						<div id="first_art" class="recent_art_view"> <!-- 	Блок для картинки и текста 	-->
							<div class="img_for_art_view"><img class="image_article" src="img/articles/<?php echo $art['image'];?>"></div>
							<div class="description_view">
								<h3><?=$art['title'];?></h3>
								<p><?=$art['text'];?></p>	
								<div class="pub_and_view">
									<h3>Дата публикации: <?=$art['pubdate']?></h3>	
									<p>Количество просмотров : <?=$art['views'];?></p>
								</div>
							</div>
						</div>
					<?php
					}
				?>
			</div>
	
<!-- ===================================== -->
<!-- 	Блок с комментами 	-->
<?php
	include "includes/comments.php";
?>
<!-- ===================================== -->
		</div>
	</div>
<!-- ===================================== -->
<!-- 	Блок с футером 	-->
<?php
	include "includes/footer.php";
?>
<!-- ===================================== -->
</div>
</body>
</html>