<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['_replyto'];
    $message = $_POST['message'];

    // Email information
    $to = "adnanmuhammad4393@gmail.com";
    $subject = "New Inquiry from CodeMasterUnity";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Error: Method not allowed.";
}
?>
