<?php
ob_start();
session_start();
include "../php files/db_connection.php";
if (empty($_SESSION['Username'] && $_SESSION['Password']) || $_SESSION['Username'] != 'Clerk@njsmti') {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: ../Login/Login.php'));
    }
//Input fields validation
if(isset($_POST['Logout'])){
    session_destroy();
    header( 'location: ../Login/Login.php');
}

if(isset($_POST['Change_Email'])){
    $_SESSION['Login_type'] = 'Clerk';
    $_SESSION['Username'];
    header( 'location: Change Password.php');
}
if(isset($_POST['Change_Password'])){
    $_SESSION['Login_type'] = 'Clerk';
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
    <link rel="stylesheet" href="../CSS Files/Admin_Welcome.css">
     <link rel="stylesheet" href="../CSS Files/Register.css">
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
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Clerk Desk</h1></center>
<div class="navbar">
    <div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
    <a href="Welcome.php">HOME</a>
    <a href="Post new Announcements.php">Do Announcements</a>
    <a href="Student Registration.php"  style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Student Registration</a>
    <a href="Students Data.php">Students Data</a>
        <a href="Term Grant.php">Term Grant</a>
    <a href="Fees Info.php">Fees Info</a>
    <a href="Manage Queries.php">Manage Queries</a>
    <a href="Upload Press">Upload Press</a>
</div>
</section>

<?php
$Enrollment_No = $mobile = $OTP = 0;
$name = $course = $semester = $email = $password = $Confirm_password = $Secret_key = "";
$Count = 0;
 if(isset($_POST['Register'])){
     $Enrollment_No = $_POST['Enrollment_No'];
     $name = strtolower($_POST['name']);
     $course = $_POST['course'];
     $semester = $_POST['semester'];
     $mobile = $_POST['mobile'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $Confirm_password = $_POST['Confirm_password'];
     $OTP = rand(100000, 999999);
     $Secret_key =$OTP;
 }
 if($_SERVER['REQUEST_METHOD'] == "POST"){
     echo "<center>";
     //Enrollment_No Validation
     if(strlen($Enrollment_No) != 12){
         echo "<strong style='color: red;'>Enter Valid Enrollment No.(12 Digits). <br></strong>";
         $Count = 1;
     }
    
    //mobile number validation
    if(strlen($mobile) != 10){
         echo "<strong style='color: red;'>Enter Valid Mobile Number. <br></strong>";
         $Count = 1;
     }
     
     //email validation
      if(empty($email)){
        echo "<center><strong>email : </strong>email is required. </center><br>";
    }
    else{
        //Check is email in well formed?
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<center><strong style='color: red;'>email format is not valid. </center><br>";
            $Count = 1;
        }
    }
     
    //password validation
    if(strlen($password) < 9){
        echo "<center><strong style='color: red;'>Your Password is too small. Enter More than 8 character in password.</strong><br></center>";
        $Count = 1;
     }
     
    else if($password != $Confirm_password){
        echo "<center><strong style='color:red;'>Your Entered Passwords are different from each other.Enter Same Password.</strong><br></center>";
        $Count = 1;
    }
    else if(!preg_match("#[0-9]+#", $password)) {
            echo "<center><strong style='color: red;'>Your Password Must Contain At Least 1 Number!</strong><br></center>";
            $Count = 1;
        }
    else if(!preg_match("#[A-Z]+#", $password)) {
           echo "<center><strong style='color: red;'>Your Password Must Contain At Least 1 Capital Letter!</strong><br></center>";
           $Count = 1;
        }
    else{
    if(!preg_match("#[a-z]+#", $password)) {
            echo "<center><strong style='color: red;'>Your Password Must Contain At Least 1 Lowercase Letter!</strong><br></center>";
            $Count = 1;
        }
    }
        if(isset($_POST['Register']) && $Count != 1){
        $Confirm_Password = md5($password);
        $sql = "INSERT INTO `Student Registration`(Enrollment_No, Name, Course, Semester, Mobile, Email, Password, OTP, Secret_Key) VALUES ('$Enrollment_No', '$name', '$course', '$semester', '$mobile', '$email', '$Confirm_Password', '$OTP', '$Secret_key')";
        
        mysqli_query($conn, $sql); 
            echo "<h4 style='color: green;'>Student Registration is successful.</h4><br>";
        $subject = "NJSMTI - Your Username & Password";
        $message = "Welcome " . $name .", \n \nYour Username : " . $Enrollment_No . "\nYour Password : " . $password;
        mail($email, $subject, $message);
        echo "</center>";
        }
}

$Enrollment_No = $mobile = $OTP = 0;
$name = $course = $semester = $email = $password = $Confirm_password = $Secret_key = "";
?>

<main>
    <section>
        <p>
        <center>
        <form action="" method="POST">
            <fieldset>
            <legend>Student Registration</legend>
<center><img src="../../Images/Login/Logged_in.jpg" style='background-color: white; height: 96px; width: 95px; border-radius: 59px;'></center>
                <p>
                <input type="number" id="Enrollment_No" class="fields" placeholder="Enter Your Enrollment No *" name="Enrollment_No" inputmod="numeric" required /><br><br>
                <input type="text" id="name" class="fields" placeholder="Enter Your Name *" name="name" required><br><br>
                <select name="course" id="course" class="fields" required>
                    <option selected>Select Your Course</option>
                    <option>MCA</option>
                    <option>MBA</option>
                </select><br>
                <select name="semester" id="semester" class="fields" required>
                    <option selected>Select Current Semester</option>
                    <option value="Sem-1">Sem-1</option>
                    <option value="Sem-2">Sem-2</option>
                    <option value="Sem-3">Sem-3</option>
                    <option value="Sem-4">Sem-4</option>
                </select><br><br>
            <input type="Number" name="mobile" id="mobile" placeholder="Enter Your Mobile Number *" class="fields" required><br>
            
  <input type="email" name="email" id="email" placeholder="Enter Your Email *" class="fields" required><br><br>
  
            <input type="password" name="password" id="Password" placeholder="Enter Your Password *" class="fields" required><br>
            <input type="password" name="Confirm_password" id="Password" placeholder="Confirm Password *" class="fields" required><br><br>
            <center><input type="submit" name="Register" value="Register" id="Register"></center>
        </form>
    </section>
</main>
<hr>
<?php
include('footer.php');
ob_end_flush();
?>
</body>
</html>