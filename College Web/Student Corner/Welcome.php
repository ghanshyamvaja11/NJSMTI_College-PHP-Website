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
    <link rel="stylesheet" href="../CSS Files/Student_Welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .disclaimer{
            display: none;
        }
        .Imgs{
    height: 19.9%;
    width: 29%;
    border: 2px solid black;
        }
        .Imgs:hover{
            border: 2px solid green;
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
        <a href="../php files/Courses.php">Courses</a>
        <a href="Welcome.php" style="color: yellow; background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">Student Corner</a>
        <a href="../php files/Infrastructure.php">Infrastructure</a>
        <a href="../php files/Events.php">Events</a>
        <a href="../php files/Press.php">Events</a>
        <a href="../php files/About us.php">About us</a>
        <a href="../php files/Downloads.php">Downloads</a>
        <a href="../php files/Contact us.php">Contact us</a>
</div>

<main>
       <br>
       <!--<a href="Admission.php"><embed src="../../Images/Student Corner/Img1A.jpg" class="Imgs"></a>-->
       <a href="https://syllabus.gtu.ac.in/Syllabus.aspx?tp=MC"><embed src="../../Images/Student Corner/Img5.jpg" class="Imgs"></a>
       <a href="Results.php"><embed src="../../Images/Student Corner/img3.jpg" class="Imgs"></a>
       <a href="Alumni.php"><embed src="../../Images/Student Corner/Img9.jpg" class="Imgs"></a>
       <a target="_blank" href="https://www.gturesults.in/"><embed src="../../Images/Student Corner/img6A.jpg" class="Imgs"></a>
       <a href="Study Materials.php"><embed src="../../Images/Student Corner/Img2.jpg" class="Imgs"></a>
       <a target="_blank" href="https://www.digitalgujarat.gov.in/GSSP/LoginAppScholarship/CitizenLogin.aspx"><embed src="../../Images/Student Corner/img7.jpg" class="Imgs"></a>
   </center>
</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>