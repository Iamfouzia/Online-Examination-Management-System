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
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Dashboard </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/dashboard.css" rel="stylesheet">

  
    <script src="assets/js/ie-emulation-modes-warning.js"></script>



    <style>
  body
    {
      background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(khan2.jpg);
   
    background-size: cover;
    background-position: center;
   
    color:white;
   
}



ul li a:hover
{
    border:2px solid grey;
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
          <li class="active"><a href="dashboard.php">Dashboard <span class="sr-only"></span></a></li><br><br>
          <li ><a href="question.php"><i class='fas fa-edit'></i>Add Question</a></li>
             <li><a href="category.php"><i class='fas fa-edit'></i>Add Category</a></li>  
        <li><a href="home.php"><i class='fas fa-home'></i>Home</a></li>
        <li><a href="index.php"><i class='fas fa-close'></i>Logout</a></li>
          </ul>
        </div>

        
        <div class="col-sm-4 col-sm-offset-5 col-md-6 col-md-offset-4 main">
          <h2 class="page-header">Questions Form</h2><br>

          <div class="table-responsive">
            <table class="table table-striped">





                <?php
                if(isset($_GET['msg']) && !empty($_GET['msg']))
                {
                  echo "<h4>data insert successfully</h4>";
                }
                
                
                ?>


 <form method="post" action="add_quiz.php">
					<div class="form-group">
					  <label for="text">Question</label>
					  <input type="text" class="form-control" name="qus"  placeholder="Enter question"  required="required">
					</div>

					<div class="form-group">
					  <label for="text">option-1</label>
					  <input type="text" class="form-control"  name="op1"  placeholder="Enter option-1"  required="required">
					</div>
					<div class="form-group">
					  <label for="text">option-2</label>
					  <input type="text" class="form-control" name="op2"  placeholder="Enter option-2"  required="required">
					</div>
					
					<div class="form-group">
					  <label for="text">option-3</label>
					  <input type="text" class="form-control"  name="op3"  placeholder="Enter option-3"  required="required">
					</div>
					
					<div class="form-group">
					  <label for="text">answer</label>
					  <input type="text" class="form-control" name="ans" id="email" placeholder="Enter answer"  required="required">
					</div>
						<div class="form-group">
            <div class="col-sm-4 col-sm-offset-5 col-md-4 col-md-offset-4 main">
						   <select class="form-control" id="sel1" name="cat">
						   
								<option value="" disabled>choose category</option>
								<?php
								foreach($category as $c)
								{
									echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
								}
								
								?>								
						  </select>
						</div>

            <br>
           

					<button type="submit" class="btn btn-primary">Submit</button><br>
         
				  </form>
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
