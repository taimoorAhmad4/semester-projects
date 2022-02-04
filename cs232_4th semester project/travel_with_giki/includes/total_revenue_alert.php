<html>
<head>
  <title>alert</title>
  <link rel="stylesheet" href="total_revenue_alert.css">
</head>
</html>

 <?php
      include_once 'dbh.login.php';


      $sql1 = "SELECT routes.ROUTE_ID,routes.DEPARTURE_LOCATION,routes.ARRIVAL_LOCATION,SUM(ROUTE_FARE) FROM reservation INNER JOIN routes where routes.ROUTE_ID=reservation.ROUTE_ID GROUP BY routes.ROUTE_ID;";
      $result1 = mysqli_query($conn,$sql1);
      $rowCountCheck=mysqli_num_rows($result1);
      
      $sql2 = "SELECT SUM(ROUTE_FARE) FROM reservation INNER JOIN routes where routes.ROUTE_ID=reservation.ROUTE_ID;";
      $result2=mysqli_query($conn,$sql2);
      $row1=mysqli_fetch_assoc($result2);
      

      if($rowCountCheck>0){
        while($row=mysqli_fetch_assoc($result1)){ 
  
  ?>   


<html>
<body>



       <div class="details_container">
            <div class="main_">
            <h1 class="route_text">Route ID:</h1>
            <div class="enter_data"><?php echo $row['ROUTE_ID'];?></div>
            </div>

            <div class="main_">
            <h1 class="departure_text">DEPARTURE LOCATION:</h1>
            <div class="enter_data"><?php echo $row['DEPARTURE_LOCATION'];?></div>
            </div>
            
            <div class="main_">
            <h1 class="arrival_text">ARRIVAL LOCATION:</h1>
            <div class="enter_data"><?php echo $row['ARRIVAL_LOCATION'];?></div>
            </div>
        
            <div class="main_">
            <h1 class="revenue_text">revenue from this route:</h1>
            <div class="enter_data"><?php echo $row['SUM(ROUTE_FARE)'];?></div>
            </div>
           
       </div>
       
    





</body>
</html>


<?php
        }
      }
 ?> 


<html>
<body>

     


<div class="container">
<div class="main_">
            <h1 class="alert_test">TOTAL REVENUE EARNED:</h1>
            <div class="main_fare_data"><?php echo $row1['SUM(ROUTE_FARE)'];?></div>
</div>
<hr class="inside_horizontal_line">
<h2> Press ok to go back to homepage</h2>


<form  action="../admin_home.php" method="POST">
 <button class="ok_button" name="ok_button" >ok</button>
</form>
</div>
<hr class="verticle_line">


</body>
</html>
