<?php
$temp = " ";
$temperature = 0;
if (isset($_GET['sub'])) {
	$option = $_POST['opt'];
	$temperature = $_POST['temp'];
	if($option == 'coft'){
		echo "<h1>cel to fer</h1>";
		$fer = ((9 * $temperature) + 160)/5;
		$fer =  number_format($fer,2);
		$temp = $fer . " &#8457;";
	}
	else
	{
		echo "fer to cel";
		$cel = ((5*$temperature)- 160)/9;
		$cel = number_format($cel,2);
		$temp = $cel . "&#8451;";
}
	# code...
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf - 8">

	<title>If Statement</title>
</head>
<body>
	<h1>Temperature Converter</h1>
	<form method="POST" action="">
		<p>
			<label>Choose One</label>
			<input type="radio" name="opt" value="ctof" checked="true"> cel to fer
			<input type="radio" name="opt" value="ftoc"> fer to cel 
		</p>
		<p>
			<label>Temperature</label>
			<input type="number" name="temp" required = "true" value="<?php echo $temperature; ?>">
		</p>
		<p>
			<input type="submit" name="sub" value="Convert">
		</p>
	</form>
	<h1>
		<?php echo $temp; ?>
	</h1>

</body>
</html>	