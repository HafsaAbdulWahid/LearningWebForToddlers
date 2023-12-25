<?php

$conn = mysqli_connect('localhost', 'root', '', 'islamiclearningfortoddlers');


//  Register a new account in database and login later with the same
if (isset($_POST['submit'])) {

    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $passWord = $_POST['password'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `admin`( `username`, `email`, `phone`, `password`) VALUES (
        '$userName',
        '$email',
        '$phone',
        '$passWord')";
    echo $sql;

    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        // message to show that if account created successfully
        $_SESSION['accountCreated'] = '<span class= "success"> Account ' . $userName . ' created! </span>';
        header('location: index.php');
        exit();

    } else {
        // message to show that if account failed to be created
        $_SESSION['unSuccessful'] = '<span class= "fail"> Account ' . $userName . 'not created! </span>';
        header('location: index.php');
        exit();
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico">
    <title>Kutuby</title>
    <link rel="stylesheet" href="user_auth.css">

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

</head>

<body>


    <div class="register-container d-flex align-items-center justify-content-center rounded p-5 flex-column">

        <div class="titleDiv  text-center">
            <h1 class="title">Sign Up</h1>
            <span class="subTitle">Thanks for choosing us!</span>
        </div>

        <!-- formSection -->
        <form action="" method="POST">
            <div class="rows grid">

                <!-- Username -->
                <div class="row">
                    <label for="username">User Name</label>
                    <input type="text" name="userName" id="username" placeholder="Enter User Name" required>
                </div>

                <!-- Email Address -->
                <div class="row">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Enter User email" required>
                </div>

                <!-- Phone Number -->
                <div class="row">
                    <label for="phone">Phone Number</label>
                    <input type="number" name="phone" id="phone" placeholder="Enter User phone number" required>
                </div>

                <!-- Password -->
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter User password" required>
                </div>

                <!-- Submit -->
                <div class="row">
                    <input type="submit" name="submit" id="submitBtn" value="Sign Up" required>

                    <span class="registerLink">Already have an account?
                        <a href="login.php">Login</a></span>
                </div>

            </div>
        </form>

    </div>

</body>

</html>