<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
if (isset($_POST['email'])) {
    $sent = mail(
        'info@doriandumont.com', //Change to Dorian's email address where he wants to receive the messages
        'New Email signup from DorianDumont.com', //Subject of the emails going to him
        "New email signup request: $email"//Body of the emails. Be sure to include $email
    );

    if($sent) {
        echo "{message: \"Email request sent for $email\"}";
        die();
    }
    echo "{message: \"Email request not sent for $email -- there was an error!\"}";
    die();
}

echo "{message: \"Email did not sent - no email was specified\"}";
