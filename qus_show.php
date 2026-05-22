<?php
include("class/users.php");
error_reporting(0);
$qus=new users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat']=$cat;


?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript">

function timeout()
{
  var minute=Math.floor(timeLeft/60);
  var second=timeLeft%60;
  if(timeLeft<=0)
{
  clearTimeout(tm);
 document.getElementById("form1").submit();
}
else
{
  document.getElementById("time").innerHTML=minute+":"+second;
}
timeLeft--;
var tm= setTimeout(function(){timeout()},1000);
}

</script>


<style>
   body
    {
      background-image:url(tah.jpg);
          background-size: cover;
    background-position: center;
}

    
  
  
  
  </style>

</head>
<body onload="timeout()">

<div class="container">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  <h2 style=color:white;>Online Exam<h2>

  <script type="text/javascript">

  var timeLeft=10*60;

</script>
<center>
<div id="time"style="color:red">timeout</div></h2>

</center>


 <form method="post" id="form1" action="answer.php">
  <?php
  $i=1;
  foreach ($qus->qus as $question) {?>                      
  <table class="table table-bordered">
    <thead>
      <tr class="danger">
        <th style="color:black;"><?php echo $i; ?> - <?php echo $question['question'];?> </th>
       
      </tr>
    </thead>
    <tbody>


  

      <?php if(isset($question['ans1'])) {?>
      
      <tr class="info">
        <td>&nbsp;&emsp;<input type="radio" value="0" name="<?php echo $question['id']; ?>" />&emsp;<?php echo $question['ans1'];?></td>
      </tr>
      <?php }?>

      <?php if(isset($question['ans2'])) {?>
      <tr class="info">
        <td>&nbsp;&emsp;<input type="radio" value="1" name="<?php echo $question['id']; ?>" />&emsp;<?php echo $question['ans2'];?></td>
      </tr>
      <?php }?>

      <?php if(isset($question['ans3'])) {?>
      <tr class="info">
        <td>&nbsp;&emsp;<input type="radio" value="2" name="<?php echo $question['id']; ?>" />&emsp;<?php echo $question['ans3'];?></td>
      </tr>
      <?php }?>
      
      <tr class="info">
        <p><td><input type="radio" checked="checked"style="display:none" value="no_attempt" name="<?php echo $question['id']; ?>" /></td>
      </tr>
     
    </tbody>
  </table>
  <?php $i++; }?>
  
  
  <center><input type="submit" value="Submit Quiz" class="btn btn-success"/></center><br><br>
  </form>
  </div>
  <div class="col-sm-2"></div>
</div>


</body>

</html>