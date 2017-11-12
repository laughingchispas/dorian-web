<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
if (isset($_POST['email'])) {
    mail(
        'laughingchispas@gmail.com', //Change to Dorian's email address where he wants to receive the messages
        'New Email signup from DorianDumont.com', //Subject of the emails going to him
        "New email signup request: $email" //Body of the emails. Be sure to include $email
    );
}

echo "{message: \"Email request sent for $email\"}";
