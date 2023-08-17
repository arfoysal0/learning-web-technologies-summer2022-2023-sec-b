<?php
session_start();
require('../model/db.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $payment_method = $_POST['payment_method'] ?? "";
    $patientId = $_POST['patientId'];
    $patientName = $_POST['patientName'];
    $doctorId = $_POST['doctorId'];
    $doctorName = $_POST['doctorName'];
    $date = $_POST['date'];
    $flag = true;

    if (empty($payment_method)) {
        $flag = false;
        header("Location: ../view/payment.php?error=invalid_payment_method");
        exit();
    }
    
    if ($payment_method === "Card") {
        $card_number = $_POST['cardnumber'] ?? "";
        $card_password = $_POST['card_password'] ?? "";

        if (empty($card_number) || empty($card_password)) {
            $flag = false;
            header("Location: ../view/payment.php?error=card_fields");
            exit();
        }

        } elseif ($payment_method === "Bkash") {
        $bkash_number = $_POST['bkash_phonenumber'] ?? "";
        $bkash_password = $_POST['bkash_password'] ?? "";

        if (empty($bkash_number) || empty($bkash_password)) {
            $flag = false;
            header("Location: ../view/payment.php?error=bkash_fields");
            exit();
        }

        } elseif ($payment_method === "Nagad") {
        $nagad_number = $_POST['nagad_accountnumber'] ?? "";
        $nagad_password = $_POST['nagad_password'] ?? "";

        if (empty($nagad_number) || empty($nagad_password)) {
            $flag = false;
            header("Location: ../view/payment.php?error=nagad_fields");
            exit();
        }

        } elseif ($payment_method === "Rocket") {
        $rocket_number = $_POST['rocket_accountnumber'] ?? "";
        $rocket_password = $_POST['rocket_password'] ?? "";

        if (empty($rocket_number) || empty($rocket_password)) {
            $flag = false;
            header("Location: ../view/payment.php?error=rocket_fields");
            exit();
        }
    }

    if ($flag === true) {
        sleep(3);
        $sql = "INSERT INTO appointment (patientId, patientName, doctorId, doctorName, appointmentdate) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $patientId, $patientName, $doctorId, $doctorName, $date);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            header("Location: ../view/ShowAppointment.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}

header("Location: ../view/payment.php");
exit();
?>
