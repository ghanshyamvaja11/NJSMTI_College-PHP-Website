<?php
ob_start();
session_start();
include "../php files/db_connection.php";

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

$Class = $_SESSION['Class'];
// $Username = $_SESSION['Username'];
// $_SESSION['Username'] = $Username;
$_SESSION['Login_type'] = $_SESSION['Login_type'];
$_SESSION['Username'] = $_SESSION['Username'];
$_SESSION['Check'] = "";
$Enrollment_No = $Course = $Semester = "";
$Name = $S1 = $S2 = $S3 = $S4 =$S5 = $S6 = $S7 = $S8 = $S1M = $S2M = $S3M = $S4M = $S5M = $S6M = $S7M = $S8M = 0;
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
    <a href="SelectExam.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Upload Result</a>
    <a href="Remove Result.php">Remove Result</a>
</div>
</section>

<main>
    <hr>
        <center><h2 style='color: white; background-color: red; border-radius: 29px; padding-bottom: 4.2px;'>Declare Result</h2></center>
        <center>
        </style>
        <div style='background-color: skyblue; display: inline-block; border-radius: 15px; width: 92%; padding: 9px;'>
        <form action="" method="POST">
            <input type="text" name="Login_type" value="<?php echo $_SESSION['Login_type']; ?>" hidden>
          <input type="text" name="Username" value="<?php echo $_SESSION['Username']; ?>" hidden>
            <input style="height: 29.8px; width: 51%;" type="number" name="Enrollment_No" placeholder="Enter Enrollment_No*" id="Enrollment_No" class="Enrollment_No"><br id="Br" class="Br"><br id="Br2" class="Br">
        <input type="submit" value="Search" name="Search" id="see" style="font-size: 19.9px; color: black; background-color: white;" class="see Search">
        </form>
        <br id="Br2" class="Br">
        <?php
        $Count = "";
        if(isset($_POST['Search'])){ 
    $Enrollment_No = $_POST['Enrollment_No'];
    $_SESSION['Login_type'] = $_POST['Login_type'];
    $_SESSION['Username'] = $_POST['Username'];
    $sql = "SELECT *FROM `Student Registration` WHERE Enrollment_No='$Enrollment_No'";
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        $Course = $Match['Course'];
        $Semester = $Match['Semester'];
    }
    if(($Class == 'MCA-1' and $Course == 'MCA' and $Semester == 'Sem-1') or ($Class == 'MCA-2' and $Course == 'MCA' and $Semester == 'Sem-2') or ($Class == 'MCA-3' and $Course == 'MCA' and $Semester == 'Sem-3') or ($Class == 'MCA-4' and $Course == 'MCA' and $Semester == 'Sem-4') or ($Class == 'MBA-1' and $Course == 'MBA' and $Semester == 'Sem-1') or ($Class == 'MBA-2' and $Course == 'MBA' and $Semester == 'Sem-2') or ($Class == 'MBA-3' and $Course == 'MBA' and $Semester == 'Sem-3') or ($Class == 'MBA-4' and $Course == 'MBA' and $Semester == 'Sem-4')){
            $_SESSION['Check'] == 1;
    ?>
    <style>
        .Br{
            display: none;
        }
        #Enrollment_No{
            display: none;
        }
        .Search{
            visibility : hidden;
        }
    </style>
        <?php
    }
}
     if(isset($_SESSION['Check'])){
     if(!empty($_POST['Enrollment_No']) and isset($_POST['Search'])){
         $_SESSION['Enrollment_No'] = $_POST['Enrollment_No'];
         $Enrollment_No = $_POST['Enrollment_No'];
    $sql = "SELECT *FROM `Student Registration` WHERE Enrollment_No='$Enrollment_No'";
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($Enrollment_No == $Match['Enrollment_No']){?>
        <div style="display: inline-block; text-align: left; color: white; background-color: blue; padding: 9px; border-radius: 29px;">
            <h4 style="display: inline;">Enrollment No: </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Enrollment_No']; ?></h5><br>
            <h4 style="display : inline;">Student's Name : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Name']; ?></h5><br>
            <h4 style="display : inline;">Course : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Course']; ?></h5><br>
            <h4 style="display : inline;">Current Semester : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Semester']; ?></h5><br>
            </div>
        <?php
        $Count = 1;
        }
    }
        }
        
        if(isset($_POST['Search']) && $Count != 1){
            $Enrollment_No = $_POST['Enrollment_No'];
            $Enrollment_No = "";
$Count2 = '';
$sql = "SELECT *FROM `Student Registration` WHERE Enrollment_No='$Enrollment_No'";
$check = mysqli_query($conn, $sql);
while($Match = $check->fetch_assoc())
{
    $Enrollment_No = $Match['Enrollment_No'];
    $Course = $Match['Course'];
    $Semester = $Match['Semester'];
}
if(strlen((string)$Enrollment_No) > 10 or strlen((string)$Enrollment_No) < 10){
    echo "<h4 style='color: red;'>Enrollment_No Format is not Valid.</h4>";
}
if($Enrollment_No != $Enrollment_No and strlen((string)$Enrollment_No) == 10){
    echo "<h4 style='color: red;'>Student : $Enrollment_No is not studying in $Class.";
    $Count2 = 1;
    }
if($Count2 == 1){
    echo "<h4 style='color: red;'>Enter Valid Enrollment_No.</h4>";
        $Count2 = 0;
        }
    }
        if(isset($_POST['Search']) && $Count == 1){
        $sql = "SELECT *FROM `Student Registration` WHERE Enrollment_No ='$Enrollment_No'";
        $check = mysqli_query($conn, $sql);
        while($Match = $check->fetch_assoc()){
        ?>
        <form action="" method="POST">
        <p>
          <input type="text" name="Login_type" value="<?php echo $_SESSION['Login_type']; ?>" hidden>
          <input type="text" name="Username" value="<?php echo $_SESSION['Username']; ?>" hidden>
            <input type="text" name="Name" style="height: 29.4px; width: 42.9%; text-align: center;" value="<?php echo $Match['Name'];?>" placeholder="<?php echo $Match['Name'];?>" readonly><p>
            <input type="text" name="Course" style="height: 29.4px; width: 21.5%; text-align: center;" placeholder="<?php echo $Match['Course'];?>" readonly>&nbsp;&nbsp;
            <input type="text" name="Class" style="height: 29.4px; width: 21.4%; text-align: center;" placeholder="<?php echo $Match['Semester'];?>" readonly><p>
            <input type="text" name="setClass" value="<?php echo $_SESSION['Class']; ?>" hidden>
            <input type="text" name="TotalMarks" value="<?php echo $_SESSION['TotalMarks']; ?>" hidden>
                <h4 style="font-size: 29px; color: Red;">Enter Marks</h4>
                <?php if($Class == 'MCA-1' or $Class == 'MCA-2' or $Class == 'MCA-3' or $Class == 'MCA-4'){ ?>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject1']; ?>" readonly><input type="Number" name="S1Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px%;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject2']; ?>" readonly><input type="Number" name="S2Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px%;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject3']; ?>" readonly><input type="Number" name="S3Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px%;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject4']; ?>" readonly><input type="Number" name="S4Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px%;" required><p>
        <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject5']; ?>" readonly><input type="Number" name="S5Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px%;" required><p>
            <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject6']; ?>" readonly><input type="Number" name="S6Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px%;" required><p>
            <?php } ?>
                    <?php 
                    if($Class == 'MBA-1' or $Class == 'MBA-2' or $Class == 'MBA-3' or $Class == 'MBA-4'){ 
            ?>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject1']; ?>" readonly><input type="Number" name="S1Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject2']; ?>" readonly><input type="Number" name="S2Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject3']; ?>" readonly><input type="Number" name="S3Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject4']; ?>" readonly><input type="Number" name="S4Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject5']; ?>" readonly><input type="Number" name="S5Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject6']; ?>" readonly><input type="Number" name="S6Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject7']; ?>" readonly><input type="Number" name="S7Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject8']; ?>" readonly><input type="Number" name="S8Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
            <?php }?>
        <input type="submit" value="Declare" name="Result" id='see' style="font-size: 19.9px; color: black; background-color: white; border-radius: 29px;" class="see">
        <p>
        <?php
        }
        }
        ?>
        </form>
        <form action="" method="POST">
        <?php if(isset($_POST['Result'])){
            $_SESSION['Login_type'] = $_POST['Login_type'];
            $_SESSION['Username'] = $_POST['Username'];
        ?>
        <input type="submit" value="Whole Class Result Declared??" name="WholeClassResultDeclared" id='see' style="font-size: 19.9px; color: white; background-color: green; border-radius: 29px;" class="see">
        <?php } ?>
    </form>
    <?php if(isset($_POST['WholeClassResultDeclared'])){
        unset($_SESSION['Enrollment_No']);
        unset($_SESSION['Name']);
        unset($_SESSION['Class']);
        unset($_SESSION['PassingMarks']);    
        unset($_SESSION['subject1']);
        unset($_SESSION['subject2']);
        unset($_SESSION['subject3']);
        unset($_SESSION['subject4']);
        unset($_SESSION['subject5']);
        unset($_SESSION['subject6']);
        unset($_SESSION['subject7']);
        unset($_SESSION['subject8']);
        header('location: SelectExam.php');
    } ?>
        </center>
        <p>
        <center>
       <?php
       if($_SERVER['REQUEST_METHOD'] and isset($_POST['Result'])){
           $Enrollment_No = $_SESSION['Enrollment_No'];
           $Name = $_POST['Name'];
           $PassingMarks = $_SESSION['PassingMarks'];    
           $Class = $_SESSION['Class'];
           $S1 = $_SESSION['subject1'];
           $S2 = $_SESSION['subject2'];           
           $S3 = $_SESSION['subject3'];
           if(isset($_SESSION['subject4'])){
           $S4 = $_SESSION['subject4'];
           $S5 = $_SESSION['subject5'];
           $S6 = $_SESSION['subject6'];
           }
           if(isset($_SESSION['subject7'])){
           $S7 = $_SESSION['subject7'];
           $S8 = $_SESSION['subject8'];
           }
           $S1M = $_POST['S1Marks'];
           $S2M = $_POST['S2Marks'];
           $S3M = $_POST['S3Marks'];
           if(isset($_POST['S4Marks'])){
           $S4M = $_POST['S4Marks'];
           $S5M = $_POST['S5Marks'];
           $S6M = $_POST['S6Marks'];
           }
           if(isset($_POST['S7Marks'])){
           $S7M = $_POST['S7Marks'];
           $S8M = $_POST['S8Marks'];
           }
           $PassingMarks = $_SESSION['PassingMarks'];
           $Obtained = $S1M + $S2M + $S3M + $S4M + $S5M + $S6M + $S7M + $S8M;
        $Total = $_SESSION['TotalMarks'];

        //    echo $Enrollment_No;
        //    echo $Name;
        //    echo $Class;
        //    echo $S1;
        //    echo $S2;
        //    echo $S3;
        //    echo $S4;
        //    echo $S5;
        //    echo $S6;
        //    echo $S7;
        //    echo $S8;
        //    echo $S1M;
        //    echo $S2M;
        //    echo $S3M;
        //    echo $S4M;
        //    echo $S5M;
        //    echo $S6M;
        //    echo $S7M;
        //    echo $S8M;
        //    echo $Total;
        //    echo $Obtained;
        
        if($Class == 'MCA-1' or $Class == 'MCA-2' or $Class == 'MCA-3' or $Class == 'MCA-4'){
        $sql = "INSERT INTO `Results`(Enrollment_No, Name, Class, S1, S2, S3, S4, S5, S6, S1M, S2M, S3M, S4M, S5M, S6M, PassingMarks, Total, Obtained) VALUES('$Enrollment_No', '$Name', '$Class', '$S1', '$S2', '$S3', '$S4', '$S5', '$S6', '$S1M', '$S2M', '$S3M', '$S4M', '$S5M', '$S6M', '$PassingMarks', '$Total', '$Obtained')";
        if(mysqli_query($conn, $sql)){
            echo "<h4 style='color: white; background: green;'>Enrollment_No : <span style='color: skyblue; font-size: 29px;'>$Enrollment_No</span>`s result is declared.</h4>";
        }
           }
           else{
            $sql = "INSERT INTO `Results`(Enrollment_No, Name, Class, S1, S2, S3, S4, S5, S6, S7, S8, S1M, S2M, S3M, S4M, S5M, S6M, S7M, S8M, PassingMarks,  Total, Obtained) VALUES('$Enrollment_No', '$Name', '$Class', '$S1', '$S2', '$S3', '$S4', '$S5', '$S6', '$S7', '$S8', '$S1M', '$S2M', '$S3M','$S4M', '$S5M', '$S6M','$S7M', '$S8M', '$PassingMarks', '$Total', '$Obtained')";
            if(mysqli_query($conn, $sql)){
                echo "<h4 style='color: white; background: green;'>Enrollment_No : <span stlye='color: skyblue; font-size: 19.9px;'>$Enrollment_No</span>`s result is declared.</h4>";
            }
           }
        $sql = "SELECT Course, Semester, Email FROM `Student Registration` WHERE Enrollment_No ='$Enrollment_No'";
        $check = mysqli_query($conn, $sql);
        while($Match = $check->fetch_assoc()){
            $Course = $Match['Course'];
            $Class =  $Match['Semester'];
            $to = $Match['Email'];
            $Subject = "Result Declaration";
            $Message = "Hiii ".$Enrollment_No .",\nYour ".$Course." ".$Class." Result is declared";
            mail($to, $Subject, $Message);
        }
    }
}

    ?>
</form>
</div>
</main>
<hr>
<?php
include('footer.php');
ob_end_flush();
?>
</body>
</html>