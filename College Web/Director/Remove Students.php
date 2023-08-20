<?php
session_start();
if (empty($_SESSION['Username'] && $_SESSION['Password']) || $_SESSION['Username'] != 'Director@njsmti') {        
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    die( header( 'location: ../Login/Login.php'));
    }
    
//Input fields validation
if(isset($_POST['Logout'])){
    session_destroy();
    header( 'location: ../Login/Login.php');
}

if(isset($_POST['Change_Password'])){
    $_SESSION['Login_type'] = 'Director';
    $_SESSION['Username'];
    header( 'location: Change Password.php');
}

if(isset($_POST['Change_Email'])){
    $_SESSION['Login_type'] = 'Director';
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
    <link rel="stylesheet" href="../CSS Files/Manage_queries.css">
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
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 2.9px;'>Director Desk</h1></center>
<div class="navbar">
    <div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
    <a href="Welcome.php">HOME</a>
    <a href="Upload_files.php">Upload files</a>
    <a href="Manage_files.php">Manage files</a>
    <a href="Post new Announcements.php">Do Announcements</a>
    <a href="Add_Faculties.php">Add Faculties</a>
    <a href="Remove Faculties.php">Remove Faculties</a>
    <a href="Students Data.php">Students Data</a>
    <a href="Term Grant.php">Term-Grant</a>
    <a href="Fees Info.php">Recieve Fees</a>
    <a href="Remove Students.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Remove Students</a>
    <a href="Manage_Queries.php">Manage Queries</a>
    <a href="Upload Press.php">Upload Press</a>
</div>
</section>

<main>
    <hr>
    <center>
        <div id="sec">
        <h2>Remove Students</h2>
        <div id="form">
            <br>
        <h4 style="color: white; background-color: red; display: inline; padding: 4.9px; border-radius: 29.9px;">Delete by SPUID</h4><br><br>
        <form Method='POST'>
            <center>
        <input type='Text' placeholder='Enter Students`s SPUID *' id="SPUID" name="Enrollment_No" style="width: 54%; height: 19.9px;"> &nbsp; &nbsp;
        <input type='submit' value='Delete' id="solved" name="Delete">
           </form>
           <br><br>
           <h4 style="color: white; background-color: red; display: inline; padding: 4.9px; border-radius: 29.9px;">Delete Whole Class</h4>
           <br><br>
        <form Method='POST'>
            <center>
        <Select name="class" style="width: 54%; height: 29.8px;">
            <option Selected>Select class</option> 
            <option value="MCA">MCA Sem-4</option>
            <option value="MBA">MBA Sem-4</option>
            </Select>
            &nbsp; &nbsp;
        <input type='submit' value='Delete' id="solved" name="DeleteClass">
        <br><br>
           </form>
           </div>
           </center>
           </div>
           </center>
           <p>
        <!--PHP Database Code-->
<?php
//Database Connection
include "../php files/db_connection.php";
$Enrollment_No = "";
if(isset($_POST['Delete'])){
        $Enrollment_No = $_POST['Enrollment_No'];
        
        if(empty($Enrollment_No))
        {
            echo "<center><h4 style=\"color: red\">Enter The Student`s SPUID.</h4></center>";
        }
        
        $sql = "SELECT Enrollment_No FROM `Student Registration`";
    $check = mysqli_query($conn, $sql);
    $Count=0;
    while($Match = $check->fetch_assoc())
    {
        if($Enrollment_No == $Match['Enrollment_No']){
         $Count = 1;
         
         $sql = "DELETE FROM `Student Registration` WHERE Enrollment_No='$Enrollment_No'";
         mysqli_query($conn, $sql);
         echo "<center><strong style='color: red;'>Student $Enrollment_No is removed from database.</strong></center>";
         echo "<p>";
         break;
        }
    }
    if($Count == 0 && !empty($Enrollment_No))
        {
            echo "<center><strong style='color: red'>Enter the Valid SPUID.</strong></center>";
            echo "<p>";
        }
    
}
/*//SQl query to select data from database
$sql = "SELECT *FROM `Student Registration`";
$result = mysqli_query($conn, $sql);

 while($data=$result -> fetch_assoc())
  {
      echo "<center>";
      echo "<div id=\"show\">";
      echo "<strong style=\"color : yellow; background-color: black;\">SPUID : </strong>";
      echo "<strong>";
      echo  "<small style='color: white; background-color: black; display: inline; font-size: 15.9px;'>";
      echo $data['Enrollment_No'];
      echo "</small></strong> <br>";
      echo "<strong style=\"color : darkblue;\">Student : </strong>";
      echo "<strong>";
      echo  "<small style='color: Blue; display: inline; font-size: 15.9px;'>";
      echo $data['Name'];
      echo "</strong> <br>";
      echo "<strong style=\"color: darkblue; padding-up: 2px; padding-bottom: .5px;\">Course : </strong>";
      echo "<span style=\"color: black; padding-left: 2px; padding-right: 2px;\">";
      echo $data['Course'];
      echo "</span> <br>";
       echo "<strong style=\"color:darkblue;\">Semester : </strong>";
      echo "<span style='color: black;'>";
      echo $data['Semester'];
      echo "</span> <br>";
      echo "<strong style=\"color:darkblue;\">Mobile No : </strong>";
      echo "<span style='color: black;'>";
      echo $data['Mobile'];
      echo "</span> <br>";
       echo "<strong style=\"color:darkblue;\">Email : </strong>";
      echo "<span style=\"color: black\";>";
      echo $data['Email'];
      echo "</small>";
      echo "</span>";
      echo "</div>";
      echo "<br> <center>";
      echo "<p>";
}*/
  if(isset($_POST['DeleteClass'])){
      if($_POST['class'] == 'MCA')
      {
      $sql = "DELETE FROM `Student Registration` WHERE `Course`='MCA' AND `Semester`='Sem-4'";
      $result = mysqli_query($conn, $sql);
      if($result)
      {
          echo "<center><h4 style='color: red;'>MCA Sem-4 class has been deleted successfully.</h4></center>";
      }
      }
      if($_POST['class'] == 'MBA')
      {
      $sql = "DELETE FROM `Student Registration` WHERE `Course`='MBA' AND `Semester`='Sem-4'";
      $result = mysqli_query($conn, $sql);
      if($result)
      {
          echo "<center><h4 style='color: red;'>MBA Sem-4 class has been deleted successfully.</h4></center>";
      }
      }
  }
mysqli_close($conn);
?>
</div>
    </center>
</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>