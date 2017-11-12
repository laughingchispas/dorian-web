<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
if (isset($_POST['email'])) {
    mail(
        'laughingchispas@gmail.com', //Change to Dorian's email address where he wants to receive the messages
        'New Email signup from DorianDumont.com', //Subject of the emails going to him
        "New email signup request: $email" //Body of the emails. Be sure to include $email
    );
}
/*

Below here you can 'echo 'a response json object or something if you want. That would be received by the $.post call's
callback in the web app as the data returning from the call. You should probably set response headers as json headers
etc...

EXAMPLE

echo {
  message: "Data sent to $email"
}

*/
