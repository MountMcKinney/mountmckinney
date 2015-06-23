<?php

require (ROOT_PATH . "inc/phpmailer/class.phpmailer.php");

// /* This file contains instructions for three different states of the form:
//  *   - Displaying the initial contact form
//  *   - Handling the form submission and sending the email
//  *   - Displaying a thank you message
//  */
//
// // a request method of post indicates that
// // we are receiving a form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // the form has fields for name, email, and message
    $name = trim($_POST["connect_name"]);
    $email = trim($_POST["connect_email"]);
    $comments = trim($_POST["connect_comments"]);

    // the fields name, email, and message are required
    if ($name == "" OR $email == "" OR $comments == "") {
        $error_message = "You must specify a value for name, email address, and comments.";
    }

    // this code checks for malicious code attempting
    // to inject values into the email header
    if (!isset($error_message)) {
        foreach( $_POST as $value ){
            if( stripos($value,'Content-Type:') !== FALSE ){
                $error_message = "There was a problem with the information you entered.";
            }
        }
    }

    // the field named address is used as a spam honeypot
    // it is hidden from users, and it must be left blank
    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Your form submission has an error. Please try again, if problem persists please contact me.";
    }

    $mail = new PHPMailer();

    if (!isset($error_message) && !$mail->ValidateAddress($email)){
        $error_message = "You must specify a valid email address.";
    }

    // if, after all the checks above, there is no message, then we
    // have a valid form submission; let's send the email
    if (!isset($error_message)) {
        $email_body = "";
        $email_body .= "Name: " . $name . "<br>";
        $email_body .= "Email: " . $email . "<br>";

        $mail->SetFrom($email, $name);
        $address = $email;
        $mail->AddAddress($address, "john@mountmckinney.com");
        $mail->Subject    = "I'll Reach Out Shortly," . $name;
        $mail->MsgHTML($email_body);

        // if the email is sent successfully, redirect to a thank you page;
        // otherwise, set a new error message
        if($mail->Send()) {
            header("Location: " . BASE_URL . "portfolio/portfolio.php?status=thanks");
            exit;
        } else {
          $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
        }
    }
}
?>
