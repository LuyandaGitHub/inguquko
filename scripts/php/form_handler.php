<?php
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $user_email = $_POST['email'];
    $tel_number = $_POST['tel-number'];

    $email_from = 'LuyandaDingindlelaemail@gmail.com';
    $email_subject = 'New form submission';
    $email_body = "User name: $name.\n".
                    "User email: $user_email\n".
                    "User telephone number: $tel_number".
                    "Email Subject: $subject".
                    "Email message: $message";

    $to = '';
    $headers = "From: $email_from\r\n";
    $headers .= "Reply-to: $user_email\r\n";

    mail($to, $subject, $email_body, $headers);
    header("Location: index.html");
?>