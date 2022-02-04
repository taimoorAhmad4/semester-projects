     <?php
      include_once 'dbh.login.php';
    session_start();
       $seat_id_Input=$_POST['seat'];
      

      $sql = "select * from seating;";
      $result = mysqli_query($conn,$sql);
      $rowCountCheck=mysqli_num_rows($result);
      
      if($rowCountCheck>0){
        while($row=mysqli_fetch_assoc($result)){
            
            if($row['SEAT_ID']==$seat_id_Input AND $_SESSION['BUS_REGISTRATION_NO']==$row['BUS_REGISTRATION_NO']){
              if($row['AVAILABILITY']==1){
                
                $_SESSION['SEAT_ID']=$row['SEAT_ID'];
                header('location: ../ticket_display_page.php');
              }else{

                header('location: seatingpage.alert.php');
          
              }

            }
        }
      }

?>