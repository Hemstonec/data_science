<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set up email parameters
    $to = "hemstonec@gmail.com"; // Replace with your email address
    $subject = "Message from your website";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>
