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
    <link rel="stylesheet" href="../CSS Files/Downloads.css">
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
    <a href="Events.php">Events</a>
    <a href="Press.php">Press</a>
    <a href="About us.php">About us</a>
    <a href="Downloads.php"  style="color: yellow; background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">Downloads</a>
    <a href="Contact us.php">Contact us</a>
</div>
<main>

    <!--<div id="table">-->
    <!--    <center>-->
    <!--<table border="1" >-->
    <!--    <tr>-->
    <!--        <th id="title">Document Name</th>-->
    <!--        <th id="link">Download Link</th>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--        <td>Prospectus & Admission Form</td>-->
    <!--        <th><a href="../Forms/PROSPECTUS.pdf"><input type="button" value="Download"></a></th>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--<tr>-->
    <!--    <th colspan="2">Student Forms</th>-->
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td>Marksheet Photo Affidavit</td>-->
    <!--    <th><a href="http://bknmu.edu.in/uploads/assets/%E0%AA%AE%E0%AA%BE%E0%AA%B0%E0%AB%8D%E0%AA%95%E0%AA%B6%E0%AB%80%E0%AA%9F%E0%AA%AE%E0%AA%BE%E0%AA%82%20%E0%AA%AB%E0%AB%8B%E0%AA%9F%E0%AB%8B%20%E0%AA%B8%E0%AB%81%E0%AA%A7%E0%AA%BE%E0%AA%B0%E0%AA%A3%E0%AA%BE%20%E0%AA%AE%E0%AA%BE%E0%AA%9F%E0%AB%87%E0%AA%A8%E0%AA%BE%20%E0%AA%B8%E0%AB%8B%E0%AA%97%E0%AA%82%E0%AA%A6%E0%AA%A8%E0%AA%BE%E0%AA%AE%E0%AA%BE%E0%AA%A8%E0%AB%8B%20%E0%AA%A8%E0%AA%AE%E0%AB%81%E0%AA%A8%E0%AB%8B.pdf"><input type="button" value="Download"></a></th>-->
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td>Provisional Degree Certificate Form</td>-->
    <!--    <th><a href="https://bknmu.edu.in/uploads/assets/PROVISIONAL%20DEGREE%20APPLICATION%20DEMO.pdf"><input type="button" value="Download"></a></th>-->
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td>Migration Certificate Form</td>-->
    <!--    <th><a href="http://bknmu.edu.in/uploads/assets/1522058879_maigration-certificate-form.pdf"><input type="button" value="Download"></a></th>-->
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td>Duplicate Marksheet Form</td>-->
    <!--    <th><a href="http://bknmu.edu.in/uploads/assets/1522059043_DUPLECATE%20MARKSHEET%20FORM.pdf"><input type="button" value="Download"></a></th>-->
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td>Reassessment Form</td>-->
    <!--    <th><a href="http://bknmu.edu.in/uploads/assets/1589615535_RE%20ASSESSMENT%202020%20FORM.pdf"><input type="button" value="Download"></a></th>-->
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td>Migration Cancel Form</td>-->
    <!--    <th><a href="http://bknmu.edu.in/uploads/assets/1599300936_MIGRATION%20CANCEL%20FORM.pdf"><input type="button" value="Download"></a></th>-->
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td>Duplicate Degree Certificate Application Form</td>-->
    <!--    <th><a href="https://bknmu.edu.in/uploads/assets/Duplicate%20Degree%20Certificate%20Application%20Form.pdf"><input type="button" value="Download"></a></th>-->
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td>Degree Certificate Application Form</td>-->
    <!--    <th><a href="https://bknmu.edu.in/uploads/assets/2Degree%20Certificate%20Application%20Form.pdf"><input type="button" value="Download"></a></th>-->
    <!--</tr>-->

    <!--<tr>-->
    <!--    <th colspan="2">College Forms</th>-->
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td>Student College Transfer Form</td>-->
    <!--    <th><a href="http://bknmu.edu.in/uploads/assets/1522060515_College-Transfer-Form.pdf"><input type="button" value="Download"></a></th>-->
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td>Student Enrollment Cancel Form</td>-->
    <!--    <th><a href="http://bknmu.edu.in/uploads/assets/1522060598_Enrollment_Cancel_Form.pdf"><input type="button" value="Download"></a></th>-->
    <!--</tr>-->
    <!--</table>-->
    <!--</center>-->
    <!--</div>-->
    <h1>this page under constrution</h1>
    <script>
        window.goback();
    </script>
</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>