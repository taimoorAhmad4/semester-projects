<?php include_once 'includes/dbh.login.php';
session_start();
?>
<html>
<head>
    <title>seatingpage</title>
    
    <link rel="stylesheet" type="text/css" href="seating.css">

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
                    <a href="#">about</a>
                    <a href="#">contact</a>
                    <a href=loginpage.php>logout</a>

                </ul>
            </div>

        </ul>
    </div>
    
    <div class="all_seats">
        <form  action="includes/seatingpage.check.php" method="POST">
            <div class="row1">

                <button class="seat1" name="seat" value="1">1</button>
                <button class="seat5" name="seat" value="5">5</button>
                <button class="seat9" name="seat" value="9">9</button>
                <button class="seat13" name="seat" value="13">13</button>
                <button class="seat17" name="seat" value="17">17</button>
                <button class="seat21" name="seat" value="21">21</button>
                <button class="seat25" name="seat" value="25">25</button>
                <button class="seat29" name="seat" value="29">29</button>
                <button class="seat33" name="seat" value="33">33</button>
                <button class="seat37" name="seat" value="37">37</button>
                <button class="seat41" name="seat" value="41">41</button>
            </div>
            <div class="row2">
                <button class="seat2" name="seat" value="2">2</button>
                <button class="seat6" name="seat" value="6">6</button>
                <button class="seat10" name="seat" value="10">10</button>
                <button class="seat14" name="seat" value="14">14</button>
                <button class="seat18" name="seat" value="18">18</button>
                <button class="seat22" name="seat" value="22">22</button>
                <button class="seat26" name="seat" value="26">26</button>
                <button class="seat30" name="seat" value="30">30</button>
                <button class="seat34" name="seat" value="34">34</button>
                <button class="seat38" name="seat" value="38">38</button>
                <button class="seat42" name="seat" value="42">42</button>
            </div>
            <div class="row3">
                <button class="seat43" name="seat43" value="43">43</button>
            </div>
            <div class="row4">
                <button class="seat3" name="seat" value="3">3</button>
                <button class="seat7" name="seat" value="7">7</button>
                <button class="seat11" name="seat" value="11">11</button>
                <button class="seat15" name="seat" value="15">15</button>
                <button class="seat19" name="seat" value="19">19</button>
                <button class="seat23" name="seat" value="23">23</button>
                <button class="seat27" name="seat" value="27">27</button>
                <button class="seat31" name="seat" value="31">31</button>
                <button class="seat35" name="seat" value="35">35</button>
                <button class="seat39" name="seat" value="39">39</button>
                <button class="seat44" name="seat" value="44">44</button>
            </div>
            <div class="row5">
                <button class="seat4" name="seat" value="4">4</button>
                <button class="seat8" name="seat" value="8">8</button>
                <button class="seat12" name="seat" value="12">12</button>
                <button class="seat16" name="seat" value="16">16</button>
                <button class="seat20" name="seat" value="20">20</button>
                <button class="seat24" name="seat" value="24">24</button>
                <button class="seat28" name="seat" value="28">28</button>
                <button class="seat32" name="seat" value="32">32</button>
                <button class="seat36" name="seat" value="36">36</button>
                <button class="seat40" name="seat" value="40">40</button>
                <button class="seat45" name="seat" value="45">45</button>
            </div>
          </form>
          
    </div>
</body>
</html>
