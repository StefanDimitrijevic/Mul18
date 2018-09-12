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
$un = filter_input(INPUT_POST, 'un') or die ('Missing or illegal un parameter');
$pw = filter_input(INPUT_POST, 'pw') or die ('Missing or illegal pw parameter');

	$pwhash = password_hash($pw, PASSWORD_DEFAULT);
	
	require_once('dbcon.php');
	
	$sql = 'SELECT id, pwhash FROM users WHERE username=?';
	$stmt = $link->prepare($sql);
	$stmt ->bind_param('s', $un);
	$stmt ->execute();
	$stmt ->bind_result($id, $pwhash);
	
	while ($stmt->fetch()) {}
	
	if(password_verify($pw, $pwhash)){
			echo 'Username and password matched user with id: '.$id.' <a href="postitboard.php">Advance to board!</a> ';
			$_SESSION['users_id'] = $id;
			$_SESSION['uname'] = $un;
		} else {
			echo 'Illegal username/password combination';
		}
	
	
	
?>
	<!-- <a href="postitboard.php">Advance to board!</a> -->
</body>
</html>