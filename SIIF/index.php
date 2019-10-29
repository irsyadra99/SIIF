<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initialscale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
	<script src="main.js"></script>
</head>
<body>
<center>
<div class="col-md-4 col-md-offset-4 form-login">
	<div class="outter-form-login">
		<div class="logo-login">
			<em class="glyphicon glyphicon-user"></em>
	</div>
	<form action="login.php" method="post" class="inner-login">
	<h2 class="text-center title-login">Login</h2>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Username" name="username" id=""><br>
	</div>
	<div class="form-group">
		<input type="password" class="form-control" placeholder="Password" name="password" id=""><br>
	</div>
		<input type="submit" value="Login" class="btn btn-block btn-success">
	</form>
</div>
</center>
</body>
</html>
