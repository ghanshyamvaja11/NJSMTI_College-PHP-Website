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
    <link rel="stylesheet" href="../CSS Files/Infrastructure.css">
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
    <a href="Infrastructure.php" style="color: yellow; background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">Infrastructure</a>
    <a href="Events.php">Events</a>
    <a href="Press.php">Press</a>
    <a href="About us.php">About us</a>
    <a href="Downloads.php">Downloads</a>
    <a href="Contact us.php">Contact us</a>
</div>

<main>
    <section>
        <div id="ClassRoom" class="Section">
            <center><h1 class="Section-head">Class Room</h1></center>
    <center>
       <marquee direction="left" Scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">
       <?php
    $path    = '../../Images/Infrastructure/CLab/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Infrastructure/CLab/<?php echo $file?>" alt="lab" class="imgs">
<?php
}
?>
</marquee>
</center>
    <h4 style="font-weight: 429;">NJSMTI has modern Four Lecture Halls (Class Rooms) and two Tutorial Class Rooms with modern audio-visual equipments. The total built up area of Lecture Halls / Class-rooms at NJSMTI is more than 1100 Sqm. All the class-room / tutorial rooms are equipped with Audio-Visual System and CCTV Cameras with recording facilities.</h4>
    </div>
    </section>
    <hr>

    <section>
        <div id="Computer-Lab" class="Section">
            <center><h1 class="Section-head">Computer Lab</h1></center>
            <marquee direction="left" Scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">
       <?php
    $path    = '../../Images/Infrastructure/CLab/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Infrastructure/CLab/<?php echo $file?>" alt="lab" class="imgs">
<?php
}
?>
        </marquee>
        <h4 style="font-weight: 429;">NJSMTI provides state of the art desktop computers to all its faculty members and staff. The Institute has two computer labs with more than 100 computers connected by a very fast and well-connected local area network (LAN) with 10 MBPS broadband internet connectivity. The Institute through its campus wide network provides connectivity to its resources such as Library information, printing and file access, Internet and Mail Services. Institute has permitted to the students to use their computers and Internet services in the campus is equipped with network access points that enable the student to have access to all these resources. However, a student is expected to possess a network enabled PC to gain such access.</h4>
        </div>
    </section>
    <hr>

    <section>
        <div id="Language-Lab" class="Section">
            <center><h1 class="Section-head">Language Lab</h1></center>
            <marquee direction="left" Scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">
       <?php
    $path    = '../../Images/Infrastructure/L-Lab/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Infrastructure/L-Lab/<?php echo $file?>" alt="lab" class="imgs">
<?php
}
?>
        </marquee>
        <h4 style="font-weight: 429;">Good communication skills are indispensable for the success of any professional. If one wants to reach out to people, he or she has to speak their language. The English language, in particular, has become essential in the lives of young people who aspire to advance their careers anywhere in the world. English language learning has therefore become a must for any Indian student today. The language laboratory plays an important role in the language learning process.As it is a technological aid for learning, it has a number of advanced facilities that can help a student to learn a language with proficiency to communicate. It has become inevitable in todays context but, at the same time, it poses certain challenges. Our institute has purchesed a software from Orell Technology. The product name is Orall Digital Language Lab which provides following facilities: The student can listen to the native speakers lessons and pronunciations see video clippings and read the text. The student has provision to type the text material on the screen. The student can repeat the lesson assigned by the linguist, record, and replay.Continous repetition of the correct pronunciation gives fluency,this paves way to excellent communication. The student can be part of a group discussion. Correction in case of any erratic pronunciation is possible by the linguist.</h4>
        </div>
    </section>
    <hr>

    <section>
    <div id="Library" class="Section">
        <center><h1 class="Section-head">Library</h1></center>
        <marquee direction="left" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">
        <?php
    $path    = '../../Images/Infrastructure/Library/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Infrastructure/Library/<?php echo $file?>" alt="Library" class="imgs">
<?php
}
?>
        </marquee>
    <p><h4 style="font-weight: 429;">The NJSMTI library is spread in 139 Sq.M. area having a seating capacity for more than 100 students. In addition to the Reading Facilities in Library Premises, the Institute has special Reading cubical rooms spread over in 80 Sq.M. for the serious reading. The library supports the teaching and research programmes of the Institute. The NJSMTI Library growing rapidly and is expected to expand into an outstanding library within the next few years. The NJSMTI library has huge collection of text books, reference books and books of general reading, journals, periodicals, multimedia facilities, Working Papers and Fieldwork reports. In addition to this, the library is equipped with facilities such as Multimedia.</h4></p>

        <p><strong>(i) Books :</strong>&nbsp;Currently, NJSMTI library houses around 5,000 books; in the disciplines of Management (2200 +) , Computer Applications (2400 +), Cooperation and others 200.</span></p>

        <p><strong>(ii) Journals :</strong>&nbsp; Currently, NJSMTI library houses 50 periodicals including professional journals, popular magazines, 4 newspapers and more than 100 multimedia CD/DVDs on various aspects of Management and Computer Science.</p>

        <p><strong>Multimedia PCs:</strong>&nbsp;The Institute has installed 4 multimedia PCs in the Library for accessing of online journals and other reading available on various online resources. Electronic Material:The Institute has more than 100 CDs/DVDs and 50 Video Recordings on various subjects related to Management, Computer Applications.</p>
        </div>
        </section>
        <hr>
        
        <section>
    <div id="Auditorium" class="Section">
        <center><h1 class="Section-head">Auditorium Hall</h1></center>
        <marquee direction="left" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">
        <?php
    $path    = '../../Images/Infrastructure/Auditorium/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Infrastructure/Auditorium/<?php echo $file?>" alt="Auditorium" class="imgs">
<?php
}
?>
        </marquee>
    <p><h4 style="font-weight: 429;">For the sack of different academic and training programs the institute having 2 auditoriums with the capacity of 150 persons each.
</h4></p>
        </div>
        </section>
</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>