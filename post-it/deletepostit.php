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
	
$postitid = filter_input(INPUT_POST, 'pid', FILTER_VALIDATE_INT) 
	or die ('Missing or illegal id parameter');
$userid = $_SESSION['users_id'];
	
	require_once('dbcon.php');
	
	$mysqlstring = 'DELETE FROM postit WHERE id=? AND users_id=?';
	$stmt = $link->prepare($mysqlstring);
	$stmt ->bind_param('ii', $postitid, $userid);
	$stmt -> execute();
	
	if ($postitid == $userid ) {
	echo 'Deleted '.$stmt->affected_rows.' Post-it notes';
	} else {
	echo 'You dont have permission to delete this.';
	}
?>
	<a href="postitboard.php">Click to see post-its!</a>
</body>
</html>


