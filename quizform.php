	<?php require_once 'connectors/conn.php';?>
	<?php require_once 'connectors/time-track.php';?>
	<?php
	
	$sql = " SELECT * FROM myquiz WHERE CourseCode='PHP01'";
	
		$result = mysqli_query($link, $sql);
		//$rows = mysqli_fetch_array($result);
		$totalq=mysqli_num_rows($result);
		?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
.qt{
float: right;	
}
</style>
<script>
  $( function() {
    $( "#draggable" ).draggable();
  } );
  </script>
  
  <script type="text/javascript">
  function timeout()
  {
	  var minute=Math.floor(timeLeft/60);
	  var second=timeLeft%60;
	  if(timeLeft<=0)
	  {  
         clearTimeout(tm);
		 document.getElementById("regForm").submit();
	  }
	  else
	  {   if(minute<10)
		  {
			  minute="0"+minute;
		  }
		  if(second<10)
		  {
			  second="0"+second;
		  }
		 document.getElementById("time").innerHTML=minute+":"+second; 
	  }
	  timeLeft--;
	var tm=setTimeout(function(){timeout()},1000);
	
	
  } 
  
  $(document).ready(function() {

    $(document)[0].oncontextmenu = function() { return false; }

    $(document).mousedown(function(e) {
        if( e.button == 2 ) {
            alert('Sorry, this functionality is disabled!');
            return false;
        } else {
            return true;
        }
    });
});
  </script>
<body>

<form id="regForm" method="post" action="my-result.php">
<?php echo"<input type='hidden' name='totalq' value='$totalq'>"; ?>
  <h1>Quiz</h1>
   <script type="text/javascript">
    var timeLeft=2*60;
  
  </script>
  
  <div id="draggable" class="ui-widget-content">
  <p><div id="time" style="float:right">Time</div>
  <div  style="float:right">Timeleft :</div></p>
</div>
  <!-- One "tab" for each step in the form: -->
  <?php while($row = mysqli_fetch_array($result) AND $i<=$totalq){
	  $i++;
	  //echo "$i / $totalq";
  echo"<div class='tab'>
  <div class='qt'>$i / $totalq</div></br>
  <table>
  <tr><td colspan='2'><b>$i. $row[que]</b></td></tr>
    <tr><td><p><input type='Radio' oninput='this.className = ''' id='question$i' name='$i' value='A'></td><td>$row[A]</td></tr></p>
	<tr><td><p><input type='Radio' oninput='this.className = ''' id='question$i' name='$i' value='B'></td><td>$row[B]</td></tr></p>
	<tr><td><p><input type='Radio' oninput='this.className = ''' id='question$i' name='$i' value='C'></td><td>$row[C]</td></tr></p>
	<tr><td><p><input type='Radio' oninput='this.className = ''' id='question$i' name='$i' value='D'></td><td>$row[D]</td></tr></p>
	 
	   </table>
    
  </div>"; }
  
  ?>
  
   
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
  <?php
  for($l=1; $l <= $totalq; $l++){
    echo"<span class='step'></span>";
  }
    
	?>
  </div>
</form>



<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
	
	
    //if (y[i].value == "") {
      // add an "invalid" class to the field:
      //y[i].className += " invalid";
      // and set the current valid status to false
     // valid = false;
    //}
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
</body>
</html>