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

	 <h1>POST IT WALL</h1>
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
			if(isset($_SESSION['users_id']))
			?>
		<form action="deletepostit.php" method="post">	
			<input type="hidden" name="pid" value="<?=$pid?>">
			<input type="image" src="trash-copy.png" alt="Delete">
		</form>
		<time><?=$createdate?></time>
		<h2><?=$htext?></h2>
		<p class="tbody"><?=$btext?></p>
		<p class="auth"><?=$username?></p>
		</div>
		
	
	<?php
	} 
	?>

	</div>
	
	<a href="createpostit.php">Add Post-it</a><br>
	
	<form action="logout.php" method="post">
	<button type="submit">Logout</button>
	</form> 
	
	<?php
	echo '(Logged in as ' .$_SESSION['users_id'].')';
	?>
</body>
</html>