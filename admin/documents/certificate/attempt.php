<?php
include('../../certificate_generation/fpdf/fpdf.php');
session_start();
// $er_no = $_GET['enrollment'];
$er_no=$_SESSION['enrollment'];
$conn = mysqli_connect('localhost', 'root', '', 'gmgc');

$cmd = "SELECT * FROM  `attempt_certificate` WHERE `enrollment` = '$er_no'";
$result = mysqli_query($conn, $cmd);
while ($row = mysqli_fetch_array($result)) {

    $er_no=$row['enrollment'];
    mysqli_query($conn,"UPDATE attempt_certifi  cate SET status='Approved' WHERE enrollment='$er_no'");

    $name = $row['name'];
    $er_no = $row['enrollment'];
    $branch = $row['branch'];
}
class PDF extends FPDF
{

    function Footer()
    {

        $this->SetY(-27);
        $this->SetFont('Arial', 'I', 8);

        $this->Cell(0, 10, 'This certificate has been ©  © produced by thetutor', 0, 0, 'R');
    }
}

$pdf = new FPDF('L', 'pt', 'A4');

//Loading data 
$pdf->SetTopMargin(20);
$pdf->SetLeftMargin(20);
$pdf->SetRightMargin(20);

$pdf->AddPage();
//  Print the edge of
$pdf->Image("./attempt.jpg", 20, 20, 780);
// Print the certificate logo  
// $pdf->Image("fpdf181/tt1.png", 140, 180, 240); 
// Print the title of the certificate  
$pdf->SetFont('times', 'B', 80);
// $pdf->Cell(720+10,200,"CERTIFICATE",0,0,'C'); 


$pdf->SetFont('Arial', 'I', 20);
$pdf->SetXY(320, 230);
$pdf->Cell(100, 100, $name, 0, 95, 'L');

$pdf->SetFont('Arial', 'I', 14);
$pdf->SetXY(260, 260);
$pdf->Cell(150, 150, $er_no, 5, 5, 'L');

$pdf->SetFont('Arial', 'I', 14);
$pdf->SetXY(550, 290);
$pdf->Cell(90, 90, $branch, 5, 5, 'L');




$pdf->Output();
?>
3