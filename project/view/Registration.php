<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="Javascript.js"> </script>
</head>
<body align="center">

    <?php include 'Header.php'; ?>

    <form method="post" action="../Controller/registrationaction.php" novalidate>
        <h2 align="center">Registration Page</h2>
        <table align="center">
            <tr>
                <td>
                    <fieldset>
                        <legend>General Information:</legend>
                        <table>
                            <tr>
                                <th align="center"><label for="firstname">First name</label></th>
                                <td align="left">:<input type="text" id="firstname" name="firstname"></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2" style="color: #ff0000;">
                                    <?php
                                    if (isset($_SESSION['fname'])) {
                                        echo $_SESSION['fname'];
                                        unset($_SESSION['fname']); 
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th align="center"><label for="lastname">Last name</label></th>
                                <td align="left">:<input type="text" id="lastname" name="lastname"></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2" style="color: #ff0000;">
                                    <?php
                                    if (isset($_SESSION['lname'])) {
                                        echo $_SESSION['lname'];
                                        unset($_SESSION['lname']); 
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th align="center"><label for="gender">Gender</label></th>
                                <td align="left">
                                    :<input type="radio" id="gender" name="gender" value="Male"><label for="mgender">Male</label>
                                    <input type="radio" id="gender" name="gender" value="Female"><label for="fgender">Female</label>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2" style="color: #ff0000;">
                                    <?php
                                    if (isset($_SESSION['gen'])) {
                                        echo $_SESSION['gen'];
                                        unset($_SESSION['gen']); 
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th align="center"><label for="birthday">Date of Birth</label></th>
                                <td align="left">:<input type="date" id="birthday" name="birthday"></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2" style="color: #ff0000;">
                                    <?php
                                    if (isset($_SESSION['birth'])) {
                                        echo $_SESSION['birth'];
                                        unset($_SESSION['birth']); 
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th align="center"><label for="blood">Blood group</label></th>
                                <td align="left">:
                                    <select id="blood" name="blood">
                                        <option value=""></option>
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="O+">O+</option>
                                        <option value="AB+">AB+</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend>Contact Information:</legend>
                        <table>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <th align="center"><label for="phone">Phone/Mobile</label></th>
                                <td align="left">:<input type="number" id="phone" name="phone"></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2" style="color: #ff0000;">
                                    <?php
                                    if (isset($_SESSION['mobile'])) {
                                        echo $_SESSION['mobile'];
                                        unset($_SESSION['mobile']); 
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>

                            <tr>
                                <th align="center"><label for="address">Present Address</label></th>
                                <td align="left">:<input type="address" id="address" name="address"></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2" style="color: #ff0000;">
                                    <?php
                                    if (isset($_SESSION['adrs'])) {
                                        echo $_SESSION['adrs'];
                                        unset($_SESSION['adrs']); 
                                    }
                                    ?>
                                </td>
                            </tr>
                      
                            <tr>
                              <th align="center"><label for="picture">Picture</label></th>
                              <td align="left">:<input type="file" name="picture" id="picture"></td>
                            </tr>

                            <tr>
                                <td><br></td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend>Account Information:</legend>
                        <table>
                            <tr>
                                <th align="center"><label for="email">Email</label></th>
                                <td align="left">:<input type="email" id="email" name="email" onkeyup="checkEmailAvailability()"></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2" style="color: #ff0000;">
                                    <?php
                                    if (isset($_SESSION['mail'])) {
                                        echo $_SESSION['mail'];
                                        unset($_SESSION['mail']); 
                                    }
                                    ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <th align="center"><label for="pass">Password</label></th>
                                <td align="left">:<input type="password" id="pass" name="pass" onkeyup="checkPasswordStrength()"></td>
                            </tr>
                            <tr>
                               
                                <td align="center" colspan="2" style="color: #ff0000;">
                                    <?php if (isset($_SESSION['pass'])) { 
                                        echo $_SESSION['pass']; unset($_SESSION['pass']); 
                                        } 
                                        ?>
                                </td>
                               
                            </tr>

                        </table>
                    </fieldset>
                    <input type="checkbox" name="patient" id="patient" value="patient">
                    <label for="patient" style="color: #0000ff;">I agree to all the terms and conditions as a patient</label><br>
                    <p style="color: #ff0000;">
                        <?php
                        if (isset($_SESSION['patient'])) {
                            echo $_SESSION['patient'];
                            unset($_SESSION['patient']); 
                        }
                        ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>    
                    <div id="form-field1">
                        <input type="submit" value="Register" onclick=checRegistrationFields() >
                    </div>
                </td>    
            </tr>
            <tr>
                <td align="center">Already have an account? <a href="homepage.php" style="text-decoration:none;">Login here</a></td>
            </tr>
        </table>
        <?php include 'Footer.php'; ?>
    </form>
</body>
</html>
