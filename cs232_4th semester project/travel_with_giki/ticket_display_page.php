<?php 
include_once 'includes/dbh.login.php';
    session_start();



     

      $sql1 = "select * from routes;";
      $result1 = mysqli_query($conn,$sql1);
      
     
      $rowCountCheck=mysqli_num_rows($result1);
      $boolean_variable=1;

      if($rowCountCheck>0){
        while($row=mysqli_fetch_assoc($result1)){
            if($row['ROUTE_ID']==$_SESSION['ROUTE_ID']){
              $_SESSION['DEPARTURE_LOCATION']=$row['DEPARTURE_LOCATION'];
              $_SESSION['ARRIVAL_LOCATION']=$row['ARRIVAL_LOCATION'];
              $_SESSION['ROUTE_FARE']=$row['ROUTE_FARE'];     
              $_SESSION['DATE_AVAILAIBLE']=$row['DATE_AVAILAIBLE'];       
            }else{
              $boolean_variable=0;
            } 
        }
      }

      $inp1=$_SESSION['USER_ID'];
      $inp2=$_SESSION['ROUTE_ID'];
      $inp3=$_SESSION['SEAT_ID'];
      $inp4=$_SESSION['BUS_REGISTRATION_NO'];
      $inp5=$_SESSION['DATE_AVAILAIBLE'];
      $inp6=0;
      $sql2 = "insert into reservation(USER_ID,ROUTE_ID,SEAT_ID,BUS_REGISTRATION_NO,DATE_CHOSEN)values('$inp1','$inp2','$inp3','$inp4','$inp5');";
      $result2=mysqli_query($conn,$sql2);
      
      $sql3="update seating set AVAILABILITY='$inp6' where SEAT_ID='$inp3'AND BUS_REGISTRATION_NO='$inp4';";
      $result3=mysqli_query($conn,$sql3);
      
     

?>
<html>

<head>
    <link rel="stylesheet" href="ticket_display.css">
    <title>ticket_page</title>
</head>


<body>


<div class="nav_bar">
    <ul>
        <div class="giki_logo_text">
            <ul>
                <img src="pics/giki_logo.png" alt="giki_logo" class="giki_logo">
                <h1 class="logo_text">Travel with GIKI</h1>
            </ul>
        </div>
        <div class="nav_bar_options">
            <ul>
                <a href="#">about</a>
                <a href="loginpage.php">logout</a>
                <a href="#">contact</a>

            </ul>
        </div>

    </ul>
</div>



    <div class="main_container">

    	 <div class="details_container">
           
            <div class="main_">
    	 	<h1 class="user_text">PASSENGER ID:</h1>
    	 	<div class="enter_data"><?php echo $_SESSION['USER_ID'];?></div>
            </div>

            <div class="main_">
            <h1 class="departure_text">DEPARTURE LOCATION:</h1>
    	 	<div class="enter_data"><?php echo $_SESSION['DEPARTURE_LOCATION'];?></div>
            </div>
            
            <div class="main_">
    	 	<h1 class="arrival_text">ARRIVAL LOCATION:</h1>
    	 	<div class="enter_data"><?php echo $_SESSION['ARRIVAL_LOCATION'];?></div>
            </div>

            <div class="main_">
    	 	<h1 class="reg_text">BUS REGISTRATION NO:</h1>
    	 	<div class="enter_data"><?php echo $_SESSION['BUS_REGISTRATION_NO'];?></div>
            </div>
            
            <div class="main_">
    	 	<h1 class="date_text">DATE:</h1>
    	 	<div class="enter_data"><?php echo $_SESSION['date_selection'];?></div>
            </div>
            
            <div class="main_">
            <div class="main_">
            <h1 class="seat_text">SEAT NO:</h1>
    	 	<div class="enter_data"><?php echo $_SESSION['SEAT_ID'];?></div>
            </div>
    	 	
    	 	<div class="main_">
    	 	<h1 class="fare_text">FARE:</h1>
    	 	<div class="enter_data"><?php echo $_SESSION['ROUTE_FARE'];?></div>
            </div>
            </div>

    	 	<img src="pics/giki_logo_half.png" alt="giki_logo" class="giki_logo_half">

    	 </div>
    	 
    </div>
       
           
            
      
   
</body>
</html>

