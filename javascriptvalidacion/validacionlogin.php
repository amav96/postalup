<?php
include("../conexion.php");
session_start();


$username=mysqli_real_escape_string($con,$_POST['username']); 

//Here converting passsword into MD5 encryption. 


$result=mysqli_query($con,"SELECT id FROM recolectores WHERE id='$username'");

$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    
if($count==1)
{
    echo json_encode(array('success' => 1));
    $_SESSION['username']=$_POST;
    
}else {
    echo json_encode(array('success' => 0));
}


?>