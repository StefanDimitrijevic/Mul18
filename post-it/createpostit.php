<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create Post-it</title>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

<style>
body {
	margin: 0 auto;
	text-align: center;
}	
	
.postit {
	margin: 10px auto;
	width: 300px;
	height: 300px;
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
	width: 200px;
	font-family: 'Indie Flower', cursive;
	border: none;
	border-bottom: 2px solid lightgrey;
	font-size: 2em;
	color: black;
}
	
/* Dette webkit gør at placeholder fonten i overskriften bliver vist i sort i Chrome/Safari samt Opera */
::-webkit-input-placeholder {
	color: black;
}

.tArea1 {
	border: none;
	width: 99%;
	height: 65%;
	font-family: 'Indie Flower', cursive;
	font-size: 1em;
	background: transparent;
	resize: none;
}
	
.name{
	display: block;
	background: transparent;
	width: 99%;
	font-family: 'Indie Flower', cursive;
}
	
select {
	border: none;
}
	
nav {
	color: black;
	display: flex;
	align-content: flex-end;
}

ul {
	list-style: none;
	
}

li {
	display: inline-block;
}

li a {
	text-decoration: none;
}

li a:hover {
	color: #c1c1c1;
}
	
</style>
</head>

<body>
	
<?php include('navbar.php'); ?>
	<h1>Create new Postit</h1>
	
	<form class="postit" action="docreatepostit.php" method="post">
	<input class="head" type="text" name="header" placeholder="Title"><br>
	<textarea class="tArea1" type="text" name="bodytext" placeholder="Content here.."></textarea><br>
		
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
	<button type="submit">Submit</button>
	</form>
	
</body>
</html>