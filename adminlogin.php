<?php
include("class/users.php");
$adminlogin=new users;
extract($_POST);
if($adminlogin->adminlogin($e,$p))
{
    $adminlogin->url("dashboard.php");

}
else
{
    $adminlogin->url("index.php?run=failed");
}


?>