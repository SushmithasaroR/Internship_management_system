<?php 

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "internship";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "INSERT INTO news VALUES ('".$_POST["uname"]."','".$_POST["regno"]."','".$_POST["company"]."','".$_POST["positions"]."','".$_POST["duration"]."','".$_POST["stipend"]."','".$_POST["starts"]."','".$_POST["ends"]."','".$_POST["description"]."')";
    mysqli_query($conn, $sql); 
    header("Location: stu_dashboard.php");

?>

