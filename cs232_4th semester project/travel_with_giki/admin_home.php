<?php  
include_once 'includes/dbh.login.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="admin_home.css">
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
                    <a href="contact.php">contact</a>
                    <a href=loginpage.php>logout</a>
                </ul>
            </div>
        </ul>
    </div>

    

  

    <div class="page_selection_container">         
        
            <h1 class="selection_text">Admin Portal</h1>
        
        <div class="inner_container">
         <button onclick="document.location='booking_admin.php'"><img class="image0" src="pics/ticket.png"> <br> Manual booking</button>       
         <button onclick="document.location='includes/total_revenue_alert.php'"><img class="image1" src="pics/dollar1.png"> <br> Total Revenue</button>
         <button onclick="document.location='includes/employee_details.php'"><img class="image2" src="pics/emp.svg"> <br> Employee details</button>
         <button onclick="document.location='route.php'"><img class="image3" src="pics/route.png"> <br> Add a route</button>
         <button onclick="document.location='includes/reservation_details.php'"><img class="image4" src="pics/calendar.svg"> <br> Show All Bookings</button>
        </div>
    </div>
    
   



</body>

</html>