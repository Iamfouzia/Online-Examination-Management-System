<?php
include("class/users.php");
error_reporting(0);
$login=new users;
extract($_POST);
if ($login->login($e,$p))
{
    $login->url("index2.php");

}


?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style>
   body
    {
    background-color:silver;
    height: 100vh;
    background-size: cover;
    background-position: center;
}

  
  
  
  </style>
</head>
<body> 
<br>
<br>

<br>
<br>

<div class="col-md-offset-3 main">
     <div class="container">
      <div class="row">
       <div class="col-sm-6">
       <div class="panel panel-primary">
       <div class="panel-heading">Admin Login</div>
           <div class="panel-heading"></div>

           <div class="panel-body">

          
            
          
            
            
            
 
 <form role="form" method="post" action="index2.php">
                 <div class="form-group">
                   <label for="email">Email:</label>
                   <input type="email" class="form-control" name="e" id="email" placeholder="E-mail" required="required">
                   </div>
                  <div class="form-group">
               <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="p" id="pwd" placeholder="Password" required="required">
           </div>
           <center>
            <button type="submit" class="btn btn-primary">Login</button>
            </center>
            
        </form>
        </div>
        </div>
  </div>