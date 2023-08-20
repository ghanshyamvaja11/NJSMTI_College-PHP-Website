<?php
ob_start();
session_start();
if (empty($_SESSION['Login_type']) && empty($_SESSION['Username'])) {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: Login.php'));
    }

//Database Connection
include '../php files/db_connection.php';
    
$Login_type = $Username = $Password = $OTP = "";
 if(isset($_POST['Verify'])){
$OTP = $_POST['OTP'];
$Count = "";

    //OTP Validation for Director
    $sql = "SELECT *FROM `Login` WHERE Login_type='Director'";
    
    $check = mysqli_query($conn, $sql);
   if($_SESSION['Login_type'] == "Director")
   {
    while($Match = $check->fetch_assoc())
    {
        if($OTP == $Match['OTP']){
            
        //Change old OTP using rand()
        $OTP = rand(100000, 999999);
        $sql = "UPDATE `Login` SET `OTP`='$OTP' WHERE `Login_type`='Director'";
        mysqli_query($conn, $sql);
    
    $Count = 0;
    header("location: ../Director/Welcome.php", true, 301);
    
}
else{
       echo "<center><h4 style='color: red; display: block-inline;'>Enter Valid OTP.</h4></center>";
       break;
   }
        }
   }
  else if($_SESSION['Login_type'] == "Clerk")
  {
    //OTP Validation for Clerk
    $sql = "SELECT *FROM `Login` WHERE Login_type='Clerk'";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($OTP == $Match['OTP']){
            
        //Change old OTP using rand()
        $OTP = rand(100000, 999999);
        $sql = "UPDATE `Login` SET `OTP`='$OTP' WHERE `Login_type`='Clerk'";
        mysqli_query($conn, $sql);
        
    header("location: ../Clerk/Welcome.php", true, 301);
}
else{
    echo "<center><h4 style='color: red; display: block-inline;'>Enter Valid OTP.</h4></center>";
}
        }
  }
//   else if($_SESSION['Login_type'] == "Librarian")
//   {
//     //OTP Validation for Librarian
//     $sql = "SELECT *FROM `Login` WHERE Login_type='Librarian'";
    
//     $check = mysqli_query($conn, $sql);
//     while($Match = $check->fetch_assoc())
//     {
//         if($OTP == $Match['OTP']){
            
//         //Change old OTP using rand()
//         $OTP = rand(100000, 999999);
//         $sql = "UPDATE `Login` SET `OTP`='$OTP' WHERE `Login_type`='Librarian'";
//         mysqli_query($conn, $sql);
        
//     header("location: ../Librarian/Welcome.php", true, 301);
// }
// else{
//     echo "<center><h4 style='color: red; display: block-inline;'>Enter valid OTP.</h4></center>";
// }
//         }
//     }
   
  /*else if($_SESSION['Login_type'] == "Student")
   {
        //OTP Validation for Student
        $Username = $_SESSION['Username'];
       $sql = "SELECT *FROM `Student Registration`";
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($OTP == $Match['OTP']){
            
        //Change old OTP using rand()
        $OTP = rand(100000, 999999);
        $sql = "UPDATE `Student Registration` SET `OTP`='$OTP' WHERE `Enrollment_No`=$Username";
        mysqli_query($conn, $sql);
        
    header("location: ../Student Corner/Welcome_User.php", true, 301);
    
}
 else{
    echo "<center><h4 style='color: red; display: block-inline;'>Enter Valid OTP.</h4></center>";
}
        }
   }*/
   
   if($_SESSION['Login_type'] == "Faculty")
   {
       $Username = $_SESSION['Username'];
       $sql = "SELECT *FROM `Faculties` WHERE `Endorsement_No`='$Username'";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        //echo $Match['OTP'];
        if($OTP == $Match['OTP']){
    //Old OTP Change using rand()
            $OTP = rand(100000, 999999);
        $sql = "UPDATE `Faculties` SET `OTP`= '$OTP' WHERE `Endorsement_No`=$Username";
        mysqli_query($conn, $sql);
    
    $Count = 0;
   echo "<script>window.location= '../Faculties/Welcome.php'</script>";
   exit();
}
else{
        echo "<center><h4 style='color: red; display: block-inline;'>Enter Valid OTP.</h4></center>";
        break;
    }
}
    }
   
   if($_SESSION['Login_type'] == "Student")
   {
       $Username = $_SESSION['Username'];
       $sql = "SELECT *FROM `Student Registration` where Enrollment_No=$Username";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        // echo $Match['OTP'];
        if($OTP == $Match['OTP']){
    //Old OTP Change using rand()
            $OTP = rand(100000, 999999);
            
        $sql = "UPDATE `Student Registration` SET `OTP`= '$OTP' WHERE Enrollment_No=$Username";
        mysqli_query($conn, $sql);
    
    
    $Count = 0;
   echo "<script>window.location= '../Student Corner/Welcome_User.php'</script>";
   exit();
}
else{
        echo "<center><h4 style='color: red; display: block-inline;'>Enter Valid OTP.</h4></center>";
        break;
    }
}
    }
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
    <link rel="stylesheet" href="../CSS Files/Login.css">
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
#Verify:hover{
    background-color: red;
    font-color: white;
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
<nav class="navbar">
<div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
    <a href="/index.php">HOME</a>
    <a href="../php files/Courses.php">Courses</a>
    <a href="../Student Corner/Welcome.php">Student Corner</a>
    <a href="../php files/Infrastructure.php">Infrastructure</a>
    <a href="../php files/Events.php">Events</a>
    <a href="../php files/About us.php">About us</a>
    <a href="../php files/Downloads.php">Downloads</a>
    <a href="../php files/Contact us.php">Contact us</a>
</nav>
<main>
    <section>
        <p>
        <center>
        <form action="" method="POST">
            <fieldset>
            <legend>Login with OTP</legend>
<center><img src="../../Images/Login/Logged_in.jpg" style='background-color: white; height: 96px; width: 95px; border-radius: 59px;'><br>
<?php 
if($_SESSION['Login_type'] != ("Student" && "Faculty"))
{
echo "<h4 style='color: white;'>";
echo $_SESSION['Login_type'];
echo "</h4>";
}
else
{
echo "<h4 style='color: white;'>";
echo $_SESSION['Username'];
echo "</h4>";
}
?>
</center>
                <p>
            <input type="Number" name="OTP" id="Username" placeholder="Enter OTP *" required><br><br>
            <center><input type="submit" name="Verify" value="Verify" id="Verify" style="font-size: 19.9px; border-radius: 29.9px; font-color: black; font-weight: bolder;  background-color: white;">
            </center>
            </fieldset>
        </form>
        <h4 style="color: white; background-color: green;">Check your Registered Email's Inbox.</h4>
    </section>
        
</main>
<hr>
<?php
include('footer.php');
ob_end_flush();
?>
</body>
</html>