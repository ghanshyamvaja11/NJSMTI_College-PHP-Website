<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NJSMTI</title>
<link rel="icon" type="image/x-icon" href="../../Images/Header&Footer/favicon.jpg">
    
    <link rel="stylesheet" href="../CSS Files/headerNmenuNfooter.css">
    <link rel="stylesheet" href="../CSS Files/Events.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .disclaimer{
            display: none;
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
        <div style='background-color: yellow; text-align: center; padding-top: 5px; padding-bottom: 1px;'><a href="../Login/Login.php"><img id="Login" src='../../Images/Login/Login.png'></a></div>
        </header>
<div class="navbar">
<div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
    <a href="../../index.php">HOME</a>
    <a href="Courses.php">Courses</a>
    <a href="../Student Corner/Welcome.php">Student Corner</a>
    <a href="Infrastructure.php">Infrastructure</a>
    <a href="Events.php"  style="color: yellow; background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">Events</a>
    <a href="Press.php">Press</a>
    <a href="About us.php">About us</a>
    <a href="Downloads.php">Downloads</a>
    <a href="Contact us.php">Contact us</a>
</div>
<main>

<section>
        <div id="sec2" class="sec">
            <h1 class="title">International Conference</h1>
            <center>
            <br>
        </center>
            <marquee direction="left" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">  
             <?php
    $path    = '../../Images/Events/International Conference/';
    $files = scandir($path);
    $files = array_diff(scandir($path), array('.', '..'));
    foreach($files as $file){ ?>
    <img src="../../Images/Events/International Conference/<?php echo $file?>" alt="International Conference" class="imgs">
    <?php
    }
    ?>
           </marquee>
        </div>
    </section>
    <hr>
    
    <section>
        <div id="sec5" class="sec">
            <h1 class="title">Placement fair 2023</h1>
            <center>
                <br>
            </center>
            <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="6">
             <?php
    $path    = '../../Images/Events/Placement fair 2023/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Events/Placement fair 2023/<?php echo $file?>" alt="Placement fair 2023" class="imgs">
<?php
}
?>
            </marquee>
        </div>
    </section>
    <hr>

    <section>
        <div id="sec4" class="sec">
            <h1 class="title">Mega Job fair 2022</h1>
            <center>
                <br>
            </center>
            <marquee direction="left" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">  
                 <?php
    $path    = '../../Images/Events/Mega Job fair 2022/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Events/Mega Job fair 2022/<?php echo $file?>" alt="Mega Job fair 2022" class="imgs">
<?php
}
?>
            </marquee>
        </div>
    </section>
    <hr>
    
    <section>
        <div id="sec3" class="sec">
            <h1 class="title">Teacher's Day</h1>
            <center>
                <br>
            </center>
            <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="6">
                <?php
    $path    = '../../Images/Events/Teacher`s Day/';
    $files = scandir($path);
    $files = array_diff(scandir($path), array('.', '..'));
    foreach($files as $file){ ?>
<img src="../../Images/Events/Teacher`s Day/<?php echo $file?>" alt="Teacher's Day" class="imgs">
<?php
}
?>
            </marquee>
        </div>
    </section>
    <hr>

     <section>
        <div id="sec2" class="sec">
            <h1 class="title">Pratibha Sampann Samaroh</h1>
            <center>
                <br>
            </center>
            <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="6">
             <?php
    $path    = '../../Images/Events/Pratibha Sampann samaroah/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Events/Pratibha Sampann samaroah/<?php echo $file?>" alt="Pratibha Sampann Samaroh" class="imgs">
<?php
}
?>
            </marquee>
        </div>
    </section>
    <hr>

     <section>
        <div id="sec1" class="sec">
            <h1 class="title">Farewell 2020</h1>
        <center>
        <br>
        </center>
            <marquee direction="left" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">  
        <?php
    $path    = '../../Images/Events/Farewell 2020/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Events/Farewell 2020/<?php echo $file?>" alt="Farewell 2020" class="imgs">
<?php
}
?>
          </marquee>
        </div>
    </section>
    <hr>

</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>