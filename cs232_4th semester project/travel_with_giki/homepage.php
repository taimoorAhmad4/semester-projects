<?php  
include_once 'includes/dbh.login.php';
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="homepage.css">

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

    <div class="solid_blue_for_audi_stairs"></div>

    <div class="background_image">
        <img src="pics/audi_stairs2.jpg" alt="background_image">
    </div>

    <div class="route_selection_container">


        <form action="includes/homepage.check.php" method="POST">
            <h1 class="selection_text">Choose your route!!</h1>

            <div class="from">
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

