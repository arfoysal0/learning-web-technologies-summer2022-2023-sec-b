<?php
    if(isset($_POST['submit']))
    {
        $gender = $_POST['gender'];

        echo $gender;
    }
?>

<html>
    <form method="post">
        <body>
            <b>3.</b>
            <ul>
                <fieldset style="width: 200px;">
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other
                    <br>
                    <hr>
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
                
            </ul>
        </body>
    </form>
</html>