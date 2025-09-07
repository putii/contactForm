<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST['website'])) die(); // honeypot

    $name = htmlspecialchars($_POST["name"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $contactData = "$name|$mail|$subject|$message|".date("Y-m-d H:i:s").
    "\n";

    if (file_put_contents("messages.txt", $contactData, FILE_APPEND | LOCK_EX) !== false) {
      http_response_code(200);
      echo json_encode(['status' => 'success', 'message' => 'Wiadomość została wysłana pomyślnie']);
    } else {
      http_response_code(500);
      echo json_encode(['status' => 'error', 'message' => 'Błąd serwera, kontakt nieudany.']);
    }
  }
?>