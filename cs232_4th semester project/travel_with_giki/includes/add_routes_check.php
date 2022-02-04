<?php 
include_once 'dbh.login.php';
    session_start();
    
      $inp1=$_POST['from_bar'];
      $inp2=$_POST['to_bar'];
      $inp3=$_POST['reg_no'];
      $inp4=$_POST['date_selection'];

      $sql1 = "select * from routes;";
      $result1 = mysqli_query($conn,$sql1);
     
      
      $rowCountCheck=mysqli_num_rows($result1);
      $boolean_variable=1;
      
      if($rowCountCheck>0){
        
        while($row=mysqli_fetch_assoc($result1)){
           
            if($row['DEPARTURE_LOCATION']==$inp1 AND $row['ARRIVAL_LOCATION']==$inp2){//meaning route exists  
                 $inp5=$row['ROUTE_ID'];
                 $inp6=$row['ROUTE_FARE'];

                  $sql2 = "insert into routes(DEPARTURE_LOCATION,ARRIVAL_LOCATION,ROUTE_ID,BUS_REGISTRATION_NO,ROUTE_FARE,DATE_AVAILAIBLE)values('$inp1','$inp2','$inp5','$inp3','$inp6','$inp4');";
                 $result2=mysqli_query($conn,$sql2);  
                 if($result2){
                  header('location: routes_success_alert.php');
                 }else{
                  header('location: routes_failure_alert.php');
                 }



            }else{
              $boolean_variable=0;
            } 
        }
      }

     
    
      
     

?>