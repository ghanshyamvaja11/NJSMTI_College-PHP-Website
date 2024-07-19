<?php
session_start();
if (empty($_SESSION['Login_type'])) {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: Login.php'));
    }
    
//Database Connection
include '../php files/db_connection.php';

$key = "";
 if(isset($_POST['Varify'])){
$_SESSION['Login_type'];
$_SESSION['Username'];
$key = $_POST['key'];
$Count1 = $Count2 = $Count3 = 1;
//Director Key varification
 $sql = "SELECT *FROM `Login` WHERE Login_type='Director'";
    
    $check = mysqli_query($conn, $sql);
   if($_SESSION['Login_type'] == "Director")
   {
    while($Match = $check->fetch_assoc())
    {
        if($key == $Match['Secret_Key']){
            $OTP =  rand(100000, 999999);
            
        $sql = "UPDATE `Login` SET `Secret_Key`= '$OTP' WHERE `Login_type`='Director'";
        mysqli_query($conn, $sql);
    $Count1 = 0;
   echo "<script>window.location= 'Create_New_Password.php'</script>";
   exit();
}
else
{
    if($Count1 == 1){
    echo "<center><h4 style='color: red;'>Enter valid Secret Key</h4></center>";
    break;
    }
}
}
    }
    
    //Clerk Key varification
  if($_SESSION['Login_type'] == "Clerk")
  {
      $sql = "SELECT *FROM `Login` WHERE Login_type='Clerk'";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($key == $Match['Secret_Key']){

            $OTP =  rand(100000, 999999);
            
        $sql = "UPDATE `Login` SET `Secret_Key`= '$OTP' WHERE `Login_type`='Clerk'";
        mysqli_query($conn, $sql);
        
  header("location: Create_New_Password.php", true, 301);
}
else
{
    echo "<center><h4 style='color: red;'>Enter valid Secret Key</h4></center>";
}
}
    }
    
   /* //Librarian Key varification
  if($_SESSION['Login_type'] == "Librarian")
  {
      $sql = "SELECT *FROM `Login` WHERE Login_type='Librarian'";
    
    $check = mysqli_query($conn, $sql);

      $OTP =  rand(100000, 999999);
            
        $sql = "UPDATE `Login` SET `Secret_Key`= '$OTP' WHERE `Login_type`='Librarian'";
        mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($key == $Match['Secret_Key']){
    
  header("location: Create_New_Password.php", true, 301);
}
else
{
    echo "<h4 style='color: red;'>Enter valid Secret Key<h4>";
}
}
    } */
    
    
    //Faculties Key varification
  if($_SESSION['Login_type'] == "Faculty")
   {
       $Username = $_SESSION['Username'];
       $sql = "SELECT *FROM `Faculties` WHERE Endorsement_No='$Username'";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($key == $Match['Secret_Key']){
            $OTP =  rand(100000, 999999);
            
        $sql = "UPDATE `Faculties` SET `Secret_Key`= '$OTP' WHERE `Endorsement_No`=$Username";
        mysqli_query($conn, $sql);
    $Count2 = 0;
 echo "<script>window.location= 'Create_New_Password.php'</script>";
 exit();
}
else{
    if($Count2 == 1){
        echo "<center><h4 style='color: red;'>Enter valid Secret Key</h4></center>";
        break;
    }
}
}
    }
    
    //Student Key varification
   if($_SESSION['Login_type'] == "Student")
   {
       $Username = $_SESSION['Username'];
       $sql = "SELECT *FROM `Student Registration` WHERE `Enrollment_No`=$Username";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($key == $Match['Secret_Key']){
            $OTP =  rand(100000, 999999);
            
        $sql = "UPDATE `Student Registration` SET `Secret_Key`= '$OTP' WHERE `Enrollment_No`=$Username";
        mysqli_query($conn, $sql);
    $Count3 = 0;
echo "<script>window.location= 'Create_New_Password.php' </script>";
exit();
}
else
{
    if($Count3 == 1){
    echo "<center><h4 style='color: red;'>Enter valid Secret Key</h4></center>";
    break;
    }
}
}
    }
 }
 mysqli_close($conn);

$key = "";
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
    <link rel="stylesheet" href="../CSS Files/Forgot_Password.css">
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
            <legend>Key Varification</legend>
<center><img src="../../Images/Login/Logged_in.jpg" style='background-color: white; height: 96px; width: 95px; border-radius: 59px;'><br>
<?php
if($_SESSION['Login_type'] != ("Student" && "Faculty"))
{
echo "<h4 style='color: white;'>";
echo  $_SESSION['Login_type'];
echo "</h4>";
}
else
{
    echo "<h4 style='color: white;'>" . $_SESSION['Username'] . "</h4>";
}
?>
</center>
                <p>
            <input type="text" name="key" id="key" placeholder="Secret key *" required><br><br>
            <center><input type="submit" name="Varify" value="Varify" id="Check"></center>
            </fieldset>
        </form>
        <h4 style='color: white; background-color: green;'>Check your Registered Email Inbox.</h4>
    </section>
</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>