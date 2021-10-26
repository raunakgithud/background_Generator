<?php
	if (isset($_POST['sub'])) 
	{
		$name = $_POST['cust_name'];
		$email = $_POST['cust_email'];
		$phone = $_POST['cust_phone'];
		$pass = $_POST['cust_pass'];

		echo "<h1>Hello... " . $name . "</h1>";
		echo "<h3>Email : " . $email . "</h3>";
		echo "<h3>Phone : " . $phone . "</h3>";
		echo "<h3>Password : " . $pass . "</h3>";
	}
	else
	{
		header("Location: valueAccess1.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Value Access using post Method</title>
</head>
<body id="body">
	<form method="post" action="demo.php">
		<p>
			<label>Name</label>
			<input type="text" name="cust_name">
		</p>
		<p>
			<label>Email</label>
			<input type="text" name="cust_email">
		</p>
		<p>
			<label>Phone</label>
			<input type="text" name="cust_phone">
		</p>
		<p>
			<label>Password</label>
			<input type="password" name="cust_pass">
		</p>
		<p>
			<input type="submit" name="sub" value="Register Now">
		</p>
	</form>
	<script type="text/javascript">
		document.getElementById('body').style.backgroundColor="red";
	</script>
</body>
</html>


