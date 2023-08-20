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
    <a href="Contact us.php" style="color: yellow;  background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">Contact us</a>
</div>
<main>
    <section>
        <div id="sec">
        <div id="Address">
        <h1>Corporate Address</h1>
        <h2>N.J.Sonecha Mgmt. & Tech. Institute</h2>
        <div class="address">
        <strong class="address">Veraval - Junagadh Highway,</strong><br>
        <strong class="address">Opp. Realiance Petrol Pump,</strong><br>
        <strong class="address">At: Chanduvav Tal : Veraval,</strong><br>
        <strong class="address">District: Gir-Somnath (Gujarat).</strong><br>
        </div>
        <p>
            <div class="Contact">
            <strong><span id="phone">Phone:</span> +91-9913664603 +91-9624584775</strong><br><br>
            <strong><span id="Email">Email:</span> <input type="email" name="email" id="email" value="directornjsmti11@gmail.com" disabled></strong><br>
            <strong><span id="Email">Email:</span> <input type="email" name="email" id="email" value="dwivediji80@yahoo.co.in" disabled></strong><br>
            <strong><span id="Email">Email:</span> <input type="email" name="email" id="email" value="njsonecha@rediffmail.com" disabled></strong><br>
            </div>
        <a href="https://www.youtube.com/@n.j.sonechamanagementandte774/featured" class="fa fa-youtube"></a>&nbsp;&nbsp;
        <a href="https://www.facebook.com/people/Njsmti-Chanduvav/pfbid02M2m4Q6tu2swrq1RNB85BMFJJS8HDZHTp9SC7kshKdFEQcULbZ7fdDFCaisSMWGz8l/" class="fa fa-facebook"></a> 
        </div>&nbsp;&nbsp;
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7451.4181098379!2d70.333908!3d20.964196!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bfd324900000001%3A0xcbf6d904f72f2294!2sNarandas%20Jethalal%20Sonecha%20Management%20%26%20Technical%20Institute!5e0!3m2!1sen!2sin!4v1692177918580!5m2!1sen!2sin" style="border: 4px solid blue;" allowfullscreen="0" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<p>
<p>
    
    <section>
        <center><h2 style="background-color: transparent; color: red; display: inline;">OR</h2></center>
        <br>
    <center>
        <form action="" method="POST">
            <fieldset>
            <legend>Contact Form</legend>
            <input type="text" name="name" id="name" placeholder="Enter Your Name *" required><br><br>
            <input type="email" name="email" id="email2" placeholder="Enter Your Email *" required><br><br>
            <select name="query_type" id="query" required>
                <option value="" selected>Select Query Type</option>
                <option value="Admission">Admission Related</option>
                <option value="Any Complaint">Any Complaint</option>
                <option value="Exam">Exam Related</option>
                <option value="Scholarship">Scholarship Related</option>
                <option value="Library">Library Related</option>
                <option value="Computer Lab">Computer lab Related</option>
            </select><br><br>
            <textarea name="description" id="description" cols="20" rows="5" placeholder="describe Your Query in detail *"></textarea><br>
            <center><input type="submit" name="submit" value="Submit" id="Submit"></center>
            </fieldset>
        </form>
    </section>
        
        <!--PHP Database Code-->
<?php
include 'db_connection.php';

//Form input fields variable
 $name = $email = $query = $description = "";
 if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$query = $_POST['query_type'];
$description = str_replace("'", "&apos;", $_POST['description']);
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
            echo "<center><h4 style=\"color: white; background-color: green;\">Your Query Has been Submitted Successfully.<h4></center>"; ?>
            <script>
         if ('speechSynthesis' in window) {
  const synth = window.speechSynthesis;
  
  const text = "Thank you for Contacting us..";

  // Create a SpeechSynthesisUtterance instance
  const utterance = new SpeechSynthesisUtterance(text);
  
  // Speak the text
  synth.speak(utterance);
} else {
  // Browser doesn't support speech synthesis
  alert('Speech synthesis not supported');
}
</script>
    <?php }
    
}

$name = $email = $query = $description = "";

//Close Connection
mysqli_close($conn);
?>

<hr>
<div id="feedback_link">
<center id="View-More"><a href="feedbacks.php"><input type="button" value="Click here for leave a Feedback"></a></center>
</div>
</main>
<hr>
<?php
include('footer.php');
?>
</body>
</html>