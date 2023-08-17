<?php
session_start();

require('../model/db.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'] ?? ""; 
    $birthday = $_POST['birthday'];
    $blood = $_POST['blood'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['pass'];
    $patient = $_POST['patient'] ?? ""; 
    $flag = true;

    if (empty($firstname)) {
        $_SESSION['fname'] = "First name cannot be empty";
        $flag = false;
    } elseif (!ctype_upper(substr($firstname, 0, 1))) {
        $_SESSION['fname'] = "First letter of the first name must be uppercase";
        $flag = false;
    }
    

    if (empty($lastname)) {
        $_SESSION['lname'] = "Last name cannot be empty";
        $flag = false;
    }

    if (empty($gender)) {
        $_SESSION['gen'] = "Gender cannot be empty";
        $flag = false;
    }

    if (empty($birthday)) {
        $_SESSION['birth'] = "Date of birth cannot be empty";
        $flag = false;
    }

    if (empty($phone)) {
        $_SESSION['mobile'] = "Phone number cannot be empty";
        $flag = false;
    } elseif (strlen($phone) !== 11 || !is_numeric($phone)) {
        $_SESSION['mobile'] = "Phone number must contain exactly 11 digits";
        $flag = false;
    }

    if (empty($address)) {
        $_SESSION['adrs'] = "Address cannot be empty";
        $flag = false;
    }


    if (empty($email)) {
        $_SESSION['mail'] = "Email cannot be empty";
        $flag = false;
    } else {
        $atPos = false;
        $dotPos = false;
    
        for ($i = 0; $i < strlen($email); $i++) {
            if ($email[$i] === '@') {
                $atPos = $i;
            } elseif ($email[$i] === '.') {
                $dotPos = $i;
            }
        }
    
        if ($atPos === false || $dotPos === false || $dotPos < $atPos) {
            $_SESSION['mail'] = "Invalid email format";
            $flag = false;
        }
    }

    if (empty($password)) {
        $_SESSION['pass'] = "Password cannot be empty";
        $flag = false;
    } elseif (strlen($password) <= 5) {
        $_SESSION['pass'] = "Password must contain more than 5 characters";
        $flag = false;
    }

    if (empty($patient)) {
        $_SESSION['patient'] = "Please agree to the terms and conditions";
        $flag = false;
    }

    $picture = $_FILES['picture']['name'];
        $picture_tmp = $_FILES['picture']['tmp_name'];
        $picture_path = "../upload/" . $picture;
        move_uploaded_file($picture_tmp, $picture_path);

    $sql = "SELECT * FROM patientinfo WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        header("Location: ../view/Login.php?msg11=" ."This email address already exists. Please try another one for registration.");
        exit();
    }

    if ($flag === true) {
        unset($_SESSION['fname']);
        unset($_SESSION['lname']);
        unset($_SESSION['gen']);
        unset($_SESSION['birth']);
        unset($_SESSION['mail']);
        unset($_SESSION['mobile']);
        unset($_SESSION['adrs']);
        unset($_SESSION['pass']);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $picture_data = file_get_contents($picture_path);
        $picture_data = mysqli_real_escape_string($conn, $picture_data);

        $sql = "INSERT INTO patientinfo (Password, FirstName, LastName, Gender, DOB, email, Phoneno, Address, BG, picture)
                VALUES ('$password', '$firstname', '$lastname', '$gender', '$birthday', '$email', '$phone', '$address', '$blood', '$picture')";

        if (mysqli_query($conn, $sql)) {
            header("Location: ../view/Homepage.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    header("Location: ../view/Registration.php");
    exit();
}
?>
