	<div class="content">
		<div class="position">	
			<div id="papper">
			<?php
				$resurses = mysqli_query($connection, "SELECT * FROM `resources`");
					while ( ($res = mysqli_fetch_assoc($resurses)) ) {?>
					<h3><a style="color: #005B9C;" href="<?=$res['link'];?>"><?=$res['link'];?></a></h3>
					<p><?=$res['title'];?></p>
					<img src="img/resources/<?=$res['img'];?>">
				<?php }
			?>
			</div>
		</div>
	</div>