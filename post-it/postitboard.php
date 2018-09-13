<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="boardstyle.css">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>

<body>
	
	<div class="wrapper">
	
	<?php include('navbar.php'); ?>
	
	 <h1>POST IT WALL</h1>
	
	<div class="createP">
	<form class="postitC" action="docreatepostit.php" method="post">
	<input class="head" type="text" name="header" placeholder="Enter title here"><br>
	<textarea class="tArea1" type="text" name="bodytext" placeholder="Enter content here.."></textarea><br>
		
	Pick a color:
	<select name="colorid" required>
		
	<?php
			require_once('dbcon.php');
			$sql = 'SELECT id, colorname FROM color';
			$stmt = $link->prepare($sql);
			$stmt->execute();
			$stmt->bind_result($cid, $cnam);
			
			while($stmt->fetch()){
				echo '<option value="'.$cid.'">'.$cnam.'</option>'.PHP_EOL;
			}
			
		?>		
			
	</select><br><br>
	<?php
	if (isset($_SESSION['users_id'])) { ?>
	<button type="submit">Create Post-it</button>
	<?php } else { ?> 
		
	<?php } ?>
	</form>
	</div>
	
	<div class="container">
	<?php
	require_once('dbcon.php');
	$sql = 'SELECT postit.id AS pid, date(createdate), header, bodytext, users_id AS uid, username, cssclass 
	FROM users, postit, color
	WHERE users_id = users.id AND color_id = color.id';
	
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($pid, $createdate, $htext, $btext, $uid, $username, $cssclass);
	
	while($stmt->fetch()) { ?>
		
		<div class="<?=$cssclass?> postit" >
		
		<?php
		if (isset($_SESSION['users_id']) AND $_SESSION['users_id'] == $uid OR $_SESSION['users_id'] === 1){ ?>	
			<form action="deletepostit.php" method="post">	
			<input type="hidden" name="pid" value="<?=$pid?>">
			<input class="img" type="image" src="trash.png" alt="Delete">
			</form>
		<?php } else { ?>

		<?php } ?>

		<time><?=$createdate?></time>
		<h2><?=$htext?></h2>
		<p class="tbody"><?=$btext?></p>
		<p class="auth"><?=$username?></p>
		</div>
		
	
	<?php
	} 
	?>

	</div>
	</div>
	
</body>
</html>