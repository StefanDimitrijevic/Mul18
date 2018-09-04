<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
<?php
	
$header= filter_input(INPUT_POST, 'header') or die ('Missing header parameter');
$bodytext= filter_input(INPUT_POST, 'bodytext') or die ('Missing bodytext parameter');
$author= filter_input(INPUT_POST, 'author') or die ('Missing author parameter');		
$colorid= filter_input(INPUT_POST, 'colorid') or die ('Missing colorid parameter');	

	require_once('dbcon.php');
	
	$sql = 'INSERT INTO postit (header, bodytext, author, color_id) 
	VALUES (?, ?, ?, ?)';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('sssi', $header, $bodytext, $author, $colorid);
	$stmt->execute();
	
	echo 'Insertet '.$stmt->affected_rows.' new rows in the table';
	
	
?>
	<a href="postitboard.php">Click to see post-its!</a>
</body>
</html>