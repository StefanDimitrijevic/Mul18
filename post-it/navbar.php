<nav>
	<ul>
		<li><a href="postitboard.php">Post-it Board</a></li>	
			
			<li>
				<?php
					if (isset($_SESSION['users_id'])){ ?>	
						<a href="createpostit.php">Create Post-it</a>
				<?php } else { ?>

				<?php } ?>
				
				</li>
			
			<li>
				<?php
					if (isset($_SESSION['users_id'])){ ?>	
						
				<?php } else { ?>
						<a href="index.php">Sign up</a>
				<?php } ?>
				</li>
			
			<li>	
				<?php
					if (isset($_SESSION['users_id'])){ ?>	
						<a href="logout.php" name="cmd" value="logout">Logout</a>
				<?php } else { ?>
						<a href="index.php">Login</a>
				<?php } ?>
				
		</li>
		</ul>
	</nav>