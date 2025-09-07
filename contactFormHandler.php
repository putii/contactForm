<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST['website'])) die(); // honeypot

    $name = htmlspecialchars($_POST["name"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $contactData = "$name|$mail|$subject|$message|".date("Y-m-d H:i:s").
    "\n";

    if (file_put_contents("messages.txt", $contactData, FILE_APPEND | LOCK_EX) === false) {
      // error handling could go here
    };
  }
?>