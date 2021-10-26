<?php
$Username = $_POST['username'];
$Password = $_POST['password'];
echo "welcome $Username, your password is: $Password";
?>
<!DOCTYPE html>
<html>
<head>
	<title><h1>
		Provide your credentials to Login
	</h1></title>
</head>
<body>
	<form method="POST" action="">
		<label>Username</label>
		<p>
			<input type="text" name="username">
		</p>
		<label>Password</label>
		<p>
			<input type="text" name="password">
		</p>
		<input type="submit" name="sub" value="Login">
	</form>

</body>
</html>


