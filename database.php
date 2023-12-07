<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login";

$rgb=mysqli_connect($servername,$username,$password,$dbname);

$Name=$_POST['d1'];
$Email=$_POST['d2'];
$Phone=$_POST['d3'];
$password=$_POST['d4'];

$cab="INSERT INTO `social`(`Name`,`email`,`phone number:`,`password`) VALUES"('$Name','$Email','$phone','$password')";
$nt= mysqli_query($conn,$cab);

if($rs>0)
{
    echo"<p style='color:blue;'>USER SUCCESFULLY REGISTERED</p>";
}

?>