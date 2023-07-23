<?php
include('../../certificate_generation/fpdf/fpdf.php');
session_start();
$er_no = $_GET['enrollment'];
$conn = mysqli_connect('localhost', 'root', '', 'gmgc');
$cmd = "SELECT * FROM  `language_c` WHERE `enrollment` = '$er_no'";
// echo"$er_no";
$result = mysqli_query($conn, $cmd);
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $er_no = $row['enrollment'];
    $branch = $row['branch'];
    $sem = $row['sem'];
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
$pdf->Image("./language.png", 20, 20, 780);
// Print the certificate logo  
// $pdf->Image("fpdf181/tt1.png", 140, 180, 240); 
// Print the title of the certificate  
$pdf->SetFont('times', 'B', 80);
// $pdf->Cell(720+10,200,"CERTIFICATE",0,0,'C'); 


$pdf->SetFont('Arial', 'I', 20);
$pdf->SetXY(320, 250);
$pdf->Cell(10, 10, $name, 0, 1, 'L');

$pdf->SetFont('Arial', 'I', 14);
$pdf->SetXY(280, 300);
$pdf->Cell(10, 10, $er_no, 0, 1, 'C');

$pdf->SetFont('Arial', 'I', 14);
$pdf->SetXY(505, 295);
$pdf->Cell(10, 10, $branch, 0, 1, 'L');




$pdf->Output();
?>
3