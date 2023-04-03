<?php
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Create the email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n\n";
  $email_content .= "Subject: $subject\n\n";
  $email_content .= "Message:\n$message\n";

  // Send the email
  $to = 'youremail@example.com';
  $subject = 'New Contact Form Submission';
  $headers = "From: $email";

  mail($to, $subject, $email_content, $headers);

  // Redirect back to the contact page with a success message
  header("Location: contact.html?success=1");
?>
