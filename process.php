<?php
//Create Connection Credentials
$connection = mysqli_connect('localhost', 'root', '', 'islamiclearningfortoddlers');


//Error Handler
if ($connection->connect_error) {
    printf("connect failed: %s\n", $connection->connect_error);
    exit();
}

session_start();


//For first question ,score will not be there.
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = '0';
    $_SESSION['correct_answers'] = 0;
    $_SESSION['wrong_answers'] = 0;
}
if ($_POST) {
    //we need total question in process file too
    $query = "SELECT * FROM questions";
    $total_questions = mysqli_num_rows(mysqli_query($connection, $query));
    $_SESSION['total_questions'] = $total_questions; // Set total_questions in the session

    //we need to capture the question number from where form was submitted 
    $number = $_GET['number'];

    //Here we are storing the selected option by user
    $selected_choice = $_POST['choice'];

    //What will be the next question number
    $next = $number + 1;

    //Determine the coorect choice for current question 
    $query = "SELECT * FROM options WHERE question_number = $number AND is_correct = 1";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    $correct_choice = $row['id'];

    //Increase the score if selected process file is correct 
    if ($selected_choice == $correct_choice) {
        $_SESSION['score']++;
        $_SESSION['correct_answers']++;
    } else {
        $_SESSION['wrong_answers']++;
    }

    //Redirect to the next question or final score page
    if ($number == $total_questions) {
        $_SESSION['percentage'] = ($_SESSION['correct_answers'] / $total_questions) * 100;
        header("LOCATION: final.php");
    } else {
        header("LOCATION: questions.php?n=" . $next);
    }
}

?>