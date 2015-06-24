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
    $name = trim($_POST["sub_name"]);
    $email = trim($_POST["sub_email"]);

    // the fields name, email, and message are required
    if ($name == "" OR $email == "") {
        $error_message = "You must specify a value for name and email address.";
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
        $email_body .= '<h1>
                          <span style="font-size:25px">
                          <span style="font-family:verdana,geneva,sans-serif">
                          <span style="color:#0099ff">
                          <span style="line-height:1.6em">Thank You For Subscribing '.$name.'!</span></span></span></span>
                        </h1>';
        $email_body .= '<p>
                          <span style="font-family:verdana,geneva,sans-serif">You&#39;re now a member of the &nbsp;Mount McKinney mailing list. It&#39;s an exclusive club, I&#39;m sure you&#39;re quite pleased to be a part of it. If you haven&#39;t had a chance to read all
                          <span style="color:#FF8C00"></span><a href="http://mountmckinney.com/twocents/twocents.php" style="text-decoration:none" target="_blank">
                          <span style="color:#FF8C00">My Two Cents</span></a> and <a href="http://mountmckinney.com/campfirestories/campfirestories.php" style="text-decoration:none" target="_blank">
                          <span style="color:#FF8C00">Campfire Stories</span></a> I highly recommend you go do so.<br /><br />I heard something about a prize for the first 10 people to read all the stories</span>. Regardless, you&#39;re now all set up to receive all my new content.
                        </p>';

        $mail->SetFrom("john@mountmckinney.com", "Mount McKinney");
        $address = $email;
        $mail->AddAddress($address, "john@mountmckinney.com");
        $mail->AddReplyTo("john@mountmckinney.com");
        $mail->Subject = "Don't Worry, " . $name . " I told Sasquatch to Leave You Alone";
        $mail->MsgHTML($email_body);

        // if the email is sent successfully, redirect to a thank you page;
        // otherwise, set a new error message
        if($mail->Send()) {
            header("Location:?status=thanks");
            exit;
        } else {
          $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
        }
    }
}
?>
