<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Header page</title>
</head>

<style>
		button {
		  padding: 8px 16px;
		  background-color: #4CAF50;
		  color: #fff;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
		  text-decoration: none;
		}

		button a {
		  color: #fff;
		  text-decoration: none;
		}

		button:hover {
		  background-color: #66ccff;
		}

</style>

<body>

	<?php
		if(empty($_SESSION['loginemail']) || empty($_SESSION['loginpassword'])){
			echo '<h2 align="center"><a href="../View/Homepage.php" style="text-decoration:none;">WT Hospital</a></h2>';
		}else{
			echo '<h2 align="center"><a href="../View/Homepage.php" style="text-decoration:none;">WT Hospital</a></h2>

				<div align="left">
					<button ><a href="Profile.php?" style="text-decoration:none;"> Profile</a></button>
				</div>
				<br>
				<div align="left">
					<button><a href="../Controller/Logout.php" style="text-decoration:none;">Logout</a></button>
				</div>';
		}
		?>

</body>
</html>