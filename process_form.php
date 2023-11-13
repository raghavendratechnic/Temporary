<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "raghavender.mogili19@gmail.com";

    // Set subject
    $subject = "New Contact Form Submission";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $email_message, $headers);

    // You can add additional logic here, such as redirecting the user to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
