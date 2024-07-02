<?php
require_once 'connectors/session.php'; 
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourser";

$da= getdate();
$date= strtotime("$da[mday] $da[month] $da[year]");
$DateIssued= date( 'd-m-Y', $date );

$RefId= "$_POST[RefId]";
$EId= "$_POST[EId]";
$CourseCode= "$_POST[CourseCode]";
$CourseTitle= "$_POST[CourseTitle]";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$totalq=$_POST['totalq'];
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    // Process each question
    foreach ($_POST as $question => $answer) {
        // Process the answer (you can customize this part based on your quiz requirements)
        // For example, checking the answer against the database
        $sql = "SELECT ans FROM myquiz WHERE CourseCode='$CourseCode' AND id = $question";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row["ans"] == $answer) {
                $score++;
				$scoreb=$score;
            }
        }
    }
	$score = $score * 100 / $totalq;
	$score = number_format($score);
	$result=$score;
	$score= "$score%";
    // Save the score to the database or perform any other necessary actions
    // For example, you can insert the score into a scores table
	if($result >= 50){
    $insert_sql = "INSERT INTO certificate (RefId,EId,LId,CourseCode,CourseTitle,Fname,Mname,Sname,Result,DateIssued) 
	VALUES ('$RefId','$EId','$_SESSION[LId]','$CourseCode','$CourseTitle','$_SESSION[LFname]','$_SESSION[LMname]','$_SESSION[LSname]','$score','$DateIssued',)";
    $conn->query($insert_sql);
	}
	
    // Display the score to the user
	echo"<center>";
	echo "Correct answers $scoreb/$totalq<p>";
    echo "Your score: " . $score;
	echo"</br></br><a href='course-view.php?CId=$CourseCode&RefId=$RefId'><button>Ok</button></center></a>";
	echo"</center>";
}
//echo $insert_sql;
//echo $sql;

$conn->close();

?>