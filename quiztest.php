<?php require_once 'connectors/conn.php';?>
	<?php require_once 'connectors/time-track.php';?>
	<?php
	
	$sql = " SELECT * FROM myquiz";
	
		$result = mysqli_query($link, $sql);
		//$rows = mysqli_fetch_array($result);
		$totalq=mysqli_num_rows($result);
		?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
	<title>Quiz</title>
	</head>
	<body>
	<form method="post" action="my-result.php">
	<?php 
	  //echo "$i / $totalq";
  echo"<div class='tab'>
  <div class='qt'>$i / $totalq</div></br>
  <table>";
  while($row = mysqli_fetch_array($result) AND $i<=$totalq){
	  $i++;
  echo"<tr><td colspan='2'><b>$i $row[que]</b></td></tr>
    <tr><td><p><input type='hidden' name='Id' value='$row[id]'><input type='hidden' name='Ans' value='$row[ans]'><input type='Radio' name='Q' value='A'></td><td>$row[A]</td></tr></p>
	<tr><td><p><input type='hidden' name='Id' value='$row[id]'><input type='hidden' name='Ans' value='$row[ans]'><input type='Radio' name='Q' value='B'></td><td>$row[B]</td></tr></p>
	<tr><td><p><input type='hidden' name='Id' value='$row[id]'><input type='hidden' name='Ans' value='$row[ans]'><input type='Radio' name='Q' value='C'></td><td>$row[C]</td></tr></p>
	<tr><td><p><input type='hidden' name='Id' value='$row[id]'><input type='hidden' name='Ans' value='$row[ans]'><input type='Radio' name='Q' value='D'></td><td>$row[D]</td></tr></p>
	"; }
  
  ?>
	   </table>
    
  </div>
   <button type='submit'>Submit</submit>
  
  </form>
	
	</body>
	
	
	
	</html>