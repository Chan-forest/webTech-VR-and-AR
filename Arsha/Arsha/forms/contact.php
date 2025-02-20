<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Email configuration
  $to = "your-email@example.com";
  $subject = "New Contact Form Submission";
  $headers = "From: " . $email;

  // Email body
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully.";
  } else {
    echo "Failed to send message.";
  }
} else {
  echo "Invalid request.";
}
?>
