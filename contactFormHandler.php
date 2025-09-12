<?php
  require_once "db_pdo.php";

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

    // saving to db on top of saving to file

    try {
      $stmt = $pdo->prepare(
        "INSERT INTO messages (name, mail, subject, message, sent_at) VALUES (?, ?, ?, ?, NOW())"
      );
      $stmt->execute([$name, $mail, $subject, $message]);
    } catch (PDOException $e) {
        echo "Exception thrown: $e";
    }
  } 
?>