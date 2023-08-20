<?php
session_start();
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
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Faculty Desk</h1></center>
<div class="navbar">
    <div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
    <a href="Welcome.php">HOME</a>
    <a href="Upload_study_Material.php">Upload study Material</a>
    <a href="Remove_study_Material.php">Remove Study Material</a>
    <a href="Upload Results.php">Upload Result</a>
    <a href="Remove Results.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Remove Result</a>
</div>
</section>

<main>
    <hr>
        <center><h2 style='color: white; background-color: red; border-radius: 29px; padding-bottom: 4.2px;'>Remove Result</h2></center>
    <center>
        <div style='background-color: skyblue; display: inline-block; border-radius: 15px; width: 92%; padding: 9px;' id="pathSelection">
    <form action="" method="POST">
        <select name="path" id="path" style='height: 29px;'>
            <option value='' selected>Select Folder</option>
            
            <!--MCA Result-->
            <option value='../../Results/MCA Sem-1/'>/Results/MCA Sem-1/</option>
            <option value='../../Results/MCA Sem-2/'>/Results/MCA Sem-2/</option>
            <option value='../../Results/MCA Sem-3/'>/Results/MCA Sem-3/</option>
              
              <!--MBA Result-->
                <option value='../../Results/MBA Sem-1/'>/Results/MBA Sem-1/</option>
                <option value='../../Results/MBA Sem-2/'>/Results/MBA Sem-2/</option>
                <option value='../../Results/MBA Sem-3/'>/Results/MBA Sem-3/</option>
                <option value='../../Results/MBA Sem-4/'>/Results/MBA Sem-4/</option>
        </select><p>
        <input type="submit" value="see" name="see" id='see' style="font-size: 19.9px; color: black; background-color: white;">
        </div>
        
        </center>
        <p>
        <center>
       <?php
     if(!empty($_POST['path']) and isset($_POST['see'])){?>
     <div style='background-color: red; padding-top: 9.6px; display: inline-block; border-radius: 15px; width: 96%;' id="DeleteFile">
      <input type="text" name="filePath" Placeholder= "Paste file path here which given in below" style="width: 86%;"><p>
      <input type="submit" value="Delete" name="Delete" id='Delete' style="color: black; background-color: white; font-size: 19.9px; border-radius: 29px;">
      </div>
      
      <!--Delete File script in PHP-->
     <?php
     }
     if(isset($_POST['Delete'])){
                 if(unlink($_POST['filePath']))
                 {
                     echo "<h4 style='color: red;'>Result is Deleted Successfully.</h4>";
                 }
     }
     
     if(empty($_POST['filePath']) and isset($_POST['Delete'])){
         echo "<h4 style='color: red;'>Perform Valid Process to Delete files.</h4>";
     }
     echo "</center>";
     
    if(!empty($_POST['path'])){
    $path   = $_POST['path'];
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
    echo "<br>";
    foreach($files as $file){ ?>
    <center>
<div style='display: inline-block; background-color: skyblue; border-radius: 29px; width: 69.8%; padding-top: 2.9px;'>
<embed src="<?php echo $_POST['path'] . $file?>" style="height: 29%; width: 69%; "><br>
 
 
<strong>path : </strong><input type="text" value="<?php echo $_POST['path'].$file?>" style="width: 51.9%;" disabled>
</div>
</center>
<?php
}
}
?>
</form>
</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>