<?php
$to = "vickyraghav794@gmail.com";
$subject = "Test Email from PHP";
$message = "Hello, this is a test email!";
$headers = "From: info@codeethictech.com" . "\r\n" .
           "Reply-To: info@codeethictech.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
