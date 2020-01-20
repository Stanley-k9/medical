<?php

session_start();

if (!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
    header("location: index.php");
    exit();
}
$session_id=$_SESSION['username'];

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Booking Form -  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="ateValidate.css"> 

	
  </head>
  <body>
  
  
  <a href="hhhh.html">Go back</a>
 	<form action="process.php" method="post" autocomplete="off">
				
					<i class="fas fa-user"></i>
				<input type="text" name="username" placeholder="Username"  required>
			
					<i class="fas fa-lock"></i>
					<input type="password" name="password" placeholder="password"  required>
					<input type="submit" value="login">
					</form>
  
 
   </body>
</html>