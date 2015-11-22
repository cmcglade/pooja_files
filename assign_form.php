<html>
<head>
<title>Sample first form</title>
</head>

<body>

<form method='POST'>
	
	First Name: <input type="text" name="firstname"><br><br>
	Last Name: <input type="text" name="lastname"><br><br>
	Postal Code: <input type="text" name="pincode"><br><br>
	Mother's Maiden Name: <input type="text" name="mothername"><br><br>
	Favourite Colour: <input type="text" name="favcolor"><br><br><br>

	<input type="Submit" name="SUBMIT"><br><br><br>
</form>

<?php 

$firstname = strtoupper($_POST['firstname']);
$lastname = strtoupper($_POST['lastname']);
$pincode = strtoupper($_POST['pincode']);
$mothername = strtoupper($_POST['mothername']);
$favcolor = strtoupper($_POST['favcolor']);

echo "Hie $firstname! I find it interesting to think about how our identity might change if we had our mother's name. <br> 
       If you name wasn't $firstname $lastname, but instead it was $firstname $mothername, would your favourite color still be $favcolor? 
       Would you still live in $pincode?";



?>

</body>

</html>