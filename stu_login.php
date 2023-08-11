<?php
$servername="localhost";
$username="root";
$password="";
$dbname="internship";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connection faild:" . $conn->connect_error);
}
$user=$_POST['regno'];
$pass=$_POST['password'];

$sql="SELECT * FROM login WHERE regno='".$user."' AND password ='".$pass."' ";
$result = mysqli_query($conn, $sql);

// $row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result))
{
    session_start();
    $_SESSION['sess_user']=$user;
    header("Location: stu_dashboard.php");
}
else{
    echo "<script> alert('Invalid Credentials')</script>";
}

?>