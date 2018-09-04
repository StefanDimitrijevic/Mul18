<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create Post-it</title>

<style>
body {
	margin: 0 auto;
	text-align: center;
}	
	
.postit {
	margin: 10px auto;
	width: 200px;
	height: 200px;
	background: linear-gradient(135deg, #E9E845, #EBEA95);
	padding: 15px;
	box-shadow: 2px 3px 5px -3px black;
	border-bottom-right-radius: 130px 7px;
	/* transform: rotate(-3deg); */
	font-family: 'Indie Flower', cursive;		
}
	
.head {
	display: block;
	background: transparent;
	width: 99%;
	font-family: 'Indie Flower', cursive;
}

.tArea1 {
	display: block;
	background: transparent;
	width: 99%;
	font-family: 'Indie Flower', cursive;	
}
	
.name{
	display: block;
	background: transparent;
	width: 99%;
	font-family: 'Indie Flower', cursive;
}
	
</style>
</head>

<body>
	<h1>Create new Postit</h1>
	
		<form class="postit" action="docreatepostit.php" method="post">
		<input class="head" type="text" name="header" placeholder="Title"><br>
		<textarea class="tArea1" type="text" name="bodytext" placeholder="Content here.."></textarea><br>
		<input class="name" type="text" name="author" placeholder="Author name"><br><br>
		
		Color:
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
		<button type="submit">Submit</button>
	</form>
</body>
</html>