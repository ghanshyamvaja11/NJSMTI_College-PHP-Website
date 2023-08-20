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
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Director Desk</h1></center>
<div class="navbar">
    <div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
    <a href="Welcome.php">HOME</a>
    <a href="Upload_files.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Upload Files</a>
    <a href="Manage_files.php">Manage files</a>
    <a href="Post new Announcements.php">Do Announcements</a>
    <a href="Add_Faculties.php">Add Faculties</a>
    <a href="Remove Faculties.php">Remove Faculties</a>
    <a href="Students Data.php">Students data</a>
    <a href="Term Grant.php">Term-Grant</a>
    <a href="Fees Info.php">Recieve Fees</a>
    <a href="Remove Students.php">Remove Students</a>
    <a href="Manage_Queries.php">Manage Queries</a>
    <a href="Upload Press.php">Upload Press</a>
</div>
</section>

<main>
    <hr>
        <center><h2 style='color: white; background-color: red; border-radius: 29px; padding-bottom: 4.2px;'>Upload files</h2></center>
    <center>
    <form action="" method="POST" enctype="multipart/form-data">
        <div style='background-color: skyblue; display: inline-block; padding: 9px; border-radius: 15px; width: 92%;' id="pathSelection">
         <select name="path" id="path" style='height: 29px;'>
            <option value='' selected>Select Folder</option>
            <!-- <option value='../../Announcements/'>/Announcements/</option>
            <option value='../../Videos/'>/Videos/</option>
            <option value='../../Images/Thumbnails/'>/Images/Thumbnails/</option> -->
            <option value='../../Images/Home/Photo_Gallary/'>/Images/Home/Photo_Gallary/</option>

            <option value='../../Images/About us/Grievance Committee/'>/Images/About us/Grievance Committee/</option>
            
            <option value='../../Images/Infrastructure/Class/'>/Images/Infrastructure/Class/</option>
            <option value='../../Images/Infrastructure/Lab/'>/Images/Infrastructure/CLab/</option>
                        <option value='../../Images/Infrastructure/Lab/'>/Images/Infrastructure/L-Lab/</option>
                                    <option value='../../Images/Infrastructure/Lab/'>/Images/Infrastructure/Library/</option>
                                                <option value='../../Images/Infrastructure/Lab/'>/Images/Infrastructure/Auditorium/</option>

            <option value='../../Images/Courses/MCA/Teaching staff/'>/Images/Courses/MCA/Teaching staff/</option>
                        <option value='../../Images/Courses/MCA/Toppers/'>/Images/Courses/MCA/Toppers/</option>
            <!-- <option value='../../Images/Courses/MCA/Non Teaching staff/'>/Images/Courses/MCA/Non Teaching staff/</option> -->
            
            <option value='../../Images/Courses/MBA/Teaching staff/'>/Images/Courses/MBA/Teaching staff/</option>
            <!-- <option value='../../Images/Courses/MBA/Non Teaching staff/'>/Images/Courses/MBA/Non Teaching staff/</option> -->
            <option value='../../Images/Courses/MBA/Toppers/'>/Images/Courses/MBA/Toppers/</option>
            
            <option value='../../Images/Events/Press/'>/Images/Events/Press/</option>
            <!-- <option value='../../Images/Events/Navratri/'>/Images/Events/Navratri/</option>
            <option value='../../Images/Events/Farewell Celebration/'>/Images/Events/Farewell Celebration/</option>
            <option value='../../Images/Events/Days Celebration/'>/Images/Events/Days Celebration/</option> -->
            
        </select><p>
        <input type="file" name="file" multiple><p>
        <input type="submit" value="upload" name="upload" id='upload' onMouseOver="this.style.color='white'" onMouseOver="this.style.background-color='green'">
        </div>
        </center>
        </form>
        
        <!--Send files in specific Folder using PHP-->
        <?php
        if(isset($_POST['upload'])){
             $fileName = $_FILES['file']['name'];
            if($_POST['path'] == '../../Videos/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Videos/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
        else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            if($_POST['path'] == '../../Study Material/BCA/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Study Material/BCA/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
        else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            else if($_POST['path'] == '../../Study Material/BBA/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Study Material/BBA/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
        else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            else if($_POST['path'] == '../../Study Material/B.com/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Study Material/B.com/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
        else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
           else if($_POST['path'] == '../../Videos/Thumbnails/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Videos/Thumbnails/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
        else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            
             else if($_POST['path'] == '../../Images/Home/Photo_Gallary/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Images/Home/Photo_Gallary/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
        else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            
            else if($_POST['path'] == '../../Images/Infrastructure/Class/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Images/Infrastructure/Class/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
        else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            else if($_POST['path'] == '../../Images/Infrastructure/Lab/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Images/Infrastructure/Lab/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            else if($_POST['path'] == '../../Images/Infrastructure/Library/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Images/Infrastructure/library/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            
             else if($_POST['path'] == '../../Images/Courses/BCA/Teaching staff/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], "../../Images/Courses/BCA/Teaching staff/".$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            else if($_POST['path'] == '../../Images/Courses/BCA/Non Teaching staff/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], "../../Images/Courses/BCA/Non Teaching staff/".$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            
            else if($_POST['path'] == '../../Images/Courses/BBA/Teaching staff/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], "../../Images/Courses/BBA/Teaching staff/".$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            else if($_POST['path'] == '../../Images/Courses/BBA/Non Teaching staff/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], "../../Images/Courses/BBA/Non Teaching staff/".$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            
            else if($_POST['path'] == '../../Images/Events/Tech Fest/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Images/Events/Tech Fest/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            else if($_POST['path'] == '../../Images/Events/Navratri/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Images/Events/Navratri/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            else if($_POST['path'] == '../../Images/Events/Farewll Celebration/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Images/Events/Tech Fest/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            else if($_POST['path'] == '../../Images/Events/Days Celebration/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Images/Events/Days Celebration/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            
            else{
                echo "<h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4>";
            }
            }
        ?>
</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>