<?php
extract($_POST);
include "../class/users.php";
$category=new users;
$query="insert into category values('id','$cat')";
if($category->add_cat($query));
{
    $category->url("index1.php");
    
}



?>