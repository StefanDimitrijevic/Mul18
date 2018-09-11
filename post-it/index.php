<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
<style>
	body {
		margin: 0 auto;
		background-color: ghostwhite;
	}
	
	.wrapper {
		margin: 0 auto;
		margin-top: 100px;
		width: 700px;
		height: 400px;
		background-color: lightgray;
		display: flex;
		flex-wrap: wrap;
	}
	
	.header {
		text-align: center;
		font-family: 'Indie Flower', cursive;
	}
	
	.register {
		width: 300px;
		height: 250px;
		text-align: center;
		margin: 0 auto;
		background-color: rgba(52, 73, 94, 0.7);
		margin-top: 100px;
	}
	
	.login {
		width: 300px;
		height: 250px;
		text-align: center;
		margin: 0 auto;
		background-color: rgba(52, 73, 94, 0.7);
		margin-top: 100px;
	}
	
	.register img {
		width: 80px;
		height: 80px;
		margin-top: -40px;
		margin-bottom: 20px;
	}
	
	.login img {
		width: 80px;
		height: 80px;
		margin-top: -40px;
		margin-bottom: 20px;
	}
	input {
		height: 20px;
		width: 200px;
		margin-bottom: 20px;
		background-color: #fff;
		padding-left: 10px;
	}
	
	button {
		background-color: #FFFFFF;
		border-style: none;
		font-family: 'Indie Flower', cursive;
		
	}
	
</style>
</head>

<body>
	<div class="header">
	<h1>Welcome to the Post-it wall!</h1>
	<h3>Register or login to proceed to the wall</h3>
	</div>
	<div class="wrapper">
	<div class="register">
		<img src="register.png">
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