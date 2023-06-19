<?php
    if(isset($_POST['submit']))
    {
        $mail = $_POST['mail'];

        echo $mail;
    }
?>

<html>
    <form action="FormA.php" method="post">
        <body>
            <b>2.</b>
            <ul>
                <fieldset style="width: 300px;">
                    <legend><b>EMAIL </b> </legend>
                <input type="text" name="mail" value="<?php if(isset($_POST['submit'])){echo $mail} ?>"><br><br>
                <hr>
                <input type="submit" name="submit" value="Submit"><br><br>
                </fieldset> 
            </ul>
        </body>
    </form>
</html>