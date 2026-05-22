<?php
include("class/users.php");
$signup=new users;
extract($_POST);
$query="insert into signup values ('', '$n', '$e', '$p',$phone)";
if($signup->signup($query))
{
    $signup->url("index.php?run=success");

}


?>