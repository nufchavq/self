<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email address where you want to receive messages
    $to = 'nufchavq@outlook.com';

    // Subject of the email
    $subject = 'Contact Form Submission';

    // Construct the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo '<script>alert("Message sent successfully."); window.location = "index.html";</script>';
    } else {
        echo '<script>alert("Sorry, something went wrong. Please try again later."); window.location = "index.html";</script>';
    }
}

?>