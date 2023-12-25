<?php
session_start();
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

    <link rel="stylesheet" href="quiz.css">

</head>

<body>

    <div class="container result box mt-5 border border-3 border-primary shadow" id="result-box">
        <div>
            <h1>Result</h1>
        </div>

        <div id="score">
            <div class="mt-4">
                <p>Total Questions: </p>
                <p id="total-quiz">
                    <?php echo $_SESSION['total_questions']; ?>
                </p>
            </div>
            <div class="mt-3">
                <p>Correct: </p>
                <p id="total-correct">
                    <?php echo $_SESSION['correct_answers']; ?>
                </p>
            </div>
            <div class="mt-3">
                <p>Wrong: </p>
                <p id="total-wrong">
                    <?php echo $_SESSION['wrong_answers']; ?>
                </p>
            </div>
            <div class="mt-3">
                <p>Percentage: </p>
                <p id="total-percentage">
                    <?php echo $_SESSION['percentage']; ?>%
                </p>
            </div>
            <div class="mt-3">
                <p>Your Score is: </p>
                <p id="total-score">
                    <?php echo $_SESSION['score']; ?>
                </p>
                <?php unset($_SESSION['score'], $_SESSION['correct_answers'], $_SESSION['wrong_answers'], $_SESSION['percentage'], $_SESSION['total_questions']); ?>
            </div>
        </div>
        <!-- Try Again Button -->
        <div class="text-center mt-3">
            <form action="quiz.php" method="post">
                <button type="button" class="btn btn-result mt-3">Try Again</button>
                <button class="btn btn-result mt-3">Back</button>
            </form>
        </div>

        <!-- Back Button -->
        <!-- <div>
            <a href="quiz.php" class="button mt-3">Back to Quiz Selection</a>
        </div> -->
    </div>

</body>

</html>