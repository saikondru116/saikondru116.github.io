<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validate form data
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Recipient email address
        $to = "saicoc65@gmail.com"; // Replace with your email address

        // Email subject
        $email_subject = "New Contact Form Submission: " . $subject;

        // Email body content
        $email_body = "You have received a new message from the contact form.\n\n";
        $email_body .= "Name: " . $name . "\n";
        $email_body .= "Email: " . $email . "\n";
        $email_body .= "Subject: " . $subject . "\n";
        $email_body .= "Message:\n" . $message . "\n";
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        // Send the email
        if (mail($to, $email_subject, $email_body, $headers)) {
            echo "<h2>Form Submitted Successfully</h2>";
            echo "<p>Your message has been sent successfully. We will get back to you soon.</p>";
        } else {
            echo "<p>Error: Unable to send email. Please try again later.</p>";
        }
    } else {
        echo "<p>Error: All fields are required!</p>";
    }
} else {
    echo "<p>Error: Invalid form submission.</p>";
}
?>
