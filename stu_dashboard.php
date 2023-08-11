<!DOCTYPE>
<html>
    
<?php
     session_start();
     $user= $_SESSION['sess_user'];
?>

<head>
 	<title>exercise 2</title>
<style>
	body{
		background-image: url('https://i.pinimg.com/originals/3e/d0/30/3ed030d8b80b9dda39440d0f3f48139f.png');
		background-repeat: no-repeat;
		background-size: 100%;
	}
	.sun{
		background-color: black;
		width: 100%;
		height: 20%;
	}
	
         .container{
            width : 100%;
            display : flex;
            justify-content : center;
            flex-wrap : wrap;
            flex-direction : column;

        }
        .buttons{
            display : flex;
            flex-direction : column;
            justify-content : center;
         }

         header{
            background-color: black;
		width: 100%;
		height: 20%;
        text-align:center;

        padding:2px;
        
         }

         .coom{
		
	
        color:white;
        border:2px solid white;
      
        padding: 25px; 
        margin:40px;
       
        float:right;
	}

    .doom{
		

        color:white;
        border:2px solid white;
       
        padding: 25px; 
        margin:100px;
       
        float:right;
	}

    .display{
        position:absolute;
			top:130px ;
			left:5;
    }

</style>
</head>

<body>
        <header>
         <h1 style="color: white">INTERNSHIP DETAILS - <?php echo $user ?></h1>
        </header>

        <div class="container">

            <div class="buttons">
              <br><br>
                <div class="adddetails"><a class="coom" href="addform.html">ADD INTERN DETAILS</a>
                </div>
                <div><a class="doom" href="stu_view.php?reg=<?php echo $user?>">VIEW</a>
                </div>
                <div class="display">
                   <iframe src="aicte.pdf" height="440px" width="850px">
            </div>
              
            </div>
        </div>
</body>
</html>