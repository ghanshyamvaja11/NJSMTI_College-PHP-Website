<?php
session_start();
if(empty($_SESSION['Username']) || $_SESSION['Username'] != "Clerk@njsmti"){
    header('location:../Login/Login.php');
}
include "../php files/db_connection.php";
require_once("../../fpdf/fpdf.php");
$sql = $_SESSION['sql'];
$class = "Class: ".$_SESSION['Class']." (Year : ".date("Y").")";
$class1 = $_SESSION['Class']." (".date("Y").")";
$class2 = $_SESSION['Class'];
$choice = $_SESSION['choice'];
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
if($choice == 1){
$pdf->SetFont('Times','B',15);
$pdf->Cell(0,10,"N.J. Sonecha Management and Technical Institute - Chanduvav ",1,1,'C');
$pdf->Cell(0,10,$class,1,1,'C');
$pdf->SetFont('arial','B', 10.5,'C');
$pdf->Cell(32.1,10,"Enrollment_No",1,0,'C');
$pdf->Cell(69.9,10,"Name",1,0,'C');
$pdf->Cell(29.9,10,"Mobile No",1,0,'C');
$pdf->Cell(58.2,10,"Email",1,0,'C');

$pdf->SetFont('arial','',9.6);
$results = mysqli_query($conn, $sql);
$records = mysqli_num_rows($results);
$count=0;
while($Match = $results -> fetch_assoc()){
#recieving the form data
$Enrollment_No = $Match['Enrollment_No'];
$name = $Match['Name'];
$course = $Match['Course'];
$mobile_no = $Match['Mobile'];
$email = $Match['Email'];
$pdf->Ln();

$pdf->Cell(32.1,6,$Enrollment_No,1,0,'C');
$pdf->Cell(69.9,6,$name,1,0,'C');
$pdf->Cell(29.9,6,$mobile_no,1,0,'C');
if(strlen($email) <= 19){
 $pdf->MultiCell(58.2,6,$email,1,'C');
}
else{
$pdf->MultiCell(58.2,6,$email,1,'C');
}
$file = $class1.'.pdf';
$count += 1;
if($records == $count){
unset($_SESSION['sql']);
unset($_SESSION['Class']);
unset($_SESSION['choice']);
$pdf->output($file, 'D');
echo "<script>window.location='Students Data.php';</script>";
}
}
}
else{
$pdf->SetFont('Times','B',15);
$pdf->Cell(0,10,"N.J. Sonecha Management and Technical Institute - Chanduvav ",1,1,'C');
$pdf->Cell(0,10,$class,1,1,'C');
$pdf->SetFont('arial','B',10.5);
$pdf->Cell(35.9,6,"Enrollment_No",1,0,'C');
$pdf->Cell(154.1,6,"Name",1,0,'C');

$pdf->SetFont('arial','',9.6);
$results = mysqli_query($conn, $sql);
$records = mysqli_num_rows($results);
$count=0;
while($Match = $results -> fetch_assoc()){
#recieving the form data
$Enrollment_No = $Match['Enrollment_No'];
$name = $Match['Name'];
$pdf->Ln();

$pdf->Cell(35.9,6,$Enrollment_No,1,0,'C');
$pdf->Cell(154.1,6,$name,1,0,'C');
$file = $class1.'.pdf';
$count += 1;
if($records == $count){
unset($_SESSION['sql']);
unset($_SESSION['Class']);
unset($_SESSION['choice']);
$pdf->output($file, 'D');
echo "<script>window.location='Students Data.php';</script>";
}
}
}
?>