<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_SESSION['loginemail'])) {
        $email = $_SESSION['loginemail'];
    }elseif(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
    }
    $newPassword = $_POST['npassword'];
    $confirmPassword = $_POST['cpassword'];

    if (empty($newPassword) || empty($confirmPassword)) {
        header("Location: ../View/UpdatePassword.php?msg1=" . "New Password and Confirm Password cannot be empty");
        exit;
    } elseif ($newPassword !== $confirmPassword) {
        header("Location: ../View/UpdatePassword.php?msg1=" . "New Password and Confirm Password must match");
        exit;
    }

    require('../model/db.php');

    $sql = "UPDATE patientinfo SET password = '$newPassword' WHERE email = '$email'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../View/Login.php?msg1=" . "Password updated successfully. Please login again.");
        exit;
    } else {
        echo "Error updating password: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
