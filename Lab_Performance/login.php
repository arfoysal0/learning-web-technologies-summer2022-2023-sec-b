<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="post">
          <h1>WT Hospital</h1>
                <table>
                    <tr>
                        <td>Email</td>
                        <td><input style="width: 200px;" type="text" name="email" value=""></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Login">
                <a href="registration.html"><input type="button" name="back" value="Back"></a>
                <p>Don't have an account? <a href="registration.php">Register here</a></p>
                <p><a href="forgetpassword.php">Can't access your account?</a></p>
        </form>
    </body>
</html>


<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $conn = mysqli_connect('localhost', 'root', '', 'login');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM patient WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) === 1) {
        $_SESSION['email'] = $email;
        $_SESSION['user_type'] = 'patient';
        mysqli_close($conn);
        header('Location: patientdashboard.php');
        exit();
    }
    
    $sql = "SELECT * FROM doctor WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) === 1) {
        $_SESSION['email'] = $email;
        $_SESSION['user_type'] = 'doctor';
        mysqli_close($conn);
        header('Location: doctordashboard.php');
        exit();
    }
    
    $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) === 1) {
        $_SESSION['email'] = $email;
        $_SESSION['user_type'] = 'admin';
        mysqli_close($conn);
        header('Location: admindashboard.php');
        exit();
    }
    
    $error = "Invalid email or password.";
    mysqli_close($conn);
}
?>
