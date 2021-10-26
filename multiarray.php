<?php
echo "<h1>Print Multiarray with the help of for loop</h1> ";
$persons = array(
array("Avi","Kolkata","980076543","avi@gmail.com"),
array("kunal","Rishra","897656765","kunal@hotmail.com"),
array("Priyanka","konnogor","78656576","pri@gmail.com")
);

echo "<h1>Print the entire array</h1>";
print_r($persons);

echo "<h2>Print the indivisual elements of \$persons</h1>";
foreach ($persons as $values) {
	print_r($values);
	echo "<br>";
	# code...
};
?>