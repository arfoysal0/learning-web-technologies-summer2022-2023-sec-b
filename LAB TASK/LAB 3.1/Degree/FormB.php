<?php
    if(isset($_POST['submit']))
    {
        $degree = $_POST['degree'];

        echo $degree;
    }
?>

<html>
    <form method="post">
        <body>
            <ul><hr></ul>
            <b>5.</b>
            <ul>
                <fieldset style="width: 300px;">
                    <legend><b>DEGREE</b></legend>
                    <input type="checkbox" name="degree" value="SSC">SSC
                    <input type="checkbox" name="degree" value="HSC">HSC
                    <input type="checkbox" name="degree" value="BSc">BSc
                    <input type="checkbox" name="degree" value="MSc">MSc
                    <hr>
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
                <br>  
            </ul>
        </body>
    </form>
</html>