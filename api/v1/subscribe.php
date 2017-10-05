<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    mail(
        'me@laytonmiller.com',
        'New Email Signup from DorianDumont.com',
        "New email signup request: $email"
    );
}
echo 'SUCCESSFULLY SENT MAIL' . $email;