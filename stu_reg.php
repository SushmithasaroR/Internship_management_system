<?php
$servername="localhost";
$username="root";
$password="";
$dbname="internship";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);
}
$user=$_POST["regno"];
$pass=$_POST["password"];
$sql="INSERT into login VALUES($user,$pass)";
$result=mysqli_query($conn,$sql);
header("Location: staff_dashboard.html");
?>