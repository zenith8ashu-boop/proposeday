<?php
$to = "latikay15@gmail.com";   // recipient email
$subject = "💖 Yes to Forever 💖";
$message = "I’m so grateful you said yes! 
This moment means the world to me, and I can’t wait to spend every day proving how much I love you. 
Here’s to our journey together, filled with laughter, dreams, and endless love. 
Yours Ashu❤️";

$headers = "From: noreply@example.com";

if (mail($to, $subject, $message, $headers)) {
    http_response_code(200);
    echo "Email sent successfully!";
} else {
    http_response_code(500);
    echo "Failed to send email.";
}
?>

