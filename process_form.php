<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['_replyto'];
    $message = $_POST['message'];

    // Email information
    $to = "adnanmuhammad4393@gmail.com";
    $subject = "New Affilater from CodeMasterUnity";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "<div class='alert alert-success mt-3' role='alert'>Thank you! Your message has been sent.</div>";
    } else {
        echo "<div class='alert alert-danger mt-3' role='alert'>Oops! Something went wrong. Please try again later.</div>";
    }
}
?>
