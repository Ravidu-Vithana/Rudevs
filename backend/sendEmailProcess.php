<?php

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["description"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $description = $_POST["description"];

    if (empty($name) || !ctype_alpha(str_replace(' ', '', $name))) {
        echo ("Invalid Name");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
        echo ("Invalid Email Address");
    } else if (empty($subject)) {
        echo ("Please enter the subject");
    } else if (strlen($subject) > 100) {
        echo ("Length of subject cannot exceed 100 characters");
    } else if (empty($description)) {
        echo ("Please enter the description");
    } else if (strlen($description) > 1000) {
        echo ("Length of description cannot exceed 1000 characters");
    } else {

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'raviduyashith123@gmail.com';
        $mail->Password = 'kzisdapttbvthese';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->setFrom('raviduyashith123@gmail.com', 'New Request');
        $mail->addReplyTo($email, 'New Request');
        $mail->addAddress('raviduyashith123@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $bodyContent = "<span><b>Client Name: </b>" . $name . "</span><br/><br/><span><b>Client Email: </b>" . $email . "</span><br/><br/><span><b>Client Description: </b></span><br/><span>" . $description . "</span>";
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo ("Message sending failed. Please try again. Error note: " . $mail->ErrorInfo);
        } else {
            echo ("success");
        }
    }
}
