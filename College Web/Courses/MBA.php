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
    <link rel="stylesheet" href="../CSS Files/Courses/MBA.css">
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
        <center><h1 class="title">About MBA Programme</h1>
        <strong>Master of Business Administration(MBA) <p>
(A Two Years Full Time Course of Gujarat Technological University & Approved by AICTE, NEW DELHI)</strong>
    </center>
    
    <p><h4 style="font-weight: 429;" class="para">MBA is a two year program designed to provide the knowledge and skills of decision making and leadership necessary to tackle the challenge of todays global business. The mission of MBA program is to build competent professionals who can transform communities. The institute had started the MBA program from the academic year 2011 functioning as a Post Graduate Centre of Gujarat Technological University, to meet the industry demand for skilled professionals. The focus of the institute is to make the students prosper academically. As a mark of encouragement, the students who excel are given scholarships. There are three scholarships of Rs. 10000/- cash for each semester of study, resulting in a total of 12 scholarships.</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">Objective:  </span>The objective of the MBA program is to train students to become development managers in the formal and informal sectors consistent with the needs of society in the context of global changes. Specifically, the institutes objective is to develop the following opportunities : 1) A keen understanding of the functional areas of business 2) Analytical ability to make critical decisions in the complex business environment 3) Skills of organization to implement the policy of the organization 4) An ability to use technology as a tool to manage the business effectively 5) Good communication skills to manage the relations formally and informally as well.</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">Job Opportunities : </span> There is still a shortage of talent in the developed economies and demographic issues are likely to compound this so top level MBAs will remain sort after, though they may find it takes longer or they have to make compromises. One of the things about MBA graduate is that it is easy to put them in a box and say these are the jobs that MBA graduates take but the good news for them is that they not only learn skills and knowledge that cut across industries but also across a variety of different opportunities like starting their own business, working in Government, working in not for profit so that the breadth of opportunities for MBAs is not restricted to one particular sector. MBA careers are open to anyone who has earned an MBA degree. There are numerous job opportunities available in nearly every business industry imaginable. The type of job a candidate can get is often dependent on the work experience, MBA specialization, the program through which a candidate have been graduated and individual skill set of the candidate. MBA job opportunities are available in the following fields of Finance, Marketing, Human Resource, IT, International Business</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">Eligibility : </span> Graduate in any discipline from a statutory university. Candidates must have Mathematics as a subject in 10+2 or any one year of Graduation.</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">No. Seats Approved : </span> Total number of seats available is 90 at this institute.</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">Management Quota : </span> Nil ( Institute has surrendered management quota since its inception and all seats are filled on the basis of Merit.)</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">Fees : </span> Rs. 27,500 per Semester

</h4></p>
    <p><h4 style="font-weight: 429;" class="para"><span class="hl">Class Timings:</span> Between 8:00 am to 2.30 pm</h4></p>
    </div>
    </section>
    <hr>
    
    <section>
        <div id="sec2">
            <center><h1 class="title">Director's Message</h1>
            <div id="principal">
            <?php
$path = '../../Images/Courses/MBA/Director/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../../Images/Courses/MBA/Director/<?php echo $file?>" alt="Directors's images" class="imgs">
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

            <p><center><h3>Director - N.J. Sonecha Management&Technical Institute</h3>
        <h2>MBA/MCA Department</h2></center></p>
        </div>
    </section>
    <hr>
    
    <section>
        <div id="sec3">
            <center><h1 class="title">HOD's Messaage</h1>
                <div id="hod">
            <?php
$path = '../../Images/Courses/MBA/HOD/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../../Images/Courses/MBA/HOD/<?php echo $file?>" alt="HOD's img" class="imgs">
<?php
}
?>
            <br>
            <span class="state">Pradip L. Mehta</span>
            </div>
            </center>
    
            <p><h2 class="wc">Welcome To N.J. Sonecha College, Chanduvav, To Experience The Joy Of Learning!</h2></p>
            <p><h4 style="font-weight: 429;" class="para">Management education, in the recent days context has to do much more than just importing management knowledge. The outside world expects from any management post graduate beyond the syllabi and curricula in the areas of ability to apply the theory into practical requirements, exhibit the qualities of smartness, fast learning, ability to adopt changing work nature and so on. Mere exposure to the management and technologies without personality development can result only in an inferior output. This Institute is equipped and committed to provide through its various activities, ample opportunities to the students, to sharpen their talents and to hone their skills. The experienced and committed faculties are fine-tuned to guide the students in preparing themselves for facing the outside world. Job markets are highly dynamic in nature due to continuously changing demands. Our students are seasoned to face this dynamism. It becomes highly interesting to work with the changing scenario, to evolve new strategies, to transform low profile students into successful managers and to set bench marks.</h4></p>
            <p><center><h3>HOD - MBA Department</h3></center></p>
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
$path = '../../Images/Courses/MBA/Teaching staff/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../../Images/Courses/MBA/Teaching staff/<?php echo $file?>" alt="Teaching staff" class="imgs">
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
$path = '../../Images/Courses/MBA/Toppers/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<center><img src="../../../Images/Courses/MBA/Toppers/<?php echo $file?>" alt="Topper" style="height: 51.9%; width: 86.8%;" class="imgs"></center>
<?php
}
?>
        </div>
    </section>
<hr>
</main>
<?php
include('../php files/footer.php');
?>
</body>
</html>