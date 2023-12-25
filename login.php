<?php
$conn = mysqli_connect('localhost', 'root', '', 'islamiclearningfortoddlers');


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION['noAdmin'])) {
    echo $_SESSION['noAdmin'];
    unset($_SESSION['noAdmin']);
}

session_start();

if (isset($_POST['submit'])) {
    echo 'Yes data submitted';

    // variabkes to store username and database
    $userName = $_POST['userName'];
    $passWord = $_POST['password'];

    // $sql = "SELECT * FROM admin WHERE usernames = '$userName' AND passwords = '$passWord'";
    $stmt = $conn->prepare("SELECT * FROM admin WHERE usernames = ? AND passwords = ?");
    $stmt->bind_param("ss", $userName, $passWord);
    $stmt->execute();
    $result = $stmt->get_result();


    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if ($count == 1) {
        // message to welcome admin to dashboard
        $_SESSION['loginMessage'] = '<span class = "success" > Welcome ' . $userName . '</span>';
        header('location: dashboard.php');
        exit();
    } else {
        // message if admin acc is not in database
        $_SESSION['noAdmin'] = '<span class = "fail" > Welcome ' . $userName . 'is not registered! </span>';
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
    <div class="form-container d-flex align-items-center justify-content-center rounded p-5 flex-column">
        <div class="titleDiv text-center">
            <h1 class="title">Login</h1>
            <span class="subTitle">Welcome Back!</span>
        </div>

        <!-- formSection -->
        <form action="" method="POST">
            <div class="rows grid">

                <!-- Username -->
                <div class="row">
                    <label for="username">User Name</label>
                    <input type="text" name="userName" id="username" placeholder="Enter User Name" required>
                </div>

                <!-- Password -->
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter User password" required>
                </div>

                <!-- Submit -->
                <div class="row">
                    <input type="submit" name="submit" id="submitBtn" value="Login">

                    <span class="registerLink">Don't have an account?
                        <a href="signUp.php">Sign Up</a></span>
                </div>

            </div>
        </form>

    </div>

</body>

</html>