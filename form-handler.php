<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'webweave875@gmail.com';
    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name\n".
                   "User Email: $visitor_email\n".
                   "Subject: $subject\n".
                   "User Message: $message\n";

    $to = 'pratyushsharma200526@gmail.com';

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: ./contact.html");
} else {
    // Redirect to the form if accessed directly without POST request
    header("Location: ./contact.html");
}
?>
