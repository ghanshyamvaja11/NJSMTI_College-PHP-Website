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
         <!-- <div style='background-color: yellow; text-align: center; padding-top: 5px; padding-bottom: 1px;'><a href="../Login/Login.php"><img id="Login" src='../../Images/Login/Login.png'></a></div> -->
        </header>
<div class="navbar">
<div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
    <!-- <a href="../../index.php">HOME</a> -->
    <!-- <a href="../php files/Courses.php">Courses</a> -->
    <!-- <a href="Welcome.php" style="color: yellow; background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">Student Corner</a> -->
    <!-- <a href="../php files/Infrastructure.php">Infrastructure</a> -->
    <!-- <a href="../php files/Events.php">Events</a> -->
    <!-- <a href="../php files/About us.php">About us</a> -->
    <!-- <a href="../php files/Downloads.php">Downloads</a> -->
    <!-- <a href="../php files/Contact us.php">Contact us</a> -->
</div>
<main>

    <div id="table">
        <center>
    <table border="1" >
        <tr>
            <th id="title">PDF Name</th>
            <th id="link">Download Link</th>
        </tr>
        <tr>
            <th colspan="2">MCA Syllabus</th>
        </tr>
        <tr>
            <td>MCA SEM-1</td>
            <!-- <th><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/MCA%20SEM-1(2018)%20BKNMU.pdf"><input type="button" value="Download"></a></th> -->
        </tr>
        <tr>
            <td>MCA SEM-2</td>
            <!-- <th><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/MCA%20-Sem-II%20NEW_-2018.pdf"><input type="button" value="Download"></a></th> -->
        </tr>
        <tr>
            <td>MCA SEM-3 & SEM-4</td>
            <!-- <th><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/MCA%20Sem-III%20&%20IV%20(NEW)%202019.pdf"><input type="button" value="Download"></a></th> -->
        </tr>
        <tr>
            <td>MCA SEM-5 & SEM-6</td>
            <!-- <th><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/MCA%20Syllabus%20Sem-V%20and%20VI%20(NEW)-2020.pdf"><input type="button" value="Download"></a></th> -->
        </tr>

        <tr>
            <th colspan="2">MBA Syllabus</th>
        </tr>
       <tr>
           <td>MBA SEM-1</td>
           <!-- <th><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/MBA%20SEM-1%20NEW%202018.pdf"><input type="button" value="Download"></a></th> -->
       </tr>
       <tr>
        <td>MBA SEM-2</td>
        <!-- <th><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/MBA%20Syllabus%20Sem%20II,%202018%20(New).pdf"><input type="button" value="Download"></a></th> -->
    </tr>
    <tr>
        <td>MBA SEM-3</td>
        <!-- <th><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/MBA%20Sem%20III,%20(NEW)%202019.pdf"><input type="button" value="Download"></a></th> -->
    </tr>
    <tr>
        <td>MBA SEM-4</td>
        <!-- <th><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/MBA%20Sem%20IV,%20%20%20Effective%20from%20%20November,%202019.pdf"><input type="button" value="Download"></a></th> -->
    </tr>
    </table>
    </center>
    </div>
<?php
include('footer.php');
?>
</body>
</html>