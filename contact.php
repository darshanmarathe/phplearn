<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact me</title>
         <partial src="/partials/headers.php"></partial>
    </head>
    <body>
    
    <h1><?php echo "Contact Alma factor app"; ?> </h1>
   
   
   <a href="/info.php">Php Info</a> |
   <a href="/contact.php">Contact me</a> |
   <a href="/about.php">About me</a>
    <hr>

<form method="post" action="">
    <input type="text" name="username">
    <br>
    <input type="password" name="passowrd">
    <input type="submit" name="submit" value="Submit">
</form>
    </body>
</html>
<?php

if(isset($_POST['submit'])){

    printf('%s' , '%s')
}


?>
