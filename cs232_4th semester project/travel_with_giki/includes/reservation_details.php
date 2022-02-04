<html>
<head>
  <title>alert</title>
  <link rel="stylesheet" href="reservation_details.css">
</head>

<body>
  <hr class="verticle_line1">
  <div class=main_container>
</body>
</html>
  


 <?php
      include_once 'dbh.login.php';
    

      $sql1 = "SELECT RESERVATION_ID,USER_ID,ROUTE_ID,SEAT_ID,BUS_REGISTRATION_NO,DATE_CHOSEN FROM reservation;";
      $result1 = mysqli_query($conn,$sql1);
      $rowCountCheck=mysqli_num_rows($result1);
            

      if($rowCountCheck>0){
        while($row=mysqli_fetch_assoc($result1)){ 
  
  ?>   


<html>
<body>

       

       <div class="details_container">
            <div class="main_">
            <h1 class="name_text">Reservation Id:</h1>
            <div class="enter_data"><?php echo $row['RESERVATION_ID'];?></div>
            </div>

            <div class="main_">
            <h1 class="departure_text">User Id:</h1>
            <div class="enter_data"><?php echo $row['USER_ID'];?></div>
            </div>
            
            <div class="main_">
            <h1 class="arrival_text">Route Id:</h1>
            <div class="enter_data"><?php echo $row['ROUTE_ID'];?></div>
            </div>
        
            <div class="main_">
            <h1 class="revenue_text">Seat Id:</h1>
            <div class="enter_data"><?php echo $row['SEAT_ID'];?></div>
            </div>

            <div class="main_">
            <h1 class="revenue_text">Bus registration No:</h1>
            <div class="enter_data"><?php echo $row['BUS_REGISTRATION_NO'];?></div>
            </div>

            <div class="main_">
            <h1 class="revenue_text">Date:</h1>
            <div class="enter_data"><?php echo $row['DATE_CHOSEN'];?></div>
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
</div>
     
<hr class="verticle_line2">


</body>
</html>
