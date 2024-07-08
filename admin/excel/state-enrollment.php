<?php 

require_once '../connectors/conn.php';
$i=0;
$lga=$_GET['lga'];

$select=$_GET['select'];
$value=$_GET['value'];
if(!isset($_GET['pnumber'])){
$pnumber='';
}

 
				 $sql = "SELECT * FROM learner";
               $query=mysqli_query ($link, $sql);
			   $total=mysqli_num_rows($query);
			   $total= number_format($total);
			   
				 $sql1 = "SELECT * FROM learner WHERE State='FCT'";
               $query1=mysqli_query ($link, $sql1);
			   $fct=mysqli_num_rows($query1);
			   $fct= number_format($fct);
			  
				 $sql2 = "SELECT * FROM learner WHERE State='Abia'";
               $query2=mysqli_query ($link, $sql2);
			   $abia=mysqli_num_rows($query2);
			   $abia= number_format($abia);
			  
				 $sql3 = "SELECT * FROM learner WHERE State='Adamawa'";
               $query3=mysqli_query ($link, $sql3);
			   $adamawa=mysqli_num_rows($query3);
			   $adamawa= number_format($adamawa);
			  
				 $sql4 = "SELECT * FROM learner WHERE State='Akwa Ibom'";
               $query4=mysqli_query ($link, $sql4);
			   $akwaibom=mysqli_num_rows($query4);
			   $akwaibom= number_format($akwaibom);
			  
				 $sql5 = "SELECT * FROM learner WHERE State='Anabra'";
               $query5=mysqli_query ($link, $sql5);
			   $anabra=mysqli_num_rows($query5);
			   $anabra= number_format($anabra);
			   
				 $sql6 = "SELECT * FROM learner WHERE State='Bauchi'";
               $query6=mysqli_query ($link, $sql6);
			   $bauchi=mysqli_num_rows($query6);
			   $bauchi= number_format($bauchi);
			   
				 $sql7 = "SELECT * FROM learner WHERE State='Bayelsa'";
               $query7=mysqli_query ($link, $sql7);
			   $bayelsa=mysqli_num_rows($query7);
			   $bayelsa= number_format($bayelsa);
			   
				 $sql8 = "SELECT * FROM learner WHERE State='Benue'";
               $query8=mysqli_query ($link, $sql8);
			   $benua=mysqli_num_rows($query8);
			   $benue= number_format($benue);
			  
				 $sql9 = "SELECT * FROM learner WHERE State='Borno'";
               $query9=mysqli_query ($link, $sql9);
			   $borno=mysqli_num_rows($query9);
			   $borno= number_format($borno);
			   
				 $sql10 = "SELECT * FROM learner WHERE State='Cross River'";
               $query10=mysqli_query ($link, $sql10);
			   $crossriver=mysqli_num_rows($query10);
			   $crossriver= number_format($crossriver);
			  
				 $sql11 = "SELECT * FROM learner WHERE State='Delta'";
               $query11=mysqli_query ($link, $sql11);
			   $delta=mysqli_num_rows($query11);
			   $delta= number_format($delta);
			  
				 $sql12 = "SELECT * FROM learner WHERE State='Ebonyi'";
               $query12=mysqli_query ($link, $sql12);
			   $ebonyi=mysqli_num_rows($query12);
			   $ebonyi= number_format($ebonyi);
			   
				 $sql13= "SELECT * FROM learner WHERE State='Enugu'";
               $query13=mysqli_query ($link, $sql13);
			   $enugu=mysqli_num_rows($query13);
			   $enugu= number_format($enugu);
			  
				 $sql14 = "SELECT * FROM learner WHERE State='Edo'";
               $query14=mysqli_query ($link, $sql14);
			   $edo=mysqli_num_rows($query14);
			   $edo= number_format($edo);
			   
				 $sql15 = "SELECT * FROM learner WHERE State='Ekiti'";
               $query15=mysqli_query ($link, $sql15);
			   $ekiti=mysqli_num_rows($query15);
			   $ekiti= number_format($ekiti);
			   
				 $sql16 = "SELECT * FROM learner WHERE State='Gombe'";
               $query16=mysqli_query ($link, $sql16);
			   $gombe=mysqli_num_rows($query16);
			   $gombe= number_format($gombe);
			   
				 $sql17 = "SELECT * FROM learner WHERE State='Imo'";
               $query17=mysqli_query ($link, $sql17);
			   $imo=mysqli_num_rows($query17);
			   $imo= number_format($imo);
			   
				 $sql18 = "SELECT * FROM learner WHERE State='Jigawa'";
               $query18=mysqli_query ($link, $sql18);
			   $jigawa=mysqli_num_rows($query18);
			   $jigawa= number_format($jigawa);
			   
				 $sql19 = "SELECT * FROM learner WHERE State='Kaduna'";
               $query19=mysqli_query ($link, $sql19);
			   $kaduna=mysqli_num_rows($query19);
			   $kaduna= number_format($kaduna);
			   
				 $sql20 = "SELECT * FROM learner WHERE State='Kano'";
               $query20=mysqli_query ($link, $sql20);
			   $kano=mysqli_num_rows($query20);
			   $kano= number_format($kano);
			   
				 $sql21 = "SELECT * FROM learner WHERE State='Katsina'";
               $query21=mysqli_query ($link, $sql21);
			   $katsina=mysqli_num_rows($query21);
			   $katsina= number_format($katsina);
			   
				 $sql22 = "SELECT * FROM learner WHERE State='Kebbi'";
               $query22=mysqli_query ($link, $sql22);
			   $kebbi=mysqli_num_rows($query22);
			   $kebbi= number_format($kebbi);
			   
				 $sql23 = "SELECT * FROM learner WHERE State='Kogi'";
               $query23=mysqli_query ($link, $sql23);
			   $kogi=mysqli_num_rows($query23);
			   $kogi= number_format($kogi);
			   
				 $sql24 = "SELECT * FROM learner WHERE State='Kwara'";
               $query24=mysqli_query ($link, $sql24);
			   $kwara=mysqli_num_rows($query24);
			   $kwara= number_format($kwara);
			   
				 $sql25 = "SELECT * FROM learner WHERE State='Lagos'";
               $query25=mysqli_query ($link, $sql25);
			   $lagos=mysqli_num_rows($query25);
			   $lagos= number_format($lagos);
			   
				 $sql26 = "SELECT * FROM learner WHERE State='Nasarawa'";
               $query26=mysqli_query ($link, $sql26);
			   $nasarawa=mysqli_num_rows($query26);
			   $nasarawa= number_format($nasarawa);
			   
				 $sql27 = "SELECT * FROM learner WHERE State='Niger'";
               $query27=mysqli_query ($link, $sql27);
			   $niger=mysqli_num_rows($query27);
			   $niger= number_format($niger);
			   
				 $sql28 = "SELECT * FROM learner WHERE State='Ogun'";
               $query28=mysqli_query ($link, $sql28);
			   $ogun=mysqli_num_rows($query28);
			   $ogun= number_format($ogun);
			   
				 $sql29 = "SELECT * FROM learner WHERE State='Ondo'";
               $query29=mysqli_query ($link, $sql29);
			   $ondo=mysqli_num_rows($query29);
			   $ondo= number_format($ondo);
			   
				 $sql30 = "SELECT * FROM learner WHERE State='Osun'";
               $query30=mysqli_query ($link, $sql30);
			   $osun=mysqli_num_rows($query30);
			   $osun= number_format($osun);
			   
				 $sql31 = "SELECT * FROM learner WHERE State='Oyo'";
               $query31=mysqli_query ($link, $sql31);
			   $oyo=mysqli_num_rows($query31);
			   $oyo= number_format($oyo);
			   
				 $sql32 = "SELECT * FROM learner WHERE State='Plateau'";
               $query32=mysqli_query ($link, $sql32);
			   $plateau=mysqli_num_rows($query32);
			   $plateau= number_format($plateau);
			   
				 $sql33 = "SELECT * FROM learner WHERE State='Rivers'";
               $query33=mysqli_query ($link, $sql33);
			   $rivers=mysqli_num_rows($query33);
			   $rivers= number_format($rivers);
			   
				 $sql34 = "SELECT * FROM learner WHERE State='Sokoto'";
               $query34=mysqli_query ($link, $sql34);
			   $sokoto=mysqli_num_rows($query34);
			   $sokoto= number_format($sokoto);
			  
				 $sql35 = "SELECT * FROM learner WHERE State='Taraba'";
               $query35=mysqli_query ($link, $sql35);
			   $taraba=mysqli_num_rows($query35);
			   $taraba= number_format($taraba);
			   
				 $sql36 = "SELECT * FROM learner WHERE State='Yobe'";
               $query36=mysqli_query ($link, $sql36);
			   $yobe=mysqli_num_rows($query36);
			   $yobe= number_format($yobo);
			   
				 $sql37 = "SELECT * FROM learner WHERE State='Zamfara'";
               $query37=mysqli_query ($link, $sql37);
			   $zamfara=mysqli_num_rows($query37);
			   $zamfara= number_format($zamfara);
			   
			   $sum= $totalc * $totale;
			   $cpercent= $sum / 100;
			    $cpercent= number_format($cpercent);
		
		
		

header('Content-type: application/excel');
$filename = 'Enrollment per state.xls';
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
								<tr><td></td><th>ENROLLMENT PER STATE</th></tr>
								<tr><td></td><th></th></tr>
								<tr><th>STATE</th><th>LEARNERS</th></tr>								
								<tr><td>FCT</td><td>$fct</td></tr>
								<tr><td>Abia</td><td>$abia</td></tr>
								<tr><td>Adamawa</td><td>$adamawa</td></tr>
								<tr><td>Akwa Ibom</td><td>$akwaibom</td></tr>
								<tr><td>Anabra</td><td>$anabra</td></tr>
								<tr><td>Bauchi</td><td>$bauchi</td></tr>
								<tr><td>Bayelsa</td><td>$bayelsa</td></tr>
								<tr><td>Benue</td><td>$benue</td></tr>
								<tr><td>Borno</td><td>$borno</td></tr>
								<tr><td>Cross River</td><td>$crossriver</td></tr>
								<tr><td>Delta</td><td>$delta</td></tr>
								<tr><td>Ebonyi</td><td>$ebonyi</td></tr>
								<tr><td>Enugu</td><td>$enugu</td></tr>
								<tr><td>Edo</td><td>$edo</td></tr>
								<tr><td>Ekiti</td><td>$ekiti</td></tr>
								<tr><td>Gombe</td><td>$gombe</td></tr>
								<tr><td>Imo</td><td>$imo</td></tr>
								<tr><td>Jigawa</td><td>$jigawa</td></tr>
								<tr><td>Kaduna</td><td>$kaduna</td></tr>
								<tr><td>Kano</td><td>$kano</td></tr>
								<tr><td>Katsina</td><td>$katsina</td></tr>
								<tr><td>Kebbi</td><td>$kebbi</td></tr>
								<tr><td>Kogi</td><td>$kogi</td></tr>
								<tr><td>Kwara</td><td>$kwara</td></tr>
								<tr><td>Lagos</td><td>$lagos</td></tr>
								<tr><td>Nasarawa</td><td>$nasarawa</td></tr>
								<tr><td>Niger</td><td>$niger</td></tr>
								<tr><td>Ogun</td><td>$ogun</td></tr>
								<tr><td>Ondo</td><td>$ondo</td></tr>
								<tr><td>Osun</td><td>$osun</td></tr>
								<tr><td>Oyo</td><td>$oyo</td></tr>
								<tr><td>Plateue</td><td>$plateau</td></tr>
								<tr><td>Rivers</td><td>$rivers</td></tr>
								<tr><td>Sokoto</td><td>$sokoto</td></tr>
								<tr><td>Taraba</td><td>$taraba</td></tr>
								<tr><td>Yobe</td><td>$yobe</td></tr>
								<tr><td>Zamfara</td><td>$zamfara</td></tr>
								<tr><td>Total</td><td>$total</td></tr></table>
</body></html>";


//echo $data;

?>