<?php
      include_once 'dbh.login.php';
      $reg_input=$_POST['user_id'];
      $from_bar=$_POST['from_bar'];
      $to_bar=$_POST['to_bar'];
      $date_selection_input=$_POST['date_selection']; 

      $sql = "select * from routes FULL JOIN users;";
      
      $result = mysqli_query($conn,$sql);
     
      $rowCountCheck=mysqli_num_rows($result);
      $boolean_variable=1;

      if($rowCountCheck>0){
        while($row=mysqli_fetch_assoc($result)){
           
            if($row['DEPARTURE_LOCATION']==$from_bar AND $row['ARRIVAL_LOCATION']==$to_bar AND $row['DATE_AVAILAIBLE']==$date_selection_input AND $row['USER_ID']==$reg_input){
              session_start();
              unset($_SESSION['Reg_No']);
              $_SESSION['Reg_No']=$_POST['user_id'];
              $_SESSION['date_selection']=$_POST['date_selection'];
              $_SESSION['BUS_REGISTRATION_NO']=$row['BUS_REGISTRATION_NO'];
              $_SESSION['ROUTE_ID']=$row['ROUTE_ID'];
              header('location: ../seatingpage.php');
            }else{
              $boolean_variable=0;
            }

        }
      }else{
         echo "routes_table is empty";
      }
      if($boolean_variable==0){
         echo "no bus availaible on specified date";
      }

?>