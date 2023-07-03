<?php

session_start();

$email = $_SESSION['email'];




$conn = mysqli_connect('localhost', 'root', '', 'login');




if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}




$sql = "SELECT * FROM patient WHERE email = '$email'";

$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    $firstName = $row['firstname'];

    $lastName = $row['lastname'];





    echo "<h2>Welcome, $firstName $lastName!<h2><br>";


} else {

    echo "Error: Patient not found.";

}




mysqli_close($conn);

?>


<html>
<head>
  <title>Patient Dashboard</title>
</head>
<body>
  

  <h3>Dashboard</h3>
  <ul>
    <li><a href="view_profile.html">View Profile</a></li>
    <li><a href="edit_profile.html">Edit Profile</a></li>
    <li><a href="change_profile_photo.html">Change Profile Photo</a></li>
    <li><a href="book_appointment.html">Book Appointment</a></li>
    <li><a href="view_appointment.html">View Appointment</a></li>
    <li><a href="cancel_appointment.html">Cancel Appointment</a></li>
  </ul>
</body>
</html>

