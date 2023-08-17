<?php
    session_start();
    require('../model/db.php');

    if (isset($_GET['appointmentId'])) {
        $appointmentId = $_GET['appointmentId'];

        $sql = "DELETE FROM appointment WHERE id = $appointmentId";


    if (mysqli_query($conn, $sql)) {
        header('Location: ../View/CancelAppointment.php');
    } else {
        echo "Error deleting appointment: " . mysqli_error($conn);
    }

        mysqli_close($conn);
    } else {
        echo "No appointment Id provided.";
}
?>
