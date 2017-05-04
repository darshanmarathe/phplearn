<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact me</title>
         <partial src="/partials/headers.php"></partial>
    </head>
    <body>
    
    <h1><?php echo "Contact Alma factor app";
?> </h1>
   
   
   <a href="/info.php">Php Info</a> |
   <a href="/contact.php">Contact me</a> |
   <a href="/about.php">About me</a>
    <hr>

<form method="post" action="">

<strong>version 0.4</strong> 
<br>
Username :
    <input type="text" name="username">
    <br>
 Password : 
    <input type="password" name="password"> <br>
   Remember  Me :
   <input type="checkbox" name="rememberme" value="on">
   <br>
    <input type="submit" name="submit" value="Submit">
   
</form>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  
    </body>
</html>
<?php

if(isset($_POST['submit']))
{
	
	printf('UserName %s  <br> passowrd  %s
    <br> remember me %s' , $_POST['username'] , 
    $_POST['password'],
    $_POST['rememberme']);on
	
}



?>