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
    <link rel="stylesheet" href="../CSS Files/feedback.css">
    
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
    <a  href="../Student Corner/Welcome.php">Student Corner</a>
    <a href="Infrastructure.php">Infrastructure</a>
    <a href="Events.php">Events</a>
    <a href="Press.php">Press</a>
    <a href="About us.php">About us</a>
    <a href="Downloads.php">Downloads</a>
    <a href="Contact us.php">Contact us</a>
</div>
<main>

    <section>
        <br>
    <center>
        <form action="" method="POST">
            <fieldset style= "background-color: red;">
            <legend style=" color: white; background-color: orange; border: 2px solid black;">Feedback Form</legend>
            <input type="text" name="name" id="name" placeholder="Enter Your Name *" required><br><br>
            <input type="email" name="email" id="email2" placeholder="Enter Your Email *" required><br><br>
            <textarea name="description" id="description" cols="20" rows="5" placeholder="Write Your Feedback *"></textarea><br>
            <center><input type="submit" name="submit" value="Submit" id="Submit"></center>
            </fieldset>
        </form>
    </section>
        
        <!--PHP Database Code-->
<?php
//Database Connection
include "db_connection.php";
$Count = 0;

//Form input fields variable
 $name = $email = $description = "";
 if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$description = str_replace("'", "&apos;", $_POST['description']);
    }
 
//Input fields validation
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    echo "<span style=\"color: red; \">";
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
        echo "<strong>description: </strong>Please Write Your Feedback.";
    }
    
    echo "</span>";
    $sql = "SELECT email FROM `Feedback`";
    $check = mysqli_query($conn, $sql);
    $duplicate_email=0;
    while($duplicates = $check->fetch_assoc())
    {
        if($email == $duplicates['email']){
                echo "<br>";
            echo "<center><strong style=\"color: red;\">This email is already registered in our database.Enter another email Address.</strong></center>";
            echo "<br>";
            $duplicate_email = 1;
            break;
        }
    }
    
    //Submit Validation
    if(isset($_POST['submit'])&&(!empty($name) && preg_match("/^[a-zA-Z ]*$/",$name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($description) && $duplicate_email == 0)){
        
        $sql = "INSERT INTO `Feedback` (name, email, description, date)  VALUES('$name', '$email', '$description', current_timestamp())";
        mysqli_query($conn, $sql);
            echo "<center><h4 style=\"color: green;\">Thank You for Your Feedback.</h4></center>";
            $Count = 1; ?>
            <script>
            if ('speechSynthesis' in window) {
  const synth = window.speechSynthesis;
  
  const text = "Thank you for your feedback..";

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

echo "<hr>";
echo "<center>";
echo "<h1 style=\"black: white; background-color: yellow; border-radius: 29px; display: inline; padding-left: 6px; padding-right: 5.9px;\">Recieved Feedbacks</h1>";
echo "</center>";
echo "<br>";
  $sql = "SELECT *FROM `Feedback` ORDER BY SerialNumber desc";
  $results = mysqli_query($conn, $sql);

  echo "<marquee direction=\"up\" scrollamount=\"5\" height= 400px; onmouseover= this.stop() onmouseout= this.start()>";
  while($data=$results -> fetch_assoc())
  {
      if($Count == 1)
      {
      echo "<center>";
      echo "<div id=\"first\">";
      echo "<strong style=\"color : yellow;\">User -> </strong>";
      echo "<strong style=\"color: white;\">";
      echo $data['name'];
      echo "</strong> <br>";
      echo "<strong style=\"color:yellow;\">Feedback : </strong>";
      echo "<span>";
      echo $data['description'];
      echo "</span>";
      echo "<br><br>";
      echo "<small style='color: black; text-align: center; font-size: 11.9px; font-weight: bold'>published on: ";
            echo date('F j, Y', strtotime($data['date']));
      echo "</small>";
      echo "</div>";
      echo "</center>";
      echo "<p>";
      
      $Count = 0;
      }
      else
      {
      echo "<center>";
      echo "<div id=\"show\">";
      echo "<strong style=\"color : darkblue;\">User -> </strong>";
      echo "<strong style=\"color: yellow\">";
      echo $data['name'];
      echo "</strong> <br>";
      echo "<strong style=\"color:darkblue;\">Feedback : </strong>";
      echo "<span>";
      echo $data['description'];
      echo "</span>";
      echo "<br><br>";
      echo "<small style='color: black; text-align: center; font-size: 29.4; font-weight: bold;'>published on: ";
      echo date('F j, Y', strtotime($data['date']));
      echo "</small>";
      echo "</div>";
      echo "</center>";
      echo "<p>";
      }
  }
  echo "</marquee>";
  
  $name = $email = $description = "";
?>

<?php
include('footer.php');
?>
</body>
</html>