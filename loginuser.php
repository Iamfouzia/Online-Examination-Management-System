<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if(isset($_GET['run'])&& $_GET['run']=="failed") {
            echo "Wrong email or Password";
          }
            ?>


        <form class="container" >
  <div class="text-center">
 
</div>
</form>
          </h4>
<center><h2 style="color:white">User Login</h2></center></br>
<div class="icon-bar">
<center><h3 style="color:white">Login</h3></center></br>
<form role="form" method="post" action="signin_sub.php">
             
<label for="inputEmail" class="sr-only">Email</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required
        name="e" value=""/>
        
        <br/><br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required 
        name="p" value=""/>
        <div class="checkbox">
           <center>
        </div>
        <input type="submit" value="Login " name="save" style="background-color:seagreen"/>
    
		</center>
      </form>
    
      </div>
       </div>
       </div>
 </div>
 
        
            <div class="row" align="center">
<div class="col-md-5" align="center">
<div class="col-sm-6" align="center">
</body>
</html>