<?php
session_start();

if (empty($_SESSION['Username'] && $_SESSION['Password']) || $_SESSION['Login_type'] != 'Faculty'){        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: ../Login/Login.php'));
    }
    
include "../php files/db_connection.php";

if(isset($_POST['Reset']))
{
    $New_Password = $_POST['New_Password'];
    $Confirm_Password = $_POST['Confirm_Password'];
    $Count = 0;
    
    if(strlen($New_Password) < 9  | strlen($Confirm_Password) < 9 && $New_Password == $Confirm_Password){
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
    //Faculty
    
   $Username = $_SESSION['Username'];
   
   $sql = "SELECT Password FROM `Faculties` WHERE Endorsement_No='$Username'";
    
    $check = mysqli_query($conn, $sql);
   if($_SESSION['Login_type'] == "Faculty")
   {
    while($Match = $check->fetch_assoc())
    {
        if( $New_Password == $Match['Password']){
        echo "<center><strong style='color: white; background-color: red;'>Enter Different Password. Your Old And New both Passwords are same.</strong><br></center>";
        $Count = 1;
}
        }
    }
    
    //Student new password
    if($_SESSION['Login_type'] == 'Faculty' && $New_Password == $Confirm_Password && $Count != 1){
        $Confirm_Password = md5($Confirm_Password);
        $sql = "UPDATE `Faculties` SET Password='$Confirm_Password' WHERE Endorsement_No='$Username'";
        $Result=mysqli_query($conn, $sql);
        if($Result){
        echo "<center><h4 style='color: white; background-color: green;'>";
        echo $_SESSION['Login_type'];
        echo " Password has been changed Successfully.</h4></center>";
        //redirection
         echo "<script>window.location='Welcome.php'</script>";
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
</style>
</head>
<body>
    <header id="header">
        <center>
            <img src="../../Images/Header&Footer/NJSMTI.png" alt="img"> 
        </center>
        <hr>
        </header>
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