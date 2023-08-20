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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .disclaimer{
            display: none;
        }
        a .imgs{
    height: 15%;
    width: 31%;
    border: 2px solid black;
    border-radius: 19.9px;
}

a .imgs:hover{
    border: 2px solid green;
}
    </style>
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
</section>

<main>
      <center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Director Desk</h1></center>
        
<hr>
<section>
    <a href="Upload_files.php"><img src="../../Images/Director/img1.jpg" class="imgs"></a>
    <a href="Manage_files.php"><img src="../../Images/Director/img2.jpg" class="imgs"></a>
  <a href="Post new Announcements.php"><img src="../../Images/Director/img3.jpg" class="imgs"></a>
  <a href="Add_Faculties.php"><img src="../../Images/Director/img4.jpg" class="imgs"></a>
  <a href="Remove Faculties.php"><img src="../../Images/Director/img5.jpg" class="imgs"></a>
  <a href="Students Data.php"><img src="../../Images/Director/img6.jpg" class="imgs"></a>
  <a href="Term Grant.php"><img src="../../Images/Director/img7.jpg" class="imgs"></a>
  <a href="Fees Info.php"><img src="../../Images/Director/img8.jpg" class="imgs"></a>
  <a href="Remove Students.php"><img src="../../Images/Director/img9.jpg" class="imgs"></a>
  <a href="Manage_Queries.php"><img src="../../Images/Director/img10.jpg" class="imgs"></a>
<a href="Upload Press.php"><img src="../../Images/Director/img11A.png" class="imgs"></a>
</section>
</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>