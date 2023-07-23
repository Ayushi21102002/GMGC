<?php
require('./fpdf/fpdf.php');
$conn = mysqli_connect('localhost', 'root', '', 'language_c');
$sql = "SELECT `s_name`, `s_branch`, `er_no` FROM language_c";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $font = "ARIALS.TTF";
    $image = imagecreatefrompng('../certificate_generation/certificate.png');
    $color = imagecoLoraLLocate($image, 19, 21, 22);
    $name = $row['s_name'];
    $s_branch = $row['s_branch'];
    $er_no = $row['er_no'];
    imagettftext($image, 30, 0, 500, 470, $color, $font, $name);
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, $name);
    $pdf->Cell(50, 50, $s_branch);
    $pdf->Cell(100, 100, $er_no);
    $pdf->Output();

?>

<?php

    //  $branch =$row['s_branch'];
    //  $er_no =$row['er_no'];
    //  imagejpeg($image, "Certificate/" . $name . ".jpeg");
    //  $pdf = new FPDF('L','in',[11.7,8.27]);
    //  $pdf->Addpage();
    //  $pdf->Image("Certificate/" . $name . ".jpeg", 0, 0, 11.7, 8.27);
    //  $pdf->Output("Certificate/" . $name . ".pdf", "F");
    //  imagedestroy($image);
    //  echo "Certificate Created"."<br>";
  }
} else {
  echo "No Data Found";
}
?>