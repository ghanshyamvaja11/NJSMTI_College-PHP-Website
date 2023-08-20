<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NJSMTI</title>
<link rel="icon" type="image/x-icon" href="../../Images/Header&Footer/favicon.jpg">
    
    <link rel="stylesheet" href="../CSS Files/headerNmenuNfooter.css">
    <link rel="stylesheet" href="../CSS Files/Contact us.css">
    <link rel="stylesheet" href="../CSS Files/index.css">
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
        <div style='background-color: yellow; text-align: center; padding-top: 5px; padding-bottom: 1px;'><a href="../Login/Login.php"><img id="Login" src='../../Images/Login/Login.png'></a></div>
        </header>
<div class="navbar">
<div class="icon" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
    <a href="../../index.php">HOME</a>
    <a href="Courses.php">Courses</a>
    <a href="../Student Corner/Welcome.php">Student Corner</a>
    <a href="Infrastructure.php">Infrastructure</a>
    <a href="Events.php">Events</a>
    <a href="Press.php">Press</a>
    <a href="About us.php">About us</a>
    <a href="Downloads.php">Downloads</a>
    <a href="Contact us.php">Contact us</a>
</div>
<main>
   <br>
    <center>
        <form action="" method="POST">
            <fieldset>
            <legend>Objection</legend>
            <input type="text" name="name" id="name" placeholder="Enter Your Name *" required><br><br>
            <input type="email" name="email" id="email2" placeholder="Enter Your Email *" required><br><br>
            <select name="query_type" id="query" required>
                <option value="Any Complaint" selected>Objection on Video</option>
            </select><br><br>
            <textarea name="description" id="description" cols="20" rows="5" placeholder="describe Your Objection in detail *"></textarea><br>
            <center><input type="submit" name="submit" value="Submit" id="Submit"></center>
            </fieldset>
        </form>
    </section>
        
        <!--PHP Database Code-->
<?php
//Database Connection
$servername = "localhost";
$username = "id19039457_kmkksclg";
$password = "Savjani@1995";
$db = "id19039457_kmkks";


$conn = new mysqli($servername, $username, $password, $db);

//Check Connection
if(!$conn){
    die("Connection failed: " . mysqli_connect-error());
}
/*else{
    echo "connection successed. <br>";
}*/

//Form input fields variable
 $name = $email = $query = $description = "";
 if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$query = $_POST['query_type'];
$description = $_POST['description'];
    }
 
//Input fields validation
if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "<span style=\"color: white; background-color: red;\">";
    //name validation
    if(empty($name)){
        echo "<strong>name : </strong>name is Required.";
    }
    else{
        if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            echo "<strong>name : </strong>Only Alphabets & White Spaces are allowed.<br>";
        }
    }
    
    //email Validation
    if(empty($email)){
        echo "<strong>email : </strong>email is required. <br>";
    }
    else{
        //Check is email in well formed?
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<strong>email: </strong>email format is not valid. <br>";
        }
    }
    
    //description validation
    if(empty($description)){
        echo "<strong>Query description: </strong>Describe Your Selected Query in Detail.";
    }
    echo "</span>";
    
    $sql = "SELECT email FROM `Contact us`";
    $check = mysqli_query($conn, $sql);
    $duplicate_email=0;
    while($duplicates = $check->fetch_assoc())
    {
        if($email == $duplicates['email']){
            echo "<br>";
            echo "<center><strong style=\"color: white; background-color: red;\">This email is already registered in our database.Enter another email Address.</strong></center>";
            echo "<br>";
            $duplicate_email = 1;
            break;
        }
    }
    
    //Submit Validation
    if(isset($_POST['submit']) && !empty($name) && preg_match("/^[a-zA-Z ]*$/",$name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($description) && $duplicate_email == 0){
        
        $sql = "INSERT INTO `Contact us` VALUES('$name', '$email', '$query', '$description')";
        mysqli_query($conn, $sql);
            echo "<center><h4 style=\"color: white; background-color: green;\">Your Query Has been Submitted Successfully.<h4></center>";
    }
    
}

$name = $email = $query = $description = "";

//Close Connection
mysqli_close($conn);
?>

</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>