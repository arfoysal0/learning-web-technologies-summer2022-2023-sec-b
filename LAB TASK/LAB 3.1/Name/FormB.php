<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];

        echo $name;
    }
?>

<html>
    <form method="post">
        <body>
            <b>1.</b>
            <ul>
                <fieldset style="width: 300px;">
                    <legend><b>NAME </b> </legend>
                <input type="text" name="name" value=""><br>
                <hr>
                <input type="submit" name="submit" value="Submit"><br><br>
                </fieldset>
            </ul>
        </body>
    </form>
</html>