<?php
//PDF USING MULTIPLE PAGES
//CREATED BY: Carlos Vasquez S.
//E-MAIL: cvasquez@cvs.cl
//CVS TECNOLOGIA E INNOVACION
//SANTIAGO, CHILE

//Connect to your database
//include("conectmysql.php");
$link=mysql_connect("localhost","root","root");
mysql_select_db("cfmfinal");
//Create new pdf file


require('fpdf.php');

$pdf=new FPDF();
//Disable automatic page break
$pdf->SetAutoPageBreak(false);

//Add first page
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetX(30);
$pdf->Cell(140,10,'Student Report',0,0,"C");
//set initial y axis position per page
$y_axis_initial = 25;

//print column titles
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY($y_axis_initial);
$pdf->SetX(25);
$pdf->Cell(30,6,'Sid',1,0,'L',1);
$pdf->Cell(30,6,'Sname',1,0,'L',1);
$pdf->Cell(30,6,'Address',1,0,'R',1);
$pdf->Cell(30,6,'Contect',1,0,'R',1);
$pdf->Cell(30,6,'Sem',1,0,'R',1);
$y_axis=25;
$row_height=6;
$y_axis = $y_axis + $row_height;

//Select the Products you want to show in your PDF file
//$result=mysql_query('select * from stud',$link);

//initialize counter
$i = 0;

//Set maximum rows per page
$max = 25;

//Set Row Height
$row_height = 6;

//while($row = mysql_fetch_array($result))
//{
	//If the current row is the last one, create new page and print column title
	if ($i == $max)
	{
		$pdf->AddPage();

		//print column titles for the current page
		$pdf->SetY($y_axis_initial);
		$pdf->SetX(25);
		$pdf->Cell(30,6,'Sid',1,0,'L',1);
		$pdf->Cell(30,6,'Sname',1,0,'L',1);
		$pdf->Cell(30,6,'Address',1,0,'R',1);
		$pdf->Cell(30,6,'Contect',1,0,'R',1);
		$pdf->Cell(30,6,'Sem',1,0,'R',1);

		//Go to next row
		$y_axis = $y_axis + $row_height;

		//Set $i variable to 0 (first row)
		$i = 0;
	}

	$rno = $row['sid'];
	$name = $row['sname'];
	$phy = $row['address'];
	$che = $row['mobile'];
	$maths = $row['sem'];

	$pdf->SetY($y_axis);
	$pdf->SetX(25);
	$pdf->Cell(30,6,$rno,1,0,'L',1);
	$pdf->Cell(30,6,$name,1,0,'L',1);
	$pdf->Cell(30,6,$phy,1,0,'R',1);
	$pdf->Cell(30,6,$che,1,0,'R',1);
	$pdf->Cell(30,6,$maths,1,0,'R',1);

	//Go to next row
	$y_axis = $y_axis + $row_height;
	$i = $i + 1;


mysql_close($link);

//Send file
$pdf->Output();
?>
