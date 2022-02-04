<?php  
include_once 'includes/dbh.login.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding a route</title>
    <link rel="stylesheet" href="route.css">
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
                    <a href="about.php">about us</a>
                    <a href="#">contact</a>
                    <a href=loginpage.php>logout</a>
                </ul>
            </div>

        </ul>
    </div>

    <div class="solid_left_white"></div>

    <div class="side_image">
        <img src="pics/thetabus.jpeg" alt="background_image">
    </div>

    <div class="route_add_container">


        <form action="includes/add_routes_check.php" method="POST">
            <h1 class="add_text">Add a route!</h1>

            <div class="from">
                <div class="from_part">
                    <label for="from_bar"><b>From:</b></label>
                    <br>
                    <select id="from_bar" name="from_bar">
                         <option value="GIKI">Giki</option>
                        <option value="LAHORE">Lahore</option>
                        <option value="RAWALPINDI">Rawalpindi</option>
                        <option value="ISLAMABAD">Islamabad</option>
                    </select>
                </div>

                <div class="to_part">
                    <label for="to_bar"><b>To:</b></label>
                    <br>
                    <select id="to_bar" name="to_bar">
                       <option value="LAHORE">Lahore</option>
                        <option value="RAWALPINDI">Rawalpindi</option>
                        <option value="ISLAMABAD">Islamabad</option>
                        <option value="GIKI">Giki</option>
                    </select>

                </div>
                <div class= "reg_no">
                 <label for="Registration No." ><b>Bus Registration No:<b></label>
                 <input type="text" placeholder="For e.g LEE-1234" name="reg_no" required=""> 
            </div>
                <div class="date_and_submit">
                    <div class="date_select">
                        <label for="date_selection">Date:</label>
                        <input type="date" id="date_selection" name="date_selection">
                    </div>

                    <div class="submit_button">
                        <button type="submit">Add Route</button>
                    </div>
                </div>
               
            </div>
           

        </form>
    </div>






</body>

</html>

