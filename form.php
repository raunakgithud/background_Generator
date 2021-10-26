
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Value access with the help of PHP</h1>
	<form method = "POST" action="values.php">
		<p><div>
			<label>Name</label>
			<input type = "text" name="name" >
		</div></p>
		<label>Middle_name</label>
		<input type="text" name="middle">
		<p><div>
			<label>Lastame</label>
			<input type="text" name="lastame">
		</div></p>
		<div>
		<label>Choose Gender</label></div>

		<label>Male</label>
		
		<input type="radio" name="rad" value="male" checked="true">

		<label>Female</label>
		
			<input type="radio" name="rad" value="female">

			<label>Transgender</label>
		
		
			<input type="radio" name="rad" value="Transgender">
		
		<p>
			<label>House_number</label>
			<input type="text" name="House_number">
        </p>
        <p>
        	<label>Street_name</label>
        	<input type="text" name="Street_name">
        </p>
        <p>
        	<label>Area</label>
        	<input type="text" name="Area">
        </p>
        <p><label>City/district
       </label>
       <input type="text" name="city">
   </p>
   <p>
   	<label>State</label>
   	<input type="text" name="State" >
   </p>
   <p>
   	<label>
   		Country
   	</label>
   	<input type="text" name="Country">
   </p>
   <p>
   	<label>Postal_code</label>
   	<input type="text" name="Postal_code">

   </p>
   <p>
   	<label>DOB</label>
   	<input type="text" name="DOB" value="ddmmyyyy">
   </p>
   <p>
   	<label>Phone_num</label>
   	<input type="text" name="Phone_num">
   </p>
   <p>
   	<label>Email</label>
   	<input type="text" name="Email">
   </p>
   <p>
   	<label>Password</label>
   	<input type="text" name="Password">
   </p>
   <p>
   	<label>Confirm_password</label>
   	<input type="text" name="Confirm_password">
   </p>
   <p>
   	<input type="submit" name="sub" value="submit">
   	
   </p>
	</form>

</body>
</html>

<?php
echo"<h1>Your informations and credentials are:</h1>";
echo "<br>";


if (isset($_POST['sub'])) {

	$name = $_POST['name'];
	$midname = $_POST['middle'];
	$Lastame = $_POST['lastame'];
	$DOB = $_POST['DOB'];
	$Gender = $_POST['rad'];
	$House_number = $_POST['House_number'];
	$Street_name = $_POST['Street_name'];
	$Area = $_POST['Area'];
	$city = $_POST['city'];
	$Country = $_POST['Country'];
	$Postal_code = $_POST['Postal_code'];
	$Phone_num = $_POST['Phone_num'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$Confirm_password = $_POST['Confirm_password'];

	if ($name == null || $Lastame == null || $Email == null || $House_number == null || $Street_name == null || $Area == null || $city == null || $Country == null || $Postal_code == null || $Phone_num == null || $Email == null || $Password == null ) {
		echo "Please fill up all the mendetary fields";
		echo "<br>";
		# code...
	}else{

	switch ($Gender) {
		case 'male':
			echo("The name of the person is : Mr.".$name.$midname.$Lastame);
			break;
		case 'female':
				echo ("The name is : Mrs . ".$name.$midname.$Lastame);
				break;
		case 'Transgender':
					echo("The name is : " .$name.$midname.$Lastame);
					break;		
		
		default:
		echo "Put the appropiate name at the mentioned coloum";

			
			break;
	}
	echo "<br>";

	
	echo "The address is: ".$House_number.$Street_name.$Area.$city.$Country.$Postal_code;
	echo "<br>";
	echo $DOB;

	echo "The email-id is: ".$Email;
	echo "<br>";

	if ($Password == $Confirm_password) {

		echo "Password:";
	

	for($i = 1;$i <= strlen($Password);$i++){

		echo  "*";
	}

	}else{

		echo "Put correct password at Confirm_password field"."<br>";
	}
	echo "<br>";
}
if (strlen($DOB) > 8 ) {

	echo "Put DOB in appropiate format";
}else{
$strage = substr($DOB, 4,7);

 $strnow = 2021;

 $realage = ($strnow - $strage);
 echo "Age of"." ".$name."is:".$realage;  
}

	
}


?>