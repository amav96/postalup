<?php

include("../conexion.php");
session_start();

if(isset($_POST['username']))

{
// username and password sent from Form
$username=mysqli_real_escape_string($con,$_POST['username']); 
//Here converting passsword into MD5 encryption. 


$result=mysqli_query($con,"SELECT id_recolector FROM recolectores WHERE id_recolector='$username'");

$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $username and $password, table row  must be 1 row
if($count==1)
{

$_SESSION['login_user']=$row['uid']; //Storing user session value.
$_SESSION['query']=$username;

echo $row['uid'];



}

}
?>