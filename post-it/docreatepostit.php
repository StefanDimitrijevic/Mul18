<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
<?php
	
$header 	= filter_input(INPUT_POST, 'header') or die ('Missing header');
$bodytext 	= filter_input(INPUT_POST, 'bodytext') or die ('Missing bodytext');	
$colorid	= filter_input(INPUT_POST, 'colorid') or die ('Missing colorid');
$userid 	= $_SESSION['users_id'];

	require_once('dbcon.php');
	
	$sql = 'INSERT INTO postit (header, bodytext, color_id, users_id) VALUES (?, ?, ?, ?)';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ssii', $header, $bodytext, $colorid, $userid);
	$stmt->execute();
	
	echo 'Insertet '.$stmt->affected_rows.' new rows in the table';
	
	
?>
	<a href="postitboard.php">Click to see post-its!</a>
</body>
</html>