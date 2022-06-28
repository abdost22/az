<?php
$servername="localhost";
$username="root";
$password="";
$database="my_room";

$conn=mysqli_connect($servername,$username,$password,$database);
if ($conn) {
   
if ($_SERVER['REQUEST_METHOD']=="POST") {
$username=$_REQUEST['username'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];


}
 
    $sql="INSERT INTO `admin`(`id`, `username`, `email`, `password`) VALUES  (NULL,'$username','$email','$password')";
    $result=mysqli_query($conn,$sql);
    header("Location: admin.php");
    
}

   
?>