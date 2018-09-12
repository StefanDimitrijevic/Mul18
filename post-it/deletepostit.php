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
	
	if (intval($userid) === 1) {
   // admin 
   $mysqlstring = 'DELETE FROM postit WHERE id=?';
   $stmt = $link->prepare($mysqlstring);
   $stmt ->bind_param('i', $postitid);
 } else {
   $mysqlstring = 'DELETE FROM postit WHERE id=? AND users_id=?';
   $stmt = $link->prepare($mysqlstring);
   $stmt ->bind_param('ii', $postitid, $userid);
 }
	/* $mysqlstring = 'DELETE FROM postit WHERE id=? AND users_id=? OR users_id=1';
	$stmt = $link->prepare($mysqlstring);
	$stmt ->bind_param('iii', $postitid, $userid, $userid); */
	$stmt -> execute();
	
	if ($postitid == $userid) {
		echo 'Deleted '.$stmt->affected_rows.' Post-it notes';
	} else if (intval($userid) === 1) {
		echo 'Deleted '.$stmt->affected_rows.' Post-it notes';
	} else {
		echo 'You dont have permission to do this!';
	}
?>
	<a href="postitboard.php">Click to see post-its!</a>
	
</body>
</html>


