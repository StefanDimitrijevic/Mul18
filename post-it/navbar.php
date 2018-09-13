<nav>
	<ul>	
			
			<li>
				<?php
					if (isset($_SESSION['users_id'])){ ?>	
						
				<?php } else { ?>
						<a href="index.php">Sign up</a>
				<?php } ?>
			</li>
			
			
			<li class="right">
				<?php
					if (isset($_SESSION['users_id'])) { ?>
						<a>Logged in as <?=$_SESSION['uname']?></a>
					<?php } else {} ?>
			</li>
		
		
			<li style="float:"right">	
				<?php
					if (isset($_SESSION['users_id'])){ ?>	
						<a href="logout.php" name="cmd" value="logout">Logout</a>
				<?php } else { ?>
						<a href="index.php">Login</a>
				<?php } ?>
				
			</li>
		</ul>
	</nav>