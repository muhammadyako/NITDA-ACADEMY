<?php
require('../fpdf/fpdf.php');
//require_once '../../education-master/connectors/session.php';
require_once '../../connectors/conn.php';
require_once '../../connectors/session.php';
$LId=$_SESSION['LId'];

$da= getdate();
$DateIssued="$da[mday] $da[month] $da[year]";
$RefId= $_GET['RefId'];
$CourseCode= $_GET['CourseCode'];

$sql = " SELECT * FROM enrollment WHERE RefId='$RefId' AND LId='$LId' ";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){		
		if($rownum=mysqli_num_rows($result)){}
while($row = mysqli_fetch_array($result)){
	$LName="$row[Fname] $row[Mname] $row[Sname]";
$Email="$row[Email]";
$Fname="$row[Fname]";
$Mname="$row[Mname]";
$Sname="$row[Sname]";
$CourseTitle="$row[CourseTitle]";
$Phoneno="$row[Phoneno]";
$Role="$row[Role]";
$Status="$row[Status]";
//$DateIssued="$row[DateIssued]";

}
		}
		}

//$name = text to be added, $x= x cordinate, $y = y coordinate, $a = alignment , $f= Font Name, $t = Bold / Italic, $s = Font Size, $r = Red, $g = Green Font color, $b = Blue Font Color
function AddText($pdf, $text, $x, $y, $a, $f, $t, $s, $r, $g, $b) {
$pdf->SetFont($f,$t,$s);	
$pdf->SetXY($x,$y);
$pdf->SetTextColor($r,$g,$b);
$pdf->Cell(0,10,$text,0,0,$a);	
}

//Create A 4 Landscape page
$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetCreator('Haneef Puttur');
// Add background image for PDF
$pdf->Image('../template.jpg',0,0,0);	

//Add a Name to the certificate

AddText($pdf,ucwords(''.$LName.''), 11,95, 'C', 'courier','B',25,3,84,156);

AddText($pdf,ucwords(''.$CourseTitle.''), 11,120, 'C', 'courier','B',20,3,84,156);

AddText($pdf,ucwords(''.$DateIssued.''), 11,138, 'C', 'Helvetica','B',14,3,84,156);

$pdf->Output();
?>