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

if(isset($_POST['Change_Password'])){
    $_SESSION['Login_type'] = 'Clerk';
    $_SESSION['Username'];
    header( 'location: Change Password.php');
}

if(isset($_POST['Change_Email'])){
    $_SESSION['Login_type'] = 'Clerk';
    $_SESSION['Username'];
    header( 'location: Change Email.php');
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
        .see:hover{
            background-color: green;
            color: white;
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
    <a href="Student Registration.php">Student Registration</a>
    <a href="Students Data.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Students Data</a>
    <a href="Term Grant.php">Term Grant</a>
    <a href="Fees Info.php">Fees Info</a>
    <a href="Manage Queries.php">Manage Queries</a>
    <a href="Upload Press">Upload Press</a>
</div>
</section>

<main>
    <hr>
        <center><h2 style='color: white; background-color: red; border-radius: 29px; padding-bottom: 4.2px;'>Students Data</h2></center>
        <hr>
        <br>
        <center><h4 style='color: white; background-color: green; border-radius: 29px; padding: 9px; padding-bottom: 9.2px; display: inline;'>Search by Enrollment No</h4></center><br>
    <center>
        <div style='background-color: skyblue; display: inline-block; border-radius: 15px; width: 92%; padding: 9px;' id="pathSelection">
    <form action="" method="POST">
        <input type="number" id="Enrollment_No" name="Enrollment_No" placeholder="Enter Student's Enrollment No" style='height: 29px;'><p>
        <input type="submit" value="Search" name="see" id='see' style="font-size: 19.9px; color: black; background-color: white;" class="see">
        </div>
        
        </center>
        <p>
        <center>
       <?php
       $Count = 0;
       if(!empty($_POST['Enrollment_No']) and isset($_POST['see'])){
         $spuid = $_POST['Enrollment_No'];
         
    $sql = "SELECT *FROM `Student Registration` WHERE Enrollment_No='$spuid'";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($spuid == $Match['Enrollment_No']){?>
        <div style="display: inline-block; text-align: left; color: white; background-color: blue; padding: 9px; border-radius: 29px;">
            <h4 style="display: inline;">Enrollment No : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Enrollment_No']; ?></h5><br>
            <h4 style="display : inline;">Student's Name : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Name']; ?></h5><br>
            <h4 style="display : inline;">Course : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Course']; ?></h5><br>
            <h4 style="display : inline;">Current Semester : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Semester']; ?></h5><br>
            <h4 style="display : inline;">Mobile : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Mobile']; ?></h5><br>
            <h4 style="display : inline;">Email : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Email']; ?></h5>
            </div>
    <?php       
    $Count = 1;
     }
    }
     if($Count == 0){
         echo "<h4 style='color: red'>Enrollment No : <span style='color: green;'>$spuid</span> not found in Our database. Enter Valid Enrollment No.</h4>";
     }
     }
?>
</form>
<hr>
<br>
<center><h4 style='color: white; background-color: green; border-radius: 29px; padding: 9px; padding-bottom: 9.2px; display: inline;'>Search by Name</h4></center><br>
<center>
        <div style='background-color: skyblue; display: inline-block; border-radius: 15px; width: 92%; padding: 9px;' id="pathSelection">
    <form action="" method="POST">
        <input type="Text" id="Name" name="Name" placeholder="Enter Student's Name" style='height: 29px;'><p>
        <input type="submit" value="Search" name="see1" id='see' style="font-size: 19.9px; color: black; background-color: white;" class="see">
        </div>
        
        </center>
        <p>
        <center>
       <?php
       $Count = 0;
       if(!empty($_POST['Name']) and isset($_POST['see1'])){
         $name = strtolower($_POST['Name']);
         
    $sql = "SELECT *FROM `Student Registration` WHERE Name LIKE '%$name%'";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($name == $Match['Name']){?>
        <div style="display: inline-block; text-align: left; color: white; background-color: blue; padding: 9px; border-radius: 29px;">
            <h4 style="display: inline;">Enrollment No : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Enrollment_No']; ?></h5><br>
            <h4 style="display : inline;">Student's Name : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Name']; ?></h5><br>
            <h4 style="display : inline;">Course : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Course']; ?></h5><br>
            <h4 style="display : inline;">Current Semester : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Semester']; ?></h5><br>
            <h4 style="display : inline;">Mobile : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Mobile']; ?></h5><br>
            <h4 style="display : inline;">Email : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Email']; ?></h5>
            </div>
        <p>
    <?php       
    $Count = 1;
     }
    }
     if($Count == 0){
         echo "<h4 style='color: red'>Name : <span style='color: green;'>$name</span> not found in Our database. Enter Valid Name.</h4>";
     }
     }
?>
</form>

<hr>
<br>
<center><h4 style='color: white; background-color: green; border-radius: 29px; padding: 9px; padding-bottom: 9.2px; display: inline;'>Search Whole Class</h4></center><br>
<center>
        <div style='background-color: skyblue; display: inline-block; border-radius: 15px; width: 92%; padding: 9px;' id="pathSelection">
    <form action="" method="POST">
        <select name="Class" style="height: 29.4px; width: 51%;" required>
            <option selected>Select a Class</option>
            <option value="MCA Sem-1">MCA Sem-1</option>
            <option value="MCA Sem-2">MCA Sem-2</option>
            <option value="MCA Sem-3">MCA Sem-3</option>
            <option value="MCA Sem-4">MCA Sem-4</option>
            
            <option value="MBA Sem-1">MBA Sem-1</option>
            <option value="MBA Sem-2">MBA Sem-2</option>
            <option value="MBA Sem-3">MBA Sem-3</option>
            <option value="MBA Sem-4">MBA Sem-4</option>
        </select><p>
        <input type="submit" value="Search" name="see2" id='see' style="font-size: 19.9px; color: black; background-color: white;" class="see">
        </div>
        
        </center>

        <p>
            
        <center>
       <?php
       $Count = 0;
       if(!empty($_POST['Class']) and isset($_POST['see2'])){
       ?>
          <?php
         $Class = $_POST['Class'];
         if($Class == 'MCA Sem-1'){
              $sql = "SELECT *FROM `Student Registration` WHERE Course='MCA' AND Semester='Sem-1'";
              $_SESSION['sql'] = $sql;
$_SESSION['Class'] = $Class;
         }
         else if($Class == 'MCA Sem-2'){
             $sql = "SELECT *FROM `Student Registration` WHERE Course='MCA' AND Semester='Sem-2'";
             $_SESSION['sql'] = $sql;
$_SESSION['Class'] = $Class;
         }
         else if($Class == 'MCA Sem-3'){
             $sql = "SELECT *FROM `Student Registration` WHERE Course='MCA' AND Semester='Sem-3'";
             $_SESSION['sql'] = $sql;
$_SESSION['Class'] = $Class;
         }
         else if($Class == 'MCA Sem-4'){
             $sql = "SELECT *FROM `Student Registration` WHERE Course='MCA' AND Semester='Sem-4'";
             $_SESSION['sql'] = $sql;
$_SESSION['Class'] = $Class;
         }
         else if($Class == 'MBA Sem-1'){
             $sql = "SELECT *FROM `Student Registration` WHERE Course='MBA' AND Semester='Sem-1'";
             $_SESSION['sql'] = $sql;
$_SESSION['Class'] = $Class;
         }
         else if($Class == 'MBA Sem-2'){
             $sql = "SELECT *FROM `Student Registration` WHERE Course='MBA' AND Semester='Sem-2'";
             $_SESSION['sql'] = $sql;
$_SESSION['Class'] = $Class;
         }
         else if($Class == 'MBA Sem-3'){
             $sql = "SELECT *FROM `Student Registration` WHERE Course='MBA' AND Semester='Sem-3'";
             $_SESSION['sql'] = $sql;
$_SESSION['Class'] = $Class;
         }
         else if($Class == 'MBA Sem-4'){
             $sql = "SELECT *FROM `Student Registration` WHERE Course='MBA' AND Semester='Sem-4'";
             $_SESSION['sql'] = $sql;
$_SESSION['Class'] = $Class;
         }
    ?>
<?php
$sql = $_SESSION['sql'];
$results = mysqli_query($conn, $sql);
$records = mysqli_num_rows($results);
        if($records > 0){?>
    <table border=2>
            <tr>
            <th>Enrollment No</th>
            <th>Student's Name</th>
            <th>Mobile No</th>
            <th>Email</th>
            </tr>
            <?php
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>".$Match['Enrollment_No']."</td>";
    echo "<td>".$Match['Name']."</td>";
    echo "<td>".$Match['Mobile']."</td>";
    echo "<td>".$Match['Email']."</td>";
    }
       }
       }
?>
        </table>
</form>
<p>
    <?php if(isset($_POST['see2'])){?>
    <form action="" method="POST">
        <?php 
$sql = $_SESSION['sql'];
$results = mysqli_query($conn, $sql);
$records = mysqli_num_rows($results);
        if($records > 0){?>
    <select name="choice">
        <option value="1" selected>Take Print With Mobile No & Email</option>
        <option value="0">Take Print Without Mobile No & Email
        </option>
    </select>
    <input type="submit" name="Print" Value="Print" style="font-color: white; background-color: green;">
        <?php }
        else{
            $class = $_SESSION['Class'];
echo "<center><h4 style='color: red;'>Students are not registered in <span style='color: green;'>$class.</span></h4></center>";
        }
        ?>
    </form>
    <?php }?>
<?php
if(isset($_POST['Print'])){
        $_SESSION['choice'] = $_POST['choice'];
echo "<script>window.location = 'Print.php';</script>";
    }
?>
</main>
<?php
include('footer.php');
ob_end_flush();
?>
</body>
</html>