<?php
//Create Connection Credentials
$connection = mysqli_connect('localhost', 'root', '', 'islamiclearningfortoddlers');


//Error Handler
if ($connection->connect_error) {
    printf("connect failed: %s\n", $connection->connect_error);
    exit();
}

$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection, $query));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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

    <title>Kutuby</title>

</head>

<body>

    <div class="container">
        <div class="section-title position-relative text-center mx-auto mb-3 pb-4 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 600px;">
            <h1 class="mb-3">Levels Quiz</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 quiz-card col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card card-one text-black border border-3 border-primary rounded shadow">
                    <div class="card-body text-center p-5">
                        <h1 class="card-title fw-bold mb-1">Quiz 1</h1>
                        <p class="card-text">5 Questions covering the basics of Level 1</p>
                        <button class="btn btn-primary px-4 mx-auto my-2"><a href="questions.php?n=1"
                                class="start">Start Quiz</a></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 quiz-card">
                <div class="card card-two text-black border border-3 border-danger rounded shadow">
                    <div class="card-body text-center p-5">
                        <h1 class="card-title fw-bold mb-1">Quiz 2</h1>
                        <p class="card-text">5 Questions covering the basics of Level 2</p>
                        <button class="btn btn-primary px-4 mx-auto my-2"><a href="" class="start">Start
                                Quiz</a></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 quiz-card">
                <div class="card card-three text-black border border-3 border-info rounded shadow">
                    <div class="card-body text-center p-5">
                        <h1 class="card-title fw-bold mb-1">Quiz 3</h1>
                        <p class="card-text">5 Questions covering the basics of Level 3</p>
                        <button class="btn btn-primary px-4 mx-auto my-2"><a href=""
                                class="start">Start Quiz</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>