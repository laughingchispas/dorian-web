<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
if (isset($_POST['email'])) {
    mail(
        'me@laytonmiller.com', //Change to Dorian's email address where he wants to receive the messages
        'New Email signup from DorianDumont.com', //Subject of the emails going to him
        "New email signup request: $email" //Body of the emails. Be sure to include $email
    );
    echo "mail sent";
}

echo "{message: \"Email request sent for $email\"}";
