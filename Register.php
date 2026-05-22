<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

  
    <title>index page</title>
   

   
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">


    

    

</head>

  <style>
   body
    {
      background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(index.jpg);
    height:10px;
    background-size: cover;
    background-position: center;
    margin:4px;
   
   
   
   
}



.icon-bar {
  width: 100px, 100px, 100px,100px;
  background-color: #2C8D4D;

  
}

  
  </style>
</head>
<body> 
<div>
<img src="logo.jpg" alt="NO PIC" width="150" height="50"> 

<center>
<h2 style="color:white;">Welcome to Online Exam</h2>
<H1 style="color:Yellow"> Online Examination Management System <br> </H1>

</center>

</div>

<div class="col-4" align="Center">
<div class="col-md-5" align="Center">
<div class="col-sm-6" align="Center">

<?php if(isset($_GET['run'])&& $_GET['run']=="success") ?>
 

 <div class="icon-bar">
 <center><h3 style="color:white">Register</h3></center></br>
             <form role="form" method="post" action="signup_sub.php">

             <label for="inputName" class="sr-only">Name</label>
        <input type="text" id="inputName" class="form-control" placeholder="Enter Name" required autofocus 
        name="n" value=""/>
        
        <br/><br/>

             <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" id="inputEmail" class="form-control" placeholder=" Enter Email " required autofocus 
        name="e" value=""/>
        <br><br>
        

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password" required 
        name="p" value=""/>

<br><br>
<label for="phone" class="sr-only">phone</label>
        <input type="text" id="phone" class="form-control" placeholder="Enter phone number" required  
        name="phone" value=""/>





        <div class="checkbox">
           <center>
        </div>
       <input type="submit" value="Register " name="save" class="btn btn-success">
    
		</center>

           
       </form>

       
       </div>
       </div>
    </div>
    </div>
</div>
</body>
</html>