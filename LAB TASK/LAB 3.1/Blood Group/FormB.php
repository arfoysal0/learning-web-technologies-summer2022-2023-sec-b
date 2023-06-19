<?php
    if(isset($_POST['submit']))
    {
        $bloodgroup = $_POST['bloodgroup'];

        echo $bloodgroup;
    }
?>

<html>
   <form method="post">
        <body>
            <b>6.</b>
            <ul>
                <fieldset style="width:300px;">
                    <legend><b>BLOOD GROUP</b></legend>
               
                    <select name="bloodgroup">
                        <option value=></option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>   
                
                <hr>
                <input type="submit" name="" value="Submit"><br><br>
            </fieldset>
            </ul>
        </body>
    </form>
</html>