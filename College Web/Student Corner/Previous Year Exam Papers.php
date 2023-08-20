<?php
ob_start();
session_start();
if (empty($_SESSION['Username'] ||$_SESSION['Password']) || $_SESSION['Login_type'] != 'Student') {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: ../Login/Login.php'));
    }
//Input fields validation
if(isset($_POST['Logout'])){
    session_destroy();
    header( 'location: ../Login/Login.php');
}
if(isset($_POST['Change_Email'])){
    $_SESSION['Login_type'] = 'Student';
    $_SESSION['Username'];
    header( 'location: Change Password.php');
}
if(isset($_POST['Change_Password'])){
    $_SESSION['Login_type'] = 'Student';
    $_SESSION['Username'];
    header( 'location: Change Password.php');
}
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
    <link rel="stylesheet" href="../CSS Files/Previous Year Exam Paperss.css">
    <link rel="stylesheet" href="../CSS Files/Admin_Welcome.css">
    <link rel="stylesheet" href="../CSS Files/Student_Welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .disclaimer{
            display: none;
        }
        .Study_Material{
            width: 99.6%;
        }
        .Study_Material a{
            font-size: 92.4%;
            overflow-y: hidden;        
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
        </header>
        <section id="Logged_in_sec">
        <div id="Logged_in">
            <img src="../../Images/Login/Logged_in.jpg"><br>
          <?php
            echo "<small>";
        echo $_SESSION['Username']; 
 echo "</small>";
         ?>
         
<form method="POST">
 <br><input type='Submit' name='Logout' Value='Logout' id='Logout' style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight: 400;"> &nbsp; &nbsp; <input type="Submit" name="Change_Password" Value="Change Password" id="Change_Password" style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight:  400;"> &nbsp;&nbsp; <input type="Submit" name="Change_Email" Value="Change Email" id="Change Email" style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight:  400;">
</form>
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Student Corner</h1></center>
<div class="navbar">
<div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
    <a href="Welcome_User.php">HOME</a>
    <a href="Previous Year Exam Papers.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Study-Material</a>
    <a href="Result.php">Result</a>
    <a href="New Announcements.php">Announcements</a>
</div>
</section>

<main>
    <br>
    <section>
        <div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $Enrollment_No = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `Enrollment_No`=$Enrollment_No";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "MCA" && $check['Semester'] == "Sem-1"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">MCA Sem-1 Previous Year Exam Papers</legend>
                <?php
    $path    = '../../Previous Year Exam Papers/MCA Sem-1/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Previous Year Exam Papers/MCA Sem-1/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $Enrollment_No = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `Enrollment_No`=$Enrollment_No";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "MCA" && $check['Semester'] == "Sem-2"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">MCA Sem-2 Previous Year Exam Papers</legend>
                <?php
    $path    = '../../Previous Year Exam Papers/MCA Sem-2/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Previous Year Exam Papers/MCA Sem-2/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $Enrollment_No = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `Enrollment_No`=$Enrollment_No";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "MCA" && $check['Semester'] == "Sem-3"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">MCA Sem-3 Previous Year Exam Papers</legend>
                <?php
    $path    = '../../Previous Year Exam Papers/MCA Sem-3/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Previous Year Exam Papers/MCA Sem-3/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $Enrollment_No = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `Enrollment_No`=$Enrollment_No";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "MCA" && $check['Semester'] == "Sem-4"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">MCA Sem-4 Previous Year Exam Papers</legend>
                <?php
    $path    = '../../Previous Year Exam Papers/MCA Sem-4/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Previous Year Exam Papers/MCA Sem-4/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<br>
    
    <!--MBA Previous Year Exam Papers-->
        <div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $Enrollment_No = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `Enrollment_No`=$Enrollment_No";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "MBA" && $check['Semester'] == "Sem-1"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">MBA Sem-1 Previous Year Exam Papers</legend>
                <?php
    $path    = '../../Previous Year Exam Papers/MBA Sem-1/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Previous Year Exam Papers/MBA Sem-1/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $Enrollment_No = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `Enrollment_No`=$Enrollment_No";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "MBA" && $check['Semester'] == "Sem-2"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">MBA Sem-2 Previous Year Exam Papers</legend>
                <?php
    $path    = '../../Previous Year Exam Papers/MBA Sem-2/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Previous Year Exam Papers/MBA Sem-2/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $Enrollment_No = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `Enrollment_No`=$Enrollment_No";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "MBA" && $check['Semester'] == "Sem-3"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">MBA Sem-3 Previous Year Exam Papers</legend>
                <?php
    $path    = '../../Previous Year Exam Papers/MBA Sem-3/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Previous Year Exam Papers/MBA Sem-3/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $Enrollment_No = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `Enrollment_No`=$Enrollment_No";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "MBA" && $check['Semester'] == "Sem-4"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">MBA Sem-4 Previous Year Exam Papers</legend>
                <?php
    $path    = '../../Previous Year Exam Papers/MBA Sem-4/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Previous Year Exam Papers/MBA Sem-4/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
            </center>
    </section>
</main>
<hr>
<?php
include('footer.php');
ob_end_flush();
?>
</body>
</html>