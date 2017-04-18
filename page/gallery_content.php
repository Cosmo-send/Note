	<div class="content">
		<div class="position">	
			<div id="papper">
				<?php
					$gallery = mysqli_query($connection, "SELECT * FROM `gallery`");
					while ($img = mysqli_fetch_assoc($gallery)) {
					?>	
					<div class="gallery">
						<img src="img/gallery/<?=$img['name'];?>" class="image">
					</div>

					<?php
				}
				?>
			</div>
		</div>
	</div>