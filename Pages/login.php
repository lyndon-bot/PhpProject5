<?php
?>

<!DOCTYPE HTML>
<html>
    <head>
        
    </head>
    <body>
        <form method='post' action='../Functions/logreg.php'>
            <input type='text' name='user' placeholder='Username' required>
            <input type='password' name='pass' pattern='(?=.*[0-9])(?=.*\W+).{6,32}' required>
            <button  name='submit' value='1'>login</button>        
        
        </form>
    </body>
</html>