<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NJSMTI</title>
    <link rel="icon" type="image/x-icon" href="Images/Header&Footer/favicon.png">
    <link rel="stylesheet" href="../College Web/CSS Files/headerNmenuNfooter.css">
    <link rel="stylesheet" href="../College Web/CSS Files/Hamburger.css">
    <script src="../College Web/CSS Files/Hamburger.js"></script>
    <link rel="stylesheet" href="../College Web/CSS Files/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <style>
        .disclaimer{
            display: none;
        }
    #As:hover{
        color: red;
    }

    #Developer_Page{
        color: white; 
        font-size: 19.5px; 
        font-family: Arial,San-Serif; 
        background-color: RGB(219, 112, 18); 
        padding: 9.6px; 
        display: inline; 
        text-decoration: none; 
        border-radius: 29.4px;
    }
    #Developer_Page:hover{
        background-color: yellow;
        color: blue;
    }
   /* Add media query for mobile view */
@media (max-width: 768px) {
    /* Hide the regular navbar links */
    .navbar a {
        display: none;
    }
    
    /* Style for the hamburger icon */
    .navbar .icon {
        display: block;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
    
    /* Style for the hamburger icon bars */
    .navbar .icon .bar {
        width: 25px;
        height: 3px;
        background-color: black;
        margin: 6px 0;
        background-color: white;
        border: 2px solid black;
    }
    
    /* Show the links when hamburger icon is clicked */
    .navbar.show a {
        display: block;
        padding: 15px;
        text-align: center;
        color: black;
        text-decoration: none;
        border-bottom: 1px solid #ccc;
    }
    
    /* Styling for the active link */
    .navbar.show a.active {
        background-color: lightgray;
    }

    .navbar {
        height: 60px; /* Adjust the height as needed */
        overflow: hidden;
        transition: height 0.3s ease;
    }

    /* Show the full menu when the hamburger icon is clicked */
    .navbar.show {
        height: auto;
        background-color: white;
        z-index: 1000;
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        display: block;
    }
}
</style>
<script>
function toggleMenu() {
    var navbar = document.querySelector('.navbar');
    navbar.classList.toggle('show');
}
</script>
</head>
<body>
    <header id="header">
        <center>
            <img src="../../Images/Header&Footer/NJSMTI.png" alt="img"> 
        </center>
        <div style='background-color: yellow; text-align: center; padding-top: 5px; padding-bottom: 1px;'><a href="College Web/Login/Login.php"><img id="Login" src='../../Images/Login/Login.png'></a>
        </div>
        <div style='background-color: lightblue;; text-align: center; padding-top: 15px; padding-bottom: 11.9px;'>
        <a href="https://savjani-college.000webhostapp.com/College%20Web/php%20files/Developer%20Page.php" style="text-decoration: none;"><h5 id="Developer_Page">See The Developer Page</h5></a></div>
        </header>
<div class="navbar">
    <!-- Add this inside the <nav class="navbar"> ... </nav> block -->
<div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>

    <a href="/index.php" style="color: yellow;  background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">HOME</a>
    <a href="College Web/php files/Courses.php">Courses</a>
    <a href="College Web/Student Corner/Welcome.php">Student Corner</a>
    <a href="College Web/php files/Infrastructure.php">Infrastructure</a>
    <a href="College Web/php files/Events.php">Events</a>
    <a href="College Web/php files/Press.php">Press</a>
    <a href="College Web/php files/About us.php">About us</a>
    <a href="College Web/php files/Downloads.php">Downloads</a>
    <a href="College Web/php files/Contact us.php">Contact us</a>
</div>

<main>
    <section>
        <div id="Motive">
            <center>
            <img src="Images/Home/Campus.jpg" alt="Campus">
            </center>
            <marquee direction="left">
                <h6>The aim of this institute is to provide management and computer science education at PG level to the aspirants who wants to be post graduate in management and computer science. The institute also makes efforts for the students to develop their personality skills, presentation skills and to improve proficiency in english through scope.</h6>
            </marquee>
            <a href="College Web/php files/About us.php"><input type="button" value="About us"></a>
        </div>
    </section>
    <hr>

    <section>
        <div id="New-Announcements">
            <center>
            <fieldset>
                <legend>New Announcements</legend>
                <marquee direction="up" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()">
                    <?php
$path    = 'Announcements/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a id="As" href="Announcements/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
?>
                </marquee>
            </fieldset>
            </center>
        </div>
        <div id="View-More">
            <a href="College Web/php files/Announcements.php">
            <input type="button" value="View More>>">
            </a>
        </div>
    </section>
    <hr>

    <section>
        <div id="BKNMU">
            <h1>Affiliated With GTU</h1>
            <img src="Images/Home/GTU.jpg" alt="BKNMU">
        </div>
        <div id="BKNMU_div">
            <br>
            <a target="_Blank" href="https://www.gtu.ac.in/"><input type="button" value="Click Here to Know More About GTU" id="BknmuBtn"></a>
        </div>
    </section>
    <hr>

    <section>
     <div id="photo-Gallary">
        <h1>Photo Gallary</h1>
        <marquee behavior="scrolling" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="9">
        <?php
    $path    = 'Images/Home/Photo_Gallary/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Home/Photo_Gallary/<?php echo $file?>">
<?php
}
?>
        </marquee>    
    </div>
    </section>
    <hr>

    <section>
        <div id="Video-Gallary">
            <center>
            <h1>Video Gallary</h1>
            <iframe src="https://www.youtube.com/embed/ZVSzZyn79y8"></iframe>
            &nbsp;
            </center>
        </div>    
    </section>
    <hr>

    <section>
        <div id="Principal">
        <center>
            <img src="Images/Home/Director/Director.jpg" alt="Director's images">
            <marquee direction="left" scrollamount="6" height="40" width="200">
            <h4>Director of NJSMTI : Prof.(Dr.) K. C. Dwivedi</h4>
            </marquee>
        </center>
        </div>
    </section>
    <hr>

</main>

<footer>
    <div id="Quick-Links">
        <h1>Quick Links</h1>
        <a target="_blank" href="https://www.gtu.ac.in"><img src="Images/Header&Footer/GTU_Logo.png" alt="GTU" style="background-color: transparent;"></a>
        <a target="_blank" href="https://www.veravaleducationsociety.org/index.php"><img src="Images/Header&Footer/veravaledu.png" alt="veravaleducationsociety" style="background-color: transparent;"></a>
        &nbsp;&nbsp;
        <a target="_blank" href="https://www.ugc.ac.in/"><img src="Images/Header&Footer/ugc_logo.png" alt="ugc_logo"></a>
    </div>
    <br>
    <div id="Contact">
        <center>
        <strong><span>Available @</span>&nbsp;Phone:  +91 9913664603</strong>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a href="https://www.youtube.com/@n.j.sonechamanagementandte774/featured" class="fa fa-youtube"></a>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a href="https://www.facebook.com/people/Njsmti-Chanduvav/pfbid02M2m4Q6tu2swrq1RNB85BMFJJS8HDZHTp9SC7kshKdFEQcULbZ7fdDFCaisSMWGz8l/" class="fa fa-facebook"></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    </center>
        </div>
        <div id="headerNav">
            <a href="#header"><img src="Images/Header&Footer/Up-Arrow.png" alt=""></a>
            <strong id="top">Top</strong>
            </div>
         <center>
<h1 id="copyright">&copy;&nbsp;2023-<script>document.write(new Date().getFullYear())</script> N.J. Sonecha College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>
