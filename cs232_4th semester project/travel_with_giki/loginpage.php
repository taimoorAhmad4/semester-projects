
<html>

<head>
    <link rel="stylesheet" href="loginpage.css">
    <title>loginpage</title>
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
    
    
                </ul>
            </div>
    
        </ul>
    </div>

    <div class="background_image">
        <img src="pics/audi_giki.jpg" alt="background_image">
    </div>

    <div class="login_container">


        <form action="includes/login.check.php" method="POST">
            <h1 class="login_text">please login with your university email</h1>

            <div class="container">
                <div class="email_part">
                    <label for="emailadr"><b>Email Address</b></label>
                    <input type="text" placeholder="Enter email address" name="emailadr" required>
                </div>

                <div class="password_part">
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                </div>
                <div class="submit_button">
                    <button type="submit" name="submit">Login</button>
                </div>
            </div>

          
        </form>
        

    </div>


</body>

</html>