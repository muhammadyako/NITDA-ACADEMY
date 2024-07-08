<?php 

require_once '../connectors/conn.php';



				$sqlt = " SELECT * FROM enrollment WHERE Provider='NITDA' ";	
	 $resultt = mysqli_query($link, $sqlt);
	 $total=mysqli_num_rows($resultt);

	 $sql = " SELECT SUM(Progress1) + SUM(Progress2) + SUM(Progress3) + SUM(Quiz) AS tprogress FROM enrollment WHERE Provider='NITDA' ";	
	 $result = mysqli_query($link, $sql);
		//if(mysqli_num_rows($result)>0){
			$row= mysqli_fetch_assoc($result);
		//$total=mysqli_num_rows($result);
		$tprog= $row['tprogress'];	
		
		$oprog= $total / 100;
		//$oprogress= ($tprog / 100 ) * $oprog;
		$oprogress= ($tprog / 100 );
		$oprogress= number_format($oprogress);
		$oprogress= intval($oprogress);
		
		//$totalprogress= ($tprog * $total) / 100;
		$totalprogress= ($tprog * $total);
		$avgl= $tprog / $total;
		$avgl= number_format($avgl);
		$avgl= intval($avgl);
			   
		
		
		

header('Content-type: application/excel');
$filename = 'learning progress.xls';
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
								<tr><td></td><th>LEARNING PROGRESS</th></tr>
								<tr><td></td><th></th></tr>
								<tr><th>Overall Learning progress</th><th>Average Learner Progress</th></tr>
								<tr><td>$oprogress%</td><td>$avgl%</td></tr></table>
</body></html>";


//echo $data;

?>