<?php
include("class/users.php");
$ans=new users;
$answer=$ans->answer($_POST);
error_reporting(0);
$email=$_SESSION['email'];

$profile=new users;
$profile->users_profile($email);
$profile->cat_show();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Result Card</title>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  </head>
  <style type="text/css">
    
    
    h2{
         color:white;
    
    }
    body
    {
      background-image:url(Dusk.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}
h1{
  color:white;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0%;
   width: 100%;
   background-color: grey;
   color: white;
   text-align: center;
}
p{
  margin-bottom: 1px;
}

    
    
        </style>
    
  <center>
<?php
$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
$attempt_qus=$answer['right']+$answer['no_answer'];

?>

  <div class="container">
<img src="logo.jpg" alt="NO PIC" width="150" height="50"> 
  <h2>Your Quiz Result</h2> 

<table class="table">
    <thead>
      <tr>
        <th style="color:white;">Id No.</th>
        <th style="color:white;">Name</th>
        <th style="color:white;">Email</th>
        <th style="color:white;">Phone Number</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($profile->data as $profile)
    {}
    ?>
    
      <tr>
        <td style="color:white;"><?php echo $profile['id'];?></td>
        <td style="color:white;"><?php echo $profile['name'];?></td>
        <td style="color:white;"><?php echo $profile['email'];?></td>
        <td style="color:white;"><?php echo $profile['phone'];?></td>
        
      </tr>
    </tbody>
    <?php{}}?>
  </table>

    </div>

                      
  <table class="table table-bordered">
    <thead>
      <tr>
        <th><h3 style="color:white;">Total number of Questions</th>
        <th><h3 style="color:white;"><?php echo $total_qus; ?></th></h3>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td style="color:white;">Attempted Questions</td>
        <td style="color:white;"><?php echo $attempt_qus; ?></td>
      </tr>
      <tr>
        <td style="color:white;">Right Answer</td>
        <td style="color:white;"><?php echo $answer['right']; ?></td>
      </tr>
      <tr>
        <td style="color:white;">Wrong Answer</td>
        <td style="color:white;"><?php echo $answer['no_answer']; ?></td>
      </tr>
      <tr>
        <td style="color:white;">No Answer</td>
        <td style="color:white;"><?php echo $answer['wrong']; ?></td>
      </tr>

      <tr>
        <td style="color:white;">Your Result</td>
        <td style="color:white;">
        <?php 
         $per= ($answer['right']*100) / ($total_qus);
         echo $per;
         ?></td>
          </tr> 
          <br>
          <center>
          
          <td colspan="2"><h2 style="color:white;">
         <?php
  
         if($per>=50)
         {
           echo "Pass";
         }
         else{
           echo "Fail";
         }
      
         ?>
        
         
         </td>
         
         </center>
         
        
     
      

      

      
    </tbody>
    </center>
  </table></div>

</div>

<h4>This is System generated Result No Need to Verification</h4> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <br>
<br><br><br><br>
  <center>
  <a href="home.php"> <input type="submit"value="Back to Home" class="btn btn-warning"/></a>
<div class="text-center">
					<button onclick="window.print()" class="btn btn-primary"> Print</button>
					</div> 
<br><br><br>
  </center>

</body>
</html>