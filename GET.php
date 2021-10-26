<?php
if(isset($_GET["sub"])){
	$name = $_GET["cust_name"];
	$email = $_GET["cust_email"];
	$phone = $_GET["cust_phone"];
	$pass = $_GET["cust_pass"];


	echo "<h1>Hello"." ".$name."</h1>";
	echo "<h1>Email"." ".$email."</h1>";
	echo "<h1>phone"." ".$phone."</h1>";
	echo "<h1>cust_pass"." ".$pass."</h1>";
	exit();
}
?>
<!DOCTYPE = html>
<html>
<header></header>
	<form input type = "text"  method = "GET">
		<label>
			Name
		</label><input type = "text"  name= "cust_name">
		
			<div>
				<label>
					Email
				</label>
				<input type="text" name="cust_email">
			</div>
			<label>
				Phone
			</label>
			<input type="text" name="cust_phone">
			<div>
				<label>
					Password
				</label>
				<input type="text" name="cust_pass">
			</div>
			<input type="submit" name="sub" value="register now">
				</label>
			
</form>
</html>
