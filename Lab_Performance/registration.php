
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend><h1>Registration</h1></legend>
                <table>
                    <tr>
                        <td>First name</td>
                        <td><input style="width: 200px;" type="text" name="firstname" value=""></td>
                    </tr>

                    <tr>
                        <td>Last name</td>
                        <td><input style="width: 200px;" type="text" name="lastname" value=""></td>
                    </tr>

                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="gender" value="male">Male<br>
                            <input type="radio" name="gender" value="female">Female<br>
                            <input type="radio" name="gender" value="other">Other
                        </td>
                    </tr>

                    <tr>
                        <td>Date of birth</td>
                        <td><input type="date" name="dob" value=""></td>
                    </tr>

                    <tr>
                        <td>Blood Group</td>
                        <td>
                            <select name="bloodgroup">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td><input style="width: 200px;" type="text" name="email" value=""></td>
                    </tr>

                    <tr>
                        <td>Address</td>
                        <td><input style="height: 80px; width: 200px;" type="text" name="address" value=""></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>

                    <tr>
                        <td>C_Password</td>
                        <td><input type="password" name="cpassword" value=""></td>
                    </tr>
                </table>
                <input type="checkbox" name="TC" value="">I have read terms and conditions.<br>
                <input type="submit" name="submit" value="Submit">
                <a href="login.html"><input type="button" name="back" value="Back"></a>
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </fieldset>
        </form>

<?php

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $dateofbirth = $_POST['dateofbirth'];
            $bloodgroup = $_POST['bloodgroup'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];

            $conn = mysqli_connect('localhost', 'root', '', 'login');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO patient (firstname, lastname, gender, dateofbirth, bloodgroup, email, address, password)
                    VALUES ('$firstname', '$lastname', '$gender', '$dateofbirth', '$bloodgroup', '$email', '$address', '$password')";

            if (mysqli_query($conn, $sql)) {
                echo "Registration successful!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
?>
    </body>
</html>


