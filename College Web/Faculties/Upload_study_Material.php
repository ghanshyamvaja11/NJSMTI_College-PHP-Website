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

</div>
<center><section><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Faculty Desk</h1></section></center>
<div class="navbar">
    <div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
<a href="Welcome.php">HOME</a>
<a href="Upload_study_Material.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Upload Study Material</a>
<a href="Remove_study_Material.php">Remove Study Material</a>
<a href="SelectExam.php">Upload Result</a>
<a href="Remove Result.php">Remove Result</a>
<!--    <a href="Post new Announcements.php">Do Announcements</a>-->
<!--    <a href="Students Data.php">Students Data</a>-->
<!--    <a href="Manage_Queries.php">Manage Queries</a>-->
</div>
</section>

<main>
    <hr>
        <center><h2 style='color: white; background-color: red; border-radius: 29px; padding-bottom: 4.2px;'>Upload Study Material</h2></center>
    <center>
    <form action="" method="POST" enctype="multipart/form-data">
        <div style='background-color: skyblue; display: inline-block; padding: 9px; border-radius: 15px; width: 92%;' id="pathSelection">
        <select name="path" id="path" style='height: 29px;'>
            <option value='' selected>Select Folder</option>
            <?php
            // $endorsement_no = $_SESSION['Username'];
            // $sql = "SELECT Department From `Faculties` WHERE Endorsement_No='$endorsement_no'";
            // $check = mysqli_query($conn, $sql);
            // if($check)
            // ?>
            // <?php
            // while($Match = $check->fetch_assoc())
            // {
            //     if($Match['Department'] == 'MCA'){
                ?>
            <option value='../../Study Material/MCA Sem-1/'>/Study Material/MCA Sem-1/</option>
            <option value='../../Study Material/MCA Sem-2/'>/Study Material/MCA Sem-2/</option>
            <option value='../../Study Material/MCA Sem-3/'>/Study Material/MCA Sem-3/</option>
            <option value='../../Study Material/MCA Sem-4/'>/Study Material/MCA Sem-4/</option>
            <?php
                // }
                // if($Match['Department'] == 'MBA')
                // {
                    ?>
            <option value='../../Study Material/MBA Sem-1/'>/Study Material/MBA Sem-1/</option>
 <option value='../../Study Material/MBA Sem-2/'>/Study Material/MBA Sem-2/</option>
 <option value='../../Study Material/MBA Sem-3/'>/Study Material/MBA Sem-3/</option>
 <option value='../../Study Material/MBA Sem-4/'>/Study Material/MBA Sem-4/</option>
            <?php
            //     }
            // }
            ?>
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
            
            //MCA StudyMaterial
            if($_POST['path'] == '../../Study Material/MCA Sem-1/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Study Material/MCA Sem-1/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
else if($_POST['path'] == '../../Study Material/MCA Sem-2/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Study Material/MCA Sem-2/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
}
else if($_POST['path'] == '../../Study Material/MCA Sem-3/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Study Material/MCA Sem-3/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
}
else if($_POST['path'] == '../../Study Material/MCA Sem-4/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Study Material/MCA Sem-4/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
}
        
        //MBA StudyMaterial
        if($_POST['path'] == '../../Study Material/MBA Sem-1/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Study Material/MBA Sem-1/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            else if($_POST['path'] == '../../Study Material/MBA Sem-2/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Study Material/MBA Sem-2/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
        
            if($_POST['path'] == '../../Study Material/MBA Sem-3/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Study Material/MBA Sem-3/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            if($_POST['path'] == '../../Study Material/MBA Sem-4/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Study Material/MBA Sem-4/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
        }
        ?>
<hr>
</main>
<?php
include('footer.php');
?>
</body>
</html>