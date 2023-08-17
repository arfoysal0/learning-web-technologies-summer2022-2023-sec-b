<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $patientId = $_POST['patientId'];
    $patientName = $_POST['patientname'];
    $doctorId = $_POST['doctorId'];
    $doctorName = $_POST['doctorname'];
    $date = $_POST['appointmentdate'];

    if (empty($date)) {
        header("Location: ../View/ConfirmAppointment.php?msg1=" ."Please fill in the Data");
        exit;
    }

    require('../model/db.php');

    header("Location: ../View/payment.php?patientId=$patientId&patientName=$patientName&doctorId=$doctorId&doctorName=$doctorName&date=$date");
    

    // $sql = "INSERT INTO appointment (patientId, patientName, doctorId, doctorName, appointmentdate) VALUES ('$patientId', '$patientName', '$doctorId', '$doctorName', '$date')";

    // if (mysqli_query($conn, $sql)) {
    //     header("Location: ../View/payment.php");
    //     exit;
    // } else {
    //     echo "Error: " . mysqli_error($conn);
    // }

    mysqli_close($conn);
}

?>
