 <?php
     
      include_once 'dbh.login.php';
      $emailInput=$_POST['emailadr'];
      $pswInput=$_POST['psw'];
     

      $sql = "select * from users;";  
      $result = mysqli_query($conn,$sql);
      $rowCountCheck=mysqli_num_rows($result);
      


      if($rowCountCheck>0){
        while($row=mysqli_fetch_assoc($result)){
            
            if($row['USER_EMAIL']==$emailInput){
              if($row['USER_PASSWORD']==$pswInput){
                session_start();
              	if($row['USER_DESIGNATION_CHECK']==3){
              		 header('location: ../admin_home.php');
              	}else{
                   $_SESSION['USER_ID']=$row['USER_ID'];
              		 header('location: ../homepage.php');
              	}
              }else{
                echo "wrong email or password";
              }
            }else{
               echo "wrong email or password";
            }
        }
      }else{
         echo "users table empty";
      }
?>