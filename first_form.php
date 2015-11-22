<html>
<head>
<title>Sample first form</title>
</head>

<body>

<form method='POST'>
	<h2>Please input your name:</h2>
	<input type="text" name="name">
	<input type="submit" name="submit">

</form>

<?php 

$p1 = $_POST['name'];
echo "Hello $p1 ";

?>

</body>

</html>