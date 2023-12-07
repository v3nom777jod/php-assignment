<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login";

$rgb=mysqli_connect($servername,$username,$password,$dbname);

$Email=$_POST[''];
$password=$_POST['d1'];

$ab="SELECT * FROM social where email = '$Email'";
$qat = mysqli_query($conn,$ab);

$row = mysqli_fetch_array($qat);

if($row['password'] == $password){
    header("Location:message.php");
}
else{
    echo"<p style='color:red;'>LOGIN FAILED:DATA NOT FOUND</p>";
}
?>