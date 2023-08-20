<?php
session_start();
include "../php files/db_connection.php";

if (empty($_SESSION['Username'] && $_SESSION['Password']) || $_SESSION['Login_type'] != 'Faculty') {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: ../Login/Login.php'));
    }
//Input fields validation
if(isset($_POST['Logout'])){
    session_destroy();
    header( 'location: ../Login/Login.php');
}
if(isset($_POST['Change_Password'])){
    $_SESSION['Login_type'];
    $_SESSION['Username'];
    header( 'location: Change Password.php');
}

if(isset($_POST['Change_Email'])){
    $_SESSION['Login_type'];
    $_SESSION['Username'];
    header( 'location: Welcome.php');
}
$Check = "";
$Class = $_SESSION['Class'];
$_SESSION['Login_type'] = $_SESSION['Login_type'];
$_SESSION['Username'] = $_SESSION['Username'];
$_SESSION['TotalMarks'] = $_SESSION['PassingMarks'] = $_SESSION['subject1'] = $_SESSION['subject2'] = $_SESSION['subject3'] = $_SESSION['subject4'] = $_SESSION['subjec5'] = $_SESSION['subject6'] = $_SESSION['subject7'] = $_SESSION['subject8'] = "";
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
    <link rel="stylesheet" href="../CSS Files/Admin_Welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .disclaimer{
            display: none;
        }
        input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
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
            <img src="../../Images/Header&Footer/savjaniclg.png" alt="img"> 
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
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Faculty Desk</h1></center>
        </div>
<div class="navbar">
    <div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
    <a href="Welcome.php">HOME</a>
    <a href="Upload_study_Material.php">Upload study Material</a>
    <a href="Remove_study_Material.php">Remove Study Material</a>
    <a href="Result.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Upload Result</a>
    <a href="Remove Result.php">Remove Result</a>
</div>
</section>
<main>
    <hr>
        <center><h2 style='color: white; background-color: red; border-radius: 29px; padding-bottom: 4.2px;'>Declare Result</h2></center>
        <center>
        <div style='background-color: skyblue; display: inline-block; border-radius: 15px; width: 92%; padding: 9px;' id="pathSelection">
      
      <form  action="" method="POST">
          <input type="text" name="Login_type" value="<?php echo $_SESSION['Login_type']; ?>" hidden>
          <input type="text" name="Username" value="<?php echo $_SESSION['Username']; ?>" hidden>
      <input type="text" name="Class" style="height: 29.4px; width: 54.9%; text-align: center;" value="<?php echo $Class;?>" placeholder="<?php echo $Class;?>" readonly><p>
         <?php 
         if($Class == 'MCA-1' || $Class == 'MCA-2' || $Class == 'MCA-3' || $Class == 'MCA-4'){?>
      <input type="Number" name="TotalMarks" style="height: 24.9px; width: 51.9%; text-align: center;" placeholder="Enter Total Marks Ex. 600" required><p>
          <?php
         }
          else{?>
      <input type="Number" name="TotalMarks" style="height: 24.9px; width: 51.9%; text-align: center;" placeholder="Enter Total Marks Ex. 800" required><p>
          <?php }?>
        <input type="Number" name="PassingMarks" style="height: 24.9px; width: 45.6%; text-align: center;" placeholder="Enter Passing Marks*" required><p>
        <?php
        if($Class == 'MCA-1' or $Class == 'MCA-2' or $Class == 'MCA-3' or $Class == 'MCA-4'){ ?>
        <input type="text" name="S1" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 1st Subject Name" required><p>
        <input type="text" name="S2" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 2nd Subject Name" required><p>
        <input type="text" name="S3" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 3rd Subject Name" required><p>
        <input type="text" name="S4" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 4th Subject Name" required><p>
               <input type="text" name="S5" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 5rd Subject Name" required><p>
        <input type="text" name="S6" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 6th Subject Name" required><p>
    <?php 
$Check = 1;    
}
    if($Class == 'MBA-1' or $Class == 'MBA-2' or $Class == 'MBA-3' or $Class == 'MBA-4'){
        ?>
        <style>
            .class{
                display: none;
            }
            </style>
            <input type="text" name="S1" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 1st Subject Name" required><p>
            <input type="text" name="S2" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 2nd Subject Name" required><p>
            <input type="text" name="S3" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 3rd Subject Name" required><p>
            <input type="text" name="S4" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 4th Subject Name" required><p>
            <input type="text" name="S5" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 5th Subject Name" required><p>
            <input type="text" name="S6" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 6th Subject Name" required><p>
            <input type="text" name="S7" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 7th Subject Name" required><p>
            <input type="text" name="S8" style="height: 29.4px; width: 45.9%; text-align: center;" placeholder="Enter 8th Subject Name" required><p>
            <?php 
        $Check = 3;
    }?>
            <input type="submit" value="Set Subjects" name="setSubjects" style="font-size: 19.9px; color: black; background-color: white;" class="see">
        </form> 
    </div>
        
        </center>

    <center>
        <?php if(isset($_POST['setSubjects'])){
            $_SESSION['TotalMarks'] = $_POST['TotalMarks'];
            $_SESSION['PassingMarks'] = $_POST['PassingMarks'];
            $_SESSION['Class'] = $_POST['Class'];
            $Class = $_SESSION['Class'];
            $_SESSION['Login_type'] = $_POST['Login_type'];
            $_SESSION['Username'] = $_POST['Username'];
            if($Check == 1){
            $_SESSION['subject1'] = $_POST['S1'];
            $_SESSION['subject2'] = $_POST['S2'];
            $_SESSION['subject3'] = $_POST['S3'];
            $_SESSION['subject4'] = $_POST['S4'];
            $_SESSION['subject5'] = $_POST['S5'];
            $_SESSION['subject6'] = $_POST['S6'];
            echo "<script>window.location='Result.php';</script>";
             }
             else if($Check == 3){
            $_SESSION['subject1'] = $_POST['S1'];
            $_SESSION['subject2'] = $_POST['S2'];
            $_SESSION['subject3'] = $_POST['S3'];
            $_SESSION['subject4'] = $_POST['S4'];
            $_SESSION['subject5'] = $_POST['S5'];
            $_SESSION['subject6'] = $_POST['S6'];
            $_SESSION['subject7'] = $_POST['S7'];
            $_SESSION['subject8'] = $_POST['S8'];
            echo "<script>window.location='Result.php';</script>";
             }
             else if($Check == 4){
            $_SESSION['subject1'] = $_POST['S1'];
            $_SESSION['subject2'] = $_POST['S2'];
            $_SESSION['subject3'] = $_POST['S3'];
            $_SESSION['subject4'] = $_POST['S4'];
            $_SESSION['subject5'] = $_POST['S5'];
            $_SESSION['subject6'] = $_POST['S6'];
            $_SESSION['subject7'] = $_POST['S7'];
            $_SESSION['subject8'] = $_POST['S8'];
            echo "<script>window.location='Result.php';</script>";
             }
            ?>
            <style>
                .class{
                    display: none;
                }
                <?php } ?>