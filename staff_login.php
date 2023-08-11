<?php
$servername="localhost";
$username="root";
$password="";
$dbname="internship";


$conn=mysqli_connect($servername,$username,$password,$dbname);

$user=$_POST['username'];
$password=$_POST['password'];

if($user=="abisha" && $password=="abisha123")
{
    header("Location: staff_dashboard.html");
}
else{
    echo "<script> alert('Invalid credentials')</script>";
}
?>