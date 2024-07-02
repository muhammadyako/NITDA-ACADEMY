<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourser";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    // Process each question
    foreach ($_POST as $question => $answer) {
        // Process the answer (you can customize this part based on your quiz requirements)
        // For example, checking the answer against the database
        $sql = "SELECT correct_answer FROM questions WHERE question_id = $question";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row["correct_answer"] == $answer) {
                $score++;
            }
        }
    }
	$score = $score * 100 / 2;
	$score = number_format($score);
	$score= "$score%";
    // Save the score to the database or perform any other necessary actions
    // For example, you can insert the score into a scores table
    $insert_sql = "INSERT INTO scores (user_id, score) VALUES (1, $score)";
    $conn->query($insert_sql);
	
    // Display the score to the user
    echo "Your score: " . $score;
}

$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Form</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="question1">Question 1: What is 2 + 2?</label>
        <input type="text" id="question1" name="1"><br><br>

        <label for="question2">Question 2: What is the capital of France?</label>
        <input type="text" id="question2" name="2"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

