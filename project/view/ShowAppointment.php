<?php
	session_start();
	include 'Header.php';
	$email = $_SESSION['loginemail'];

	require('../model/db.php');

	$sql = "SELECT * FROM patientinfo WHERE email = '$email'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while ($patient = mysqli_fetch_assoc($result)) {
	        $pid = $patient['id'];
	    }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

		h2 {
		  text-align: center;
		  color: #333;
		}

		table {
		  width: 60%;
		  border-collapse: collapse;
		}

		th, td {
		  padding: 10px;
		  text-align: center;
		}

		th {
		  background-color: #f2f2f2;
		}

		tr:nth-child(even) {
		  background-color: #f2f2f2;
		}

		tr:hover {
		  background-color: #ddd;
		}

	</style>
	<title>Show Appointment</title>
</head>
<body>
	<h2 align="center">Your Appointment</h2>
	<table align="center" width="40%" border="1" style="border-collapse: collapse;">
		<tr>
			<th align="center">Doctor name</th>
			<th align="center">Appointment date</th>
		</tr>

<?php

	$sql = "SELECT * FROM appointment WHERE patientId = '$pid'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)) {
	        $doctorName = $row['doctorName'];
	        $appointmentdate = $row['appointmentdate'];
	        ?>

	        <tr>
	        	<td align="center"><?php echo $doctorName; ?> </td>
	        	<td align="center"><?php echo $appointmentdate; ?></td>
	        </tr>

	        <?php
	    }
	}
?>
</table>

</body>
</html>

<?php
	mysqli_close($conn);
	include 'Footer.php';
?>