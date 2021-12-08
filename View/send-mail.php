<?php

if (isset($_POST['name'])&& isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){

    print("totor");
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $mailto = 'votremail@votreemail.com';
    $error_message = 'Une erreur est survenue';
    $success_message = 'Message envoyé';
    $index = "/PizzaVita";

    $message = "Name: $name\r\nEmail: $email\r\nMessage: $message";

    $headers = "From: $name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();

    if((strlen($name) < 1 ) || (strlen($email) < 1 ) || (strlen($message) < 1 ) || validateEmail($email) == FALSE ) {

        echo($error_message);

    } else {

        if( mail($mailto, $subject, $message, $headers) ) {

            echo($success_message);

        } else {

            echo($error_message);

        }

    }

    header($index, true);
}

function validateEmail($email)
{
    if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
        return true;
    else
        return false;

}


?>
