<html>
<head>
  <title>alert</title>
  <link rel="stylesheet" href="employee_details.css">
</head>

<body>
  <hr class="verticle_line1">
</body>
</html>
  


 <?php
      include_once 'dbh.login.php';


      $sql1 = "SELECT NAME,PHONE_NO,DESIGNATION,EMPLOYEE_ID,BUS_REGISTRATION_NO,SALARY FROM employees;";
      $result1 = mysqli_query($conn,$sql1);
      $rowCountCheck=mysqli_num_rows($result1);
            

      if($rowCountCheck>0){
        while($row=mysqli_fetch_assoc($result1)){ 
  
  ?>   


<html>
<body>

       

       <div class="details_container">
            <div class="main_">
            <h1 class="name_text">Name:</h1>
            <div class="enter_data"><?php echo $row['NAME'];?></div>
            </div>

            <div class="main_">
            <h1 class="departure_text">Phone No:</h1>
            <div class="enter_data"><?php echo $row['PHONE_NO'];?></div>
            </div>
            
            <div class="main_">
            <h1 class="arrival_text">Designation:</h1>
            <div class="enter_data"><?php echo $row['DESIGNATION'];?></div>
            </div>
        
            <div class="main_">
            <h1 class="revenue_text">ID:</h1>
            <div class="enter_data"><?php echo $row['EMPLOYEE_ID'];?></div>
            </div>

            <div class="main_">
            <h1 class="revenue_text">Bus registration No:</h1>
            <div class="enter_data"><?php echo $row['BUS_REGISTRATION_NO'];?></div>
            </div>

            <div class="main_">
            <h1 class="revenue_text">Salary:</h1>
            <div class="enter_data"><?php echo $row['SALARY'];?></div>
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

     
<hr class="verticle_line2">


</body>
</html>
