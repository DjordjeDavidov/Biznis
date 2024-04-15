<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Email address where you want to receive the message
    $to = "davidovdjordje40@gmail.com";
    $subject = "New message from your website";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed!";
    }
} else {
    echo "Invalid request!";
}
?>
