<?php
	session_start();
	include 'Header.php';
	require('../model/db.php');

    $sql = "SELECT *  FROM doctorinfo";
    $result = mysqli_query($conn, $sql);
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

		td img {
		  width: 50%;
		  height: 50%;
		  max-width: 100px;
		  max-height: 100px;
		}

		button {
		  padding: 8px 16px;
		  background-color: #4CAF50;
		  color: #fff;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
		}

		button a {
		  color: #fff;
		  text-decoration: none;
		}

		button:hover {
		  background-color: #45a049;
		}

		tr:hover {
		  background-color: #ddd;
		}

		p {
		  text-align: center;
		  color: red;
		}

	</style>
	<title>Show doctor</title>
</head>
<body>

	<h2 align="center">Doctor Information</h2>
	<table align="center" width="40%" border="1" style="border-collapse: collapse;">
		<tr>
			<th align="center">Doctor image</th>
			<th align="center">Doctor Name</th>
			<th align="center">Degree</th>
			<th align="center">Specialist</th>
			<th align="center">Book Appointment</th>
		</tr>

<?php

    if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)){
	        $did = $row['did'];
	        $dname = $row['Name'];
	        $degree = $row['degree'];
	        $specialist = $row['specialist'];
	        $dpicture = $row['dpicture'];
	    
?>

		<tr>
			<td align="center" width="30%">
          <img src="../upload/<?php echo $dpicture; ?>" width='50%' hight='50%'>
      </td>
			<td align="center"><?php echo $dname; ?></td>
      <td align="center"><?php echo $degree;?></td>
      <td align="center"><?php echo $specialist; ?></td>
			<td align="center"><button><a href="ConfirmAppointment.php?did=<?php echo $did; ?>" style="text-decoration:none;">Appointment</td>
		</tr>
	

<?php
		}
	}else{
		echo "<p align='center' style='color: red'>No doctor available right now!</p>";
	}
	mysqli_close($conn);
?>
</table>
</body>
</html>

<?php include 'Footer.php'; ?>
