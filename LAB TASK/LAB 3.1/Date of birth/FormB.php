<?php
    if(isset($_POST['submit']))
    {
        $dateofbirth = $_POST['dateofbirth'];

        echo $dateofbirth;
    }
?>

<html>
    <form method="post">
        <body>
            <b>3.</b>
            <ul>
                <fieldset style="width: 300px;">
                    <legend><b>DATE OF  BIRTH </b> </legend>
                        <input type="date" name="dateofbirth" value="">
                        <hr>
                        <input type="submit" name="submit" value="Submit"><br><br>
                </fieldset>
            
            </ul>
        </body>
    </form>
</html>