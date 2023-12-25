<?php
//Create Connection Credentials
$connection = mysqli_connect('localhost', 'root', '', 'islamiclearningfortoddlers');


//Error Handler
if ($connection->connect_error) {
    printf("connect failed: %s\n", $connection->connect_error);
    exit();
}

session_start();
//SET QUESTION NUMBER
$number = $_GET['n'];

//QUERY FOR THE QUESTION
$query = "SELECT * FROM questions WHERE question_number = $number";

//GET THE QUESTION
$result = mysqli_query($connection, $query);
$question = mysqli_fetch_assoc($result);

//GET CHOICES
$query = "SELECT * FROM options where question_number = $number";
$choices = mysqli_query($connection, $query);

//GET TOTAL QUESTIONS
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection, $query));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kutuby</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="quiz.css">
</head>

<body>
    <div class="container box question-box hide border border-3 border-primary shadow" id="question-box">
        <div class="section-title position-relative mx-auto mb-3 pb-4 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 600px;">
            <h1 class="mt-1 text-center">Level 1</h1>
            <div class="current mt-3" id="question-number"> Question
                <?php echo $number; ?> of
                <?php echo $total_questions; ?>
            </div>
            <p class="question mt-4">
                <?php echo $question['question_text']; ?>
            </p>
            <form method="POST" action="process.php?number=<?php echo $number; ?>">
                <div class="choicess">
                    <?php
                    while ($row = mysqli_fetch_assoc($choices)) { ?>
                        <li>
                            <input type="radio" name="choice" value="<?php echo $row['id']; ?>">
                            <?php echo $row['coption']; ?>
                        </li>
                        <?php
                    }
                    mysqli_data_seek($choices, 0);
                    ?>
                    <input type="submit" class="button mt-3" onclick="nextQuiz()" value="Next">
                </div>
            </form>
        </div>
    </div>

</body>

</html>