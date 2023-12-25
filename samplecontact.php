<?php
// Establish a database connection
$conn = new mysqli("localhost", "root", "", "islamiclearningfortoddlers");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert data into the database without specifying 'id'
$sql = "INSERT INTO `contact`(`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";

if ($conn->query($sql) === TRUE) {
    // Success message with the modal
    ?>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Thank you, your email has been successfully sent to our support and we will
                    get back to you within 24 hours
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    // Trigger the modal open event using JavaScript
    echo '<script>$("#exampleModalCenter").modal("show");</script>';
} else {
    // Error message
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

<!-- Add this to your HTML head section -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
