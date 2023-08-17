<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
</head>
<body>
	<?php
		session_start();
		if(empty($_SESSION['loginemail']) || empty($_SESSION['loginpassword'])){
			include 'Login.php';
		}
		else{
			include 'Dashboard.php';
		}
	?>

</body>
</html>