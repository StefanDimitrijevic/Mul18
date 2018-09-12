<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Index</title>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="indexstyle.css">
</head>

<body>
	<div class="header">
	<h1>Welcome to the Post-it wall!</h1>
	<h3>Register or login to proceed to the wall</h3>
	</div>
	<div class="wrapper">
	<div class="register">
		<img src="register.png">
		<p>Create a new user</p>
	<form action="createuser.php" method="post">
		<div class="form-input">
		<i class="fas fa-user"></i>
		<input type="text" name="un" placeholder="Username" required>
		</div>
		<div class="form-input">
		<i class="fas fa-unlock"></i>
		<input type="password" name="pw" placeholder="Password" required>
		</div>
		<button type="submit">Create User</button>
	
	</form>
	</div>
	
	<div class="login">
		<img src="login.png">
		<p>Login</p>
	<form action="login.php" method="post">
		<div class="form-input">
		<i class="fas fa-user"></i>
		<input type="text" name="un" placeholder="Enter Username" required>
		</div>
		<div class="form-input">
		<i class="fas fa-unlock"></i>
		<input type="password" name="pw" placeholder=" Enter Password" required>
		</div>
		<button type="submit">Login</button> 
	</form>
	</div>
</div>
</body>
</html>