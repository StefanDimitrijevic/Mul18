<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style>
	
.postit {
	margin: 10px auto;
	width: 200px;
	height: 200px;
	padding: 15px;
	box-shadow: 2px 3px 5px -3px black;
	border-bottom-right-radius: 130px 7px;
	/* transform: rotate(-3deg); */
	font-family: 'Indie Flower', cursive;		
}
	
	p {
		font-size: 10px;
	}
	
</style>
</head>

<body>
	
	<?php
	require_once('dbcon.php');
	$sql = 'SELECT postit.id, createdate, header, bodytext, author, cssclass FROM postit, color WHERE color_id=color.id';
	
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($pid, $createdate, $htext, $btext, $author, $cssclass);
	
	while($stmt->fetch()) { ?>
		<div class="<?=$cssclass?>">
		<form class="postit" style="background-color:<?= $cssclass; ?>;">
		<p><?=$createdate?></p>
		<h1><?=$htext?></h1>
		<p><?=$btext?></p>
		<p><?=$author?></p>
		</form>
		</div>
	
	<?php
	} 
	?>
	
</body>
</html>