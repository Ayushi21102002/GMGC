<?php
include('../../certificate_generation/fpdf/fpdf.php');
session_start();
$er_no=$_SESSION['enrollment'];
$conn = mysqli_connect('localhost', 'root', '', 'gmgc');

$cmd = "SELECT * FROM `duplicategrade_certificate` WHERE `enrollment` = '$er_no'";
$result = mysqli_query($conn, $cmd);
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $er_no = $row['enrollment'];
    $branch = $row['branch'];
    $exam_detail= $row['exam_detail'];
    
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
$pdf->Image("./marksheet.jpg", 20, 20, 780);
// Print the certificate logo  
// $pdf->Image("fpdf181/tt1.png", 140, 180, 240); 
// Print the title of the certificate  
$pdf->SetFont('times', 'B', 80);
// $pdf->Cell(720+10,200,"CERTIFICATE",0,0,'C'); 


$pdf->SetFont('Arial', 'I', 14);
$pdf->SetXY(140, 120);
$pdf->Cell(95, 95, $name, 0, 95, 'L');

$pdf->SetFont('Arial', 'I', 14);
$pdf->SetXY(180, 120);
$pdf->Cell(150, 150, $er_no, 5, 5, 'L');

$pdf->SetFont('Arial', 'I', 14);
$pdf->SetXY(140, 190);
$pdf->Cell(55, 55,$exam_detail , 5, 5, 'L');


$pdf->SetFont('Arial', 'I', 14);
$pdf->SetXY(140, 190);
$pdf->Cell(100, 100, $branch, 5, 5, 'L');




$pdf->Output();
?>
3