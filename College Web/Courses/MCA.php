<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NJSMTI</title>
    <link rel="icon" type="image/x-icon" href="../../../Images/Header&Footer/favicon.jpg">
    
    <link rel="stylesheet" href="../CSS Files/headerNmenuNfooter.css">
    <link rel="stylesheet" href="../CSS Files/Courses/MCA.css">
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
            <img src="../../../Images/Header&Footer/NJSMTI.png"> 
        </center>
        <div style='background-color: yellow; text-align: center; padding-top: 5px; padding-bottom: 1px;'><a href="../Login/Login.php"><img id="Login" src='../../../Images/Login/Login.png'></a></div>
        </header>
<div class="navbar">
    <div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
    <a href="../../../index.php">HOME</a>
    <a href="../php files/Courses.php" style="color: yellow; background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">Courses</a>
    <a href="../Student Corner/Welcome.php">Student Corner</a>
    <a href="../php files/Infrastructure.php">Infrastructure</a>
    <a href="../php files/Events.php">Events</a>
    <a href="../php files/About us.php">About us</a>
    <a href="../php files/Downloads.php">Downloads</a>
    <a href="../php files/Contact us.php">Contact us</a>
</div>

<main>
    <section>
        <div id="sec1">
        <center><h1 class="title">About MCA Programme</h1>
        <strong>Master of Computer Application (MCA) <p>
(A Two Years Full Time Course of Gujarat Technological University & Approved by AICTE, NEW DELHI)</strong>
    </center>
    
    <p><h4 style="font-weight: 429;" class="para">The two-year full time MCA programme at NJSMTI is a postgraduate programme, which produces skilled professionals for the dynamic and fast paced Information Technology industry. NJSMTI had started the MCA programme from the academic year 2011 functioning as a Post Graduate Centre of Gujarat Technological University, to meet the industry demand for skilled technocrats. This programme aims to meet the requirements of the industry for the young skilled IT professionals capable of working nationally and internationally. The MCA program run by NJSMTI, creates skilled human resource at the level of programmer and software Developer for Software Industries relating to Banking, Network communication, Multimedia, Security, Wireless Technology & Web Technology etc. to cater the ever growing IT industry requirements. Apart from syllabus coverage, the students are given ample opportunities to take part in seminars, workshops and conferences for developing their interactive learning skills. The focus of the institute is to make the students prosper academically. As a mark of encouragement, the students who excel are given scholarships. There are three scholarships of Rs. 10000/- cash for each semester of study, resulting in a total of 18 scholarships.</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">Objective:  </span>MCA is a course exclusively designed to meet the IT requirements of IT Trained Students for various organisations. The well balanced course significantly emphasizes on planning, designing and building of complex commercial application software and system software. The course also places equal importance on the functional knowledge in various areas. A three years full-time MCA course is not just a postgraduate course, it is also a complete professional grooming for students for a successful career in the IT Industry.</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">Job Opportunities : </span> The fact that industries in India and abroad have been placing our MCA students on regular basis is testimony to the quality of course and its students. a) MCA graduates begin their career as junior programmers and grow at a very fast pace to become systems analysts and project leaders. Since the course is also designed towards the research side, some students pursue higher studies. Yet others seek entrepreneurial roles like consultation, etc. b) Application areas include transaction processing (such as banking, stock exchange order processing) simulation, database management, e-commerce, design support and data communications, networking, embedded technologies, etc.</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">Eligibility : </span> Graduate in any discipline from a statutory university. Candidates must have Mathematics as a subject in 10+2 or any one year of Graduation.</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">No. Seats Approved : </span> Total number of seats available is 60 at this institute.</h4></p>
    <p><h4 style="font-weight: 420;" class="para"><span class="hl">Management Quota : </span> Nil.( Institute has surrendered management quota since its inception and all seats are filled on the basis of Merit.)</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">Fees : </span> Rs. 27,500 per Semester</h4></p>
    <p><h4 style="font-weight: 420;" class="para"><span class="hl">Class Timings:</span> Between 8:00 am to 2.30 pm</h4></p>
    </div>
    </section>
    <hr>
    
    <section>
        <div id="sec2">
            <center><h1 class="title">Director's Message</h1>
            <div id="principal">
            <?php
$path = '../../Images/Courses/MCA/Director/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../../Images/Courses/MCA/Director/<?php echo $file?>" alt="Directors's images" class="imgs">
<?php
}
?>
            <br>
            <span class="state">Prof.(Dr.)Krishna C. Dwivedi</span>
            </div>
            </center>
            <p><h2 class="wc">Welcome To N.J. Sonecha College, Chanduvav, To Experience The Joy Of Learning!</h2></p>
            <p><h4 style="font-weight: 429;" class="para">(A Two Years Full Time Course of Gujarat Technological University & Approved by AICTE, NEW DELHI) <p>

It is my pleasure to welcome you to Narandas Jethalal Sonecha Management and Technical Institute (NJSMTI MBA and MCA). The Indian corporate sector has been swept by a force of change led by remarkable growth and global integration. This has led managers to adapt to the new environment by re-inventing their organizations and practices. On the other side, the Indian education fraternity has struggled to respond to this demand of the corporate sector. Thus time has arrived to create a new system of education. A system that is for today and educates not just for a degree, but for a career and for life. NJSMTI has commenced its journey 10 years ago providing invaluable contribution to the field of education and management learning. In entire Gujarat, NJSMTI enjoys strategic and financial autonomy that very few colleges have managed to achieve. Our main focus is quality education which is reflected in our unique course curriculum, faculty development, research initiatives and design of programs. Our motto is to transform every student into leaders in every area of life and identify their capabilities. At NJSMTI, students receive a solid grounding in all the functional areas of business, and learn how to go beyond them to consider the big picture, approaching each challenge with creativity and a willingness to take risks. It's a ground breaking approach that can help you shape your career, business and the world-for the better. NJSMTI professional programs will prepare you to outsmart the competition, excel the fast paced global economy, solve problems creativity and build consensus across diverse groups. I invite you to be a part of NJSMTI.</h4></p>

            <p><center><h3>Director - N.J. Sonecha Management&Technical Institute</h3></center></p>
        </div>
    </section>
    <hr>
    
    <section>
        <div id="sec3">
            <center><h1 class="title">HOD's Messaage</h1>
                <div id="hod">
            <?php
$path = '../../Images/Courses/MCA/HOD/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../../Images/Courses/MCA/HOD/<?php echo $file?>" alt="HOD's img" class="imgs">
<?php
}
?>
            <br>
            <span class="state">Chirag V. Rachh</span>
            </div>
            </center>
    
            <p><h2 class="wc">Welcome To N.J. Sonecha College, Chanduvav, To Experience The Joy Of Learning!</h2></p>
            <p><h4 style="font-weight: 429;" class="para">Education enables a person to face new challenges, achieve progresses and lead a successful life. I, therefore, would like to encourage all students to acquire right education through right educational institution. I appreciate both the parents and the students for having made a right choice of choosing NJSMTI. Education at NJSMTI is neither just about academic brilliance nor a consistent return, but an ambience where culture and human skills meet together. The NJSMTI strives upon enhancement of the quality of education and introduction of courses which have got global adaptation of latest technology with fruitful academic collaboration of industry.</h4></p>
            <p><center><h3>HOD - MCA Department</h3></center></p>
        </div>
    </section>
    <hr>
    
    <section>
        <div id="sec4">
            <center><h1 class="title">Faculty Profile</h1></center>
            <center><strong class="sec4-ss">Teaching Staff</strong></center>
            <br>
            <marquee direction="left" scrollamount="9" onmouseover="this.stop()" onmouseout="this.start()">
                <?php
$path = '../../Images/Courses/MCA/Teaching staff/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../../Images/Courses/MCA/Teaching staff/<?php echo $file?>" alt="Teaching staff" class="imgs">
<?php
}
?>
            </marquee>
        </div>
    </section>
    <hr>
    <section>
        <div id="sec4">
            <center><h1 class="title">Toppers</h1></center>
                <?php
$path = '../../Images/Courses/MCA/Toppers/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<center><img src="../../../Images/Courses/MCA/Toppers/<?php echo $file?>" alt="Topper" style="height: 51.9%; width: 69.9%;" class="imgs"></center>
<?php
}
?>
        </div>
    </section>
<hr>
<section>
        <div id="sec6">
            <center><h1 class="title">Video Lectures</h1></center>
            <a href="https://www.veravaleducationsociety.org/njsmti/img/MCAvideolectures.pdf"><input type="button" value="Click Here"></a>
        </div>
    </section>

</main>
<?php
include('../php files/footer.php');
?>
</body>
</html>