<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email address from the form
    $email = $_POST["email"];

    // Replace with your email address or add your logic to save the email address to a database, etc.
    $to = "your_email@example.com";

    // Set the email subject
    $subject = "Newsletter Subscription";

    // Compose the email content
    $email_content = "Email Address: $email";

    // Set the headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
