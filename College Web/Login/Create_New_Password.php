<?php
session_start();

if (empty($_SESSION['Login_type'])) {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: Login.php'));
    }
    
include "../php files/db_connection.php";

if(isset($_POST['Reset']))
{
    $New_Password = $_POST['New_Password'];
    $Confirm_Password = $_POST['Confirm_Password'];
    $Count = 0;
    
    if(strlen($New_Password) < 9  || strlen($Confirm_Password) < 9 && $New_Password == $Confirm_Password){
        echo "<center><strong style='color: red;'>Your Password is too small. Enter More than 8 character in password.</strong><br></center>";
        $Count = 1;
        
    }
    else if($New_Password != $Confirm_Password){
        echo "<center><strong style='color:red;'>Your Entered Passwords are different from each other.Enter Same Password.</strong><br></center>";
        $Count = 1;
    }
    else if(!preg_match("#[0-9]+#", $New_Password)) {
            echo "<center><strong style='color: red;'>Your Password Must Contain At Least 1 Number!</strong><br></center>";
        $Count = 1;
        
        }
    else if(!preg_match("#[A-Z]+#", $New_Password)) {
           echo "<center><strong style='color: red;'>Your Password Must Contain At Least 1 Capital Letter!</strong><br></center>";
        $Count = 1;
        
        }
    else if(!preg_match("#[a-z]+#", $New_Password)) {
            echo "<center><strong style='color: red;'>Your Password Must Contain At Least 1 Lowercase Letter!</strong><br></center>";
        $Count = 1;
        }
    
    //Check Old And New Passwords
    //Director
    $sql = "SELECT Password FROM `Login` WHERE Login_type='Director'";
    
    $check = mysqli_query($conn, $sql);
   if($_SESSION['Login_type'] == "Director")
   {
    while($Match = $check->fetch_assoc())
    {
        if( $New_Password == $Match['Password']){
        echo "<center><strong style='color: red;'>Enter Different Password. Your Old And New both Passwords are same.</strong><br></center>";
        $Count = 1;
}
        }
    }
   
   //Clerk
   $sql = "SELECT Password FROM `Login` WHERE Login_type='Clerk'";
    
    $check = mysqli_query($conn, $sql);
   if($_SESSION['Login_type'] == "Clerk")
   {
    while($Match = $check->fetch_assoc())
    {
        if( $New_Password == $Match['Password']){
        echo "<center><strong style='color: red;'>Enter Different Password. Your Old And New both Passwords are same.</strong><br></center>"; 
        $Count = 1;
}
    }
   }
   
  /* //Librarian
   $sql = "SELECT Password FROM `Login` WHERE Login_type='Librarian'";
    
    $check = mysqli_query($conn, $sql);
   if($_SESSION['Login_type'] == "Librarian")
   {
    while($Match = $check->fetch_assoc())
    {
        if( $New_Password == $Match['Password']){
        echo "<center><h4 style='color: red;'>Enter Different Password. Your Old And New both Passwords are same.</h4></center>"; 
        $Count = 1;
}
   }
   }*/
   
   //Faculties
   $Username = $_SESSION['Username'];
   
   $sql = "SELECT Password FROM `Faculties` WHERE Endorsement_No='$Username'";
    
    $check = mysqli_query($conn, $sql);
   if($_SESSION['Login_type'] == "Faculty")
   {
    while($Match = $check->fetch_assoc())
    {
        if( $New_Password == $Match['Password']){
        echo "<center><strong style='color: red;'>Enter Different Password. Your Old And New both Passwords are same.</strong><br></center>";
        $Count = 1;
}
        }
    }
   
   //Student
   $Username = $_SESSION['Username'];
   
   $sql = "SELECT Password FROM `Student Registration` WHERE Enrollment_No='$Username'";
    
    $check = mysqli_query($conn, $sql);
   if($_SESSION['Login_type'] == "Student")
   {
    while($Match = $check->fetch_assoc())
    {
        if( $New_Password == $Match['Password']){
        echo "<center><strong style='color: red;'>Enter Different Password. Your Old And New both Passwords are same.</strong><br></center>";
        $Count = 1;
}
        }
    }
    
    //Director new password
    if($_SESSION['Login_type'] == 'Director' && $New_Password == $Confirm_Password && $Count != 1){
        $Confirm_Password = md5($Confirm_Password);
        $sql = "UPDATE `Login` SET Password='$Confirm_Password' WHERE Login_Type='Director'";
        $Result=mysqli_query($conn, $sql);
        if($Result){
        echo "<center><h4 style='color: white; background-color: green;'>";
        echo $_SESSION['Login_type'];
        echo " Password has been changed.</h4></center>";
        $sql1 = "SELECT Email from `Login` WHERE Login_type = 'Director'";
        $To = mysqli_query($conn, $sql1);
        $Subject = "Forgot Password";
        $message = "Your Password has been changed Successfully. \nYour New Password : " .$Confirm_Password;
        while($Match=$To -> fetch_assoc()){
        if(mail($Match['Email'], $Subject, $message)){
        session_destroy();
        //redirection
         echo '<script>window.location="Login.php"</script>';
        }
        }
        }
    }
    //clerk new password
    else if($_SESSION['Login_type'] == 'Clerk' && $New_Password == $Confirm_Password && $Count != 1){
        $Confirm_Password = md5($Confirm_Password);
        $sql = "UPDATE `Login` SET Password='$Confirm_Password' WHERE Login_Type='Clerk'";
        $Result=mysqli_query($conn, $sql);
        if($Result){
        echo "<center><h4 style='color: white; background-color: green;'>";
        echo $_SESSION['Login_type'];
        echo " Password has been changed.</h4></center>";
        }
        
        $sql1 = "SELECT Email from `Login` WHERE Login_type = 'Clerk'";
$To = mysqli_query($conn, $sql1);
        $Subject = "Forgot Password";
        $message = "Your Password has been changed Successfully. \nYour New Password : " .$Confirm_Password;
        while($Match=$To -> fetch_assoc()){
        if(mail($Match['Email'], $Subject, $message)){
        session_destroy();
        //redirection
         echo '<script>window.location="Login.php"</script>';
        }
        }
    }
    // //Librarian new password
    // else if($_SESSION['Login_type'] == 'Librarian' && $New_Password == $Confirm_Password && $Count != 1){
    $Confirm_Password = md5($Confirm_Password);//     
    $sql = "UPDATE `Login` SET Password='$Confirm_Password' WHERE Login_Type='Librarian'";
    //     $Result=mysqli_query($conn, $sql);
    //     if($Result){
    //     echo "<center><h4 style='color: white; background-color: green;'>";
    //     echo $_SESSION['Login_type'];
    //     echo " Password has been changed.</h4></center>";
    //     }
    //$sql1 = "SELECT Email From `Login` WHERE Login_type='Librarian'";
//$To = mysqli_query($conn, $sql1);
//        $Subject = "Forgot Password";
//$message = "Your Password has been changed Successfully. \nYour New Password : " .$Confirm_Password;
//        while($Match=$To -> fetch_assoc()){
//        if(mail($Match['Email'], $Subject, $message)){
//        session_destroy();
        //redirection
//         echo '<script>window.location="Login.php"</script>';
//       }
//        }
//}
//}
    
    //Faculty new password
     if($_SESSION['Login_type'] == 'Faculty' && $New_Password == $Confirm_Password && $Count != 1){
        $sql = "UPDATE `Faculties` SET Password='$Confirm_Password' WHERE Endorsement_No='$Username'";
        $Result=mysqli_query($conn, $sql);
        if($Result){
        echo "<center><h4 style='color: white; background-color: green;'>";
        echo $_SESSION['Login_type'];
        echo " Password has been changed.</h4></center>";
        $sql1 = "SELECT Email From `Faculties` WHERE Endorsement_No = '$Username'";
        $To = mysqli_query($conn, $sql1);
        $Subject = "Forgot Password";
        $message = "Your Password has been changed Successfully. \nYour New Password : " .$Confirm_Password;
        while($Match=$To -> fetch_assoc()){
        if(mail($Match['Email'], $Subject, $message)){
        session_destroy();
        //redirection
         echo '<script>window.location="Login.php"</script>';
        }
        }
        }
    }
    
    //Student new password
    if($_SESSION['Login_type'] == 'Student' && $New_Password == $Confirm_Password && $Count != 1){
        $sql = "UPDATE `Student Registration` SET Password='$Confirm_Password' WHERE Enrollment_No=$Username";
        $Result=mysqli_query($conn, $sql);
        if($Result){
        echo "<center><h4 style='color: white; background-color: green;'>";
        echo $_SESSION['Login_type'];
        echo " Password has been changed.</h4></center>";
        $sql1 = "SELECT Email From `Student Registration` WHERE Enrollment_No = '$Username'";
        $To = mysqli_query($conn, $sql1);
        $Subject = "Forgot Password";
        $message = "Your Password has been changed Successfully. \nYour New Password : " .$Confirm_Password;
        while($Match=$To -> fetch_assoc()){
        if(mail($Match['Email'], $Subject, $message)){
        session_destroy();
        //redirection
         echo '<script>window.location="Login.php"</script>';
        }
        }
    }
    }
}
//Close Connection
$conn->close();
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
    <link rel="stylesheet" href="../CSS Files/Create_New_Password.css">
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
            <legend>Create New Password</legend>
<center><img src="../../Images/Login/Logged_in.jpg" style='background-color: white; height: 96px; width: 95px; border-radius: 59px;'><br>
<?php
if($_SESSION['Login_type'] != ("Student" && "Faculty")){
echo "<h4 style='color: white;'>";
echo  $_SESSION['Login_type'];
echo "</h4>";
}
else{
    echo "<h4 style='color: white;'>";
echo  $_SESSION['Username'];
echo "</h4>";
}
?>
</center>
<center>
                <p>
            <input type="Password" name="New_Password" id="New_Password" placeholder="Enter New Password *" required><br><br>
            <input type="Password" name="Confirm_Password" id="Confirm_Password" placeholder="Confirm New Password *" required></center><br>
            <center><input type="submit" name="Reset" value="Reset Password" id="Reset"></center>
            </fieldset>
        </form>
    </section>
</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>