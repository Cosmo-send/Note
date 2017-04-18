	<div class="content">
		<div class="position">	
			<div id="papper">
			<?php
			$rules = mysqli_query($connection, "SELECT * FROM `rules` ");
						$rule = mysqli_fetch_assoc($rules);
			?>
				<div class="text_li">
					<?php
						echo $rule['rule'];
					?>	
				</div>
			</div>
		</div>
	</div>