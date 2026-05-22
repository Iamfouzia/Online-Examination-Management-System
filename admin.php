<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="bootcss.css">
	<script src="javsc.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<style>
body{
  /*background-image: url('khan7.jpg');*/
  background-color: #868f96;
}



	h1{
		color: white;
		text-align: center;
	}
	label{
		color: white;
	}


</style>


</head>
<body>
	
	<form class="container" 
	role="form" method="post" action="adminlogin.php">
             

	<div class="col-md-12">
		<div class="col-md-5">
	<h1>Admin Login</h1>
	
	
	<div class="form-group">
<label>Email</label>
        <input type="text" id="inputEmail" placeholder="Enter Email" required
        name="e" class="form-control">
        </div>
        <br>
        
        
        <label>Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password" required 
        name="p" value=""/>
       
           
        </div>
        <br>
      <button class="btn btn-success" name="save">Login</button>
		
     
      
       </div>
</div>


</div>
</div>
</form>

	

</body>
</html>