<?php
    $visitor_name = $_POST['name'];
    $visitor_subject = $_POST['subject'];
    $visitor_message = $_POST['message'];
    $visitor_email = $_POST['email'];
    $visitor_tel_number = $_POST['tel-number'];

    $email_from = 'LuyandaDingindlelaemail@gmail.com';
    $email_subject = 'New form submission';
    $email_body = "User name: $visitor_name.\n".
                    "User email: $visitor_email\n".
                    "User telephone number: $visitor_tel_number".
                    "Email Subject: $visitor_subject".
                    "Email message: $visitor_message";

    $to = '';
    $headers = "From: $email_from\r\n";
    $headers .= "Reply-to: $visitor_email\r\n";

    mail($to, $visitor_subject, $email_body, $headers);
    header("Location: index.html");
?>