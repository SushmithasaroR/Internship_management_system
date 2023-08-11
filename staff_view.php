<?php
$servername="localhost";
$username="root";
$password="";
$dbname="internship";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connection falid:".$conn->connect_error);
}

$sql="select * from news";
$result=mysqli_query($conn,$sql);
?>


<html>
    <head>
        <title>staffview</title>
        <style>
          table,tr,td,th{
            border : 3px solid white;
            
            background-color:black;
            height:50px;
            color:white;

        }

        h1{
	

	font-size:40px;
	color:white;
    text-align:center;
	 text-shadow: 2px 2px 8px #0000FF;
font-family:'Times New Roman', Times, serif;
}

header{
		width:100%;
		height:20%;
		background-color:black;
		padding:2px;
	}

        </style>
    </head>
    <body>
        <header>
    <h1>DETAILS OF STUDENT</h1></header>
    
    <table>
            <tr>
            <th style="height:50px; width:250px;">NAME OF STUDENT</th>
                <th style="height:50px; width:250px;">REGISTER NUMBER </th>
                <th style="height:50px; width:250px;">COMPANY NAME </th>
                <th style="height:50px; width:250px;">POSITION / ROLE </th>
                <th style="height:50px; width:250px;">DURATION (in weeks)</th>
                <th style="height:50px; width:250px;">STIPEND (in rupees)</th>
                <th style="height:50px; width:250px;">START DATE</th>
                <th style="height:50px; width:250px;">END DATE</th>
                <th style="height:50px; width:250px;">CERTIFICATE</th>
            </tr>


            <?php
            if($result->num_rows==0)
            {
                echo" <script> alert('No records found') </script>";
            }
            else{
                while($row=$result->fetch_assoc())
                {
                    echo"
                            <tr>
                            <td> ".$row["uname"]."</td>
                            <td> ".$row["regno"]."</td>;
                            <td> ".$row["company"]."</td>;
                            <td> ".$row["positions"]."</td>;
                            <td> ".$row["duration"]."</td>;
                            <td> ".$row["stipend"]."</td>;
                            <td> ".$row["starts"]."</td>;
                            <td> ".$row["ends"]."</td>;
                            <td> ".$row["description"]."</td>;
                            </tr>
                    ";
                }
            }
            ?>
    </table>