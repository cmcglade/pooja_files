
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$position=14; // Define how many character you want to display.

$message="I will be a php developer very soon.";
$post = substr($message, 0, $position);

echo $post;
echo "...";

?>
</body>
</html>