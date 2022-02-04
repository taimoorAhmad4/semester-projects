<?php  
include_once 'includes/dbh.login.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Booking</title>
    <link rel="stylesheet" href="booking_admin.css">

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
                    <a href="about_page.html">about</a>
                    <a href="#">contact</a>
                    <a href=loginpage.php>logout</a>
                    
                    
                    
                
                    
                </ul>
            </div>

        </ul>
    </div>

    <div class="solid_blue_for_admin"></div>

  

    <div class="route_selection_container">

    
        <form action="includes/booking_admin_check.php" method="POST">
     
      
        
        <h1 class="selection_text">Enter Details</h1>
            <div class="from">
                <div class="reg_part">
                    <label for="Reg_No"><b>Reg no.</b></label>
                    <br>
                    <input type="text" placeholder="enter id or Reg.No" id="Reg_No" name="user_id" required>
                </div>
                <div class="from_part">
                    <label for="from_bar"><b>From</b></label>
                    <br>
                    <select id="from_bar" name="from_bar">
                        <option value="GIKI">Giki</option>
                        <option value="LAHORE">Lahore</option>
                        <option value="RAWALPINDI">Rawalpindi</option>
                        <option value="ISLAMABAD">Islamabad</option>
                    </select>
                </div>

                <div class="to_part">
                    <label for="to_bar"><b>To</b></label>
                    <br>
                    <select id="to_bar" name="to_bar">
                        <option value="LAHORE">Lahore</option>
                        <option value="RAWALPINDI">Rawalpindi</option>
                        <option value="ISLAMABAD">Islamabad</option>
                        <option value="GIKI">Giki</option>
                    </select>

                </div>
                <div class="date_and_submit">
                    <div class="date_select">
                        <label for="date_selection">Date</label>
                        <input type="date" id="date_selection" name="date_selection">
                    </div>

                    <div class="submit_button">
                        <button type="submit">Search Now</button>
                    </div>
                </div>
            </div>


        </form>
    </div>






</body>

</html>

