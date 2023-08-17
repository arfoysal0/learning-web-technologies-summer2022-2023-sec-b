<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
	<script src="Javascript.js"> </script>
</head>
<body id="logbody">
    <?php include 'Header.php'; ?>

    <form method="post" action="../Controller/LoginAction.php" novalidate>
        <h4 id=h41>Sign in with your organizational ID number</h4>
        <div id="login-form">
            <div id="error-message">
                <?php
                if (isset($_GET['msg1'])) {
                    echo $_GET['msg1'];
                }
                ?>
            </div>
            <div id="form-field">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Email" size="30%">
            </div>
            <div id="form-field">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" size="30%">
            </div>
            <div id="form-field">
                <input type="submit" value="Login"  onclick="checklogin()">
            </div>
            <div id="form-field">
                <button><a href="ForgetPassword.php" style="text-decoration:none;">Forgot password?</a></button>
            </div>
            <div id="form-field">
                <button><a href="Registration.php" style="text-decoration:none;">Registration</a></button>
            </div>
        </div>
    </form>

    <?php include 'Footer.php'; ?>
</body>
</html>
