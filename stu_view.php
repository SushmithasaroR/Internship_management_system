<?php
$servername="localhost";
$username="root";
$password="";
$dbname="internship";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}

$sql="SELECT * FROM news WHERE regno='" .$_GET["reg"]."'";
$result=mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>tableview</title>
    <style>
        table,tr,td,th{
            border : 3px solid white;
            background-color:black;
            /* height:50px; */
            /* table-layout:fixed; */
            /* max-width:100%; */
            color:white;

        }
    </style>
</head>
<body>
    
   
    <div class="table">
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
            if($result->num_rows == 0)
            {
                echo "<script> alert('Noo records in the table') </script>";
            }
            else{
                while($row=$result->fetch_assoc())
                {
                    echo "
                    <tr> 
                    <td> ".$row["uname"]."</td>;
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
        </div>
        </body>
        </html>
