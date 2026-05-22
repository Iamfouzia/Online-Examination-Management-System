<?php
include("class/users.php");
$cat=new users();
$category=$cat=$cat->cat_show();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Dashboard </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/dashboard.css" rel="stylesheet">
    

    <script src="assets/js/ie-emulation-modes-warning.js"></script>

   

    <style>
   body
    {
      background-image: url(khan3.jpg);
      
    background-size: cover;
    background-position: center;
    margin:500px 0px 100px 90px;
   
    color:black; 
}

ul li a:hover
{
    border:2px solid lightslategray;
   
}
.container-fluid{
  

  background-color:rgba(132, 20, 136, 0.671);
 
}

  </style>

  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          
          <h3 style="color:white;">Online Quiz & Examination System</h3>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
        
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
            <button class="btn btn-success" type="submit">Search</button>
            
          </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          
         

          <li class="active"><a href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a></li><br><br>
            <li ><a href="question.php"><i class='fas fa-edit'></i>Add Question</a></li>
             <li><a href="category.php"><i class='fas fa-edit'></i>Add Category</a></li>  
        <li><a href="home.php"><i class='fas fa-home'></i>Home</a></li>
        <li><a href="index.php"><i class='fas fa-delete'></i>Logout</a></li>
              </ul>
  </div>		
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/vendor/holder.min.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
