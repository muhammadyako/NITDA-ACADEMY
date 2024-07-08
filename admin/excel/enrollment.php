<?php 

require_once '../connectors/conn.php';



				 $sql = "SELECT * FROM enrollment";
               $query=mysqli_query ($link, $sql);
			   $totale=mysqli_num_rows($query);
			   $totale= number_format($totale);
			  
				 $sqlb = "SELECT * FROM enrollment WHERE Status='Inprogress'";
               $queryb=mysqli_query ($link, $sqlb);
			   $totali=mysqli_num_rows($queryb);
			   $totali= number_format($totali);
			  
				$sqlc = "SELECT * FROM enrollment WHERE Status='Completed'";
               $queryc=mysqli_query ($link, $sqlc);
			   $totalc=mysqli_num_rows($queryc);
			   $totalc= number_format($totalc);
			  
			   $sum= $totalc * $totale;
			   $cpercent= $sum / 100;
			    $cpercent= number_format($cpercent);
			   
		
		
		

header('Content-type: application/excel');
$filename = 'Enrollment.xls';
header('Content-Disposition: attachment; filename='.$filename);

echo"<html xmlns:x=urn:schemas-microsoft-com:office:excel>
<head>
    <!--[if gte mso 9]>
    <xml>
        <x:ExcelWorkbook>
            <x:ExcelWorksheets>
                <x:ExcelWorksheet>
                    <x:Name>Sheet 1</x:Name>
                    <x:WorksheetOptions>
                        <x:Print>
                            <x:ValidPrinterInfo/>
                        </x:Print>
                    </x:WorksheetOptions>
                </x:ExcelWorksheet>
            </x:ExcelWorksheets>
        </x:ExcelWorkbook>
    </xml>
    <![endif]-->
</head>

<body>
   <table><div class=record><table id=results>
								<tr><td></td><td></td><th>ENROLLMENT</th></tr>
								<tr><td></td><th></th></tr>
								<tr><th>Total Enrollments</th><th>Inprogress</th><th>Completed</th><th>Completion %</th></tr>
								<tr><td>$totale</td><td>$totali</td><td>$totalc</td><td>$cpercent</td></tr></table>
</body></html>";


//echo $data;

?>