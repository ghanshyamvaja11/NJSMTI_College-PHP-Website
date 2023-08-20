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
    <link rel="stylesheet" href="../CSS Files/about us.css">
     <link rel="stylesheet" href="../CSS Files/Courses/MCA.css">
     <link rel="stylesheet" href="../CSS Files/Infrastructure.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .disclaimer{
            display: none;
        }
        button{
            height: 29px;
            width: 24.9%;
            background-color: blue;
            color: white;
            border-radius: 6.9px;
            cursor: pointer;
            padding: 6.9px;
            padding-bottom: 6.9px;
            
        }
        button:hover{
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
 .imgs{
        width: 199px;
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
        <!-- Add this inside the <nav class="navbar"> ... </nav> block -->
<div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
        <a href="../../index.php">HOME</a>
        <a href="Courses.php">Courses</a>
        <a href="../Student Corner/Welcome.php">Student Corner</a>
        <a href="Infrastructure.php">Infrastructure</a>
        <a href="Events.php">Events</a>
        <a href="Press.php">Press</a>
        <a href="About us.php"  style="color: yellow; background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">About us</a>
        <a href="Downloads.php">Downloads</a>
        <a href="Contact us.php">Contact us</a>
</div>

<main>
    <section>
        <div class="Section">
        <center><img src="../../Images/About us/Logo1.png" alt="logo" id="c-logo"></center>
        <p><h4 style="font-weight: 429;">The board trustees have established one state of art institute for management and technical education named NARANDAS JETHALAL SONECHA MANAGEMENT & TECHNICAL INSTITUTE at Chanduvav village 8 Kms away from Veraval on National Highway 8-D. N.J.Sonecha Management & Technical Institute was started by the Veraval Education Society on 8.8.2011 with the help of sponsored donation scheme of share and care foundation sponsored by Shri Jayendrabhai & Kashmiraben. We all trustees express our sincere thanks to Share & Care Foundation and Sonecha Family.</h4></p>
        </div>
    </section>
<hr>

<section>
    <div id="trustees" class="Section">
        <center><h1 class="Section-head">Our Trustees</h1></center>
            <marquee direction="left" Scrollamount="6">
       <?php
    $path    = '../../Images/About us/Trustees/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/About us/Trustees/<?php echo $file?>" alt="Trustees" class="imgs">
<?php
}
?>
        </marquee>
    </div>
</section>
<hr>

<section>
    <div id="trustees" class="Section">
        <center><h1 class="Section-head">Mandatory Disclosure</h1></center>
        <center><a href="https://www.veravaleducationsociety.org/njsmti/annoucement/mdlatest.pdf"><button style="width:24.9%;">Click Here</button></a></center>
    </div>
</section>
<hr>

<section>
    <div id="trustees" class="Section">
        <center><h1 class="Section-head">AICTE Approvals</h1></center>
        <center>
        <img src="../../Images/About us/AICTE.png" style="width: 51%;" alt="logo" id="l-logo"><br>
        <a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2011-12.pdf"><button>2011 - 12</button></a>
    <a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2012-13.pdf"><button>2012 - 13</button></a>
<a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2013-14.PDF"><button>2013 - 14</button></a>
<a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2013-14.PDF"><button>2014 - 15</button></a>
<a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2015-16.PDF"><button>2015 - 16</button></a>
<a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2016-17.PDF"><button>2016 - 17</button></a>
<a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2017-18.pdf"><button>2017 - 18</button></a>
<a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2018-19.PDF"><button>2018 - 19</button></a>
<a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2019-20.PDF"><button>2019 - 20</button></a>
<a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2020-21.PDF"><button>2020 - 21</button></a>
<a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2021-22.pdf"><button>2021 - 22</button></a>
<a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report_2022-23.PDF"><button>2022 - 23</button></a>
<a href="https://www.veravaleducationsociety.org/njsmti/img/aicte/EOA%20Report-2023-24.pdf"><button>2023 - 24</button></a>
</center>
    </div>
</section>
<hr>

<section>
        <div id="sec4">
            <center><h1 class="title">Grievance Committee Members</h1></center>
            <br>
            <marquee direction="left" scrollamount="9" onmouseover="this.stop()" onmouseout="this.start()">
                <?php
$path = '../../Images/About us/Grievance Committee/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/About us/Grievance Committee/<?php echo $file?>" alt="Grievance Committee" class="imgs" style=" height: 429px; width: 429px;">
<?php
}
?>
            </marquee>
            </div>
    </section>
    <hr>
    
<section>
        <div id="sec5">
            <center><h1 class="title">Admin and Technical Assistant</h1></center>
            <br>
                <?php
$path = '../../Images/About us/Technical Assistant/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/About us/Technical Assistant/<?php echo $file?>" alt="Technical Assistant" class="imgs" style="height: 290px; width: 290px;">
<?php
}
?>
<h1 style="font-size: 32px; color: white; background-color: blue; border: 2px solid black; border-radius: 6.5px;">Mr. Parth Jethva</h1>
<h2 style="color: red; font-size: 15.9px;">ADMIN (OFFICE ALL INCLUSIVE)</h2>
<h4 style="font-size: 11.9px;">N.J. SONECHA MANAGEMNET & TECHNICAL INSTITUTE, CHANDUVAV</h4>
<h2 style="color: red; font-size: 11.9px;">TECHNICAL ASSISTANT</h2>
<h4 style="font-size: 11.9px;">N.J. SONECHA MANAGEMNET & TECHNICAL INSTITUTE, CHANDUVAV & <br>SAVJANI BBA, BCA & COMMERCE COLLEGE, VERAVAL</h4>
            </div>
    </section>
    <hr>

    <section>
        <div class="Section">
             <center><h1 class="Section-head">Our Introduction Video</h1></center>
        <center><iframe src="https://youtube.com/embed/ZVSzZyn79y8" id="video"></iframe></center>
        </div>
    </section>
    <hr>
</main>
<?php
include('footer.php');
?>
</body>
</html>