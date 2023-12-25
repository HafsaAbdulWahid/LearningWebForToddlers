<?php

$connection = mysqli_connect('localhost', 'root', '', 'islamiclearningfortoddlers');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$queryy = "INSERT INTO `contact`(`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";
mysqli_query($connection, $query);


if ($connection->query($queryy) === TRUE) {
    // Success message with a styled link to add information for another person
    // echo '<div style="text-align: center; margin-top: 20px;">';
    // echo '<p style="color: green;">Record added successfully. Thank you!</p>';
    // echo '<p><a href="index.php" style="text-decoration: none; background-color: #4caf50; color: #fff; padsding: 10px 20px; border-radius: 5px;">Add information for another person</a></p>';
    // echo '</div>';
} else {
    // Error message
    echo "Error: " . $queryy . "<br>" . $connection->error;
}

// Close the database connection
$connection->close();


?>