<?php
  $serveraddress = "db";
  $dbname = "contactdb";
  $username = "root";
  $password = "pass123";
  
  try {
    $pdo = new PDO(
      "mysql:host=$serveraddress;dbname=$dbname",
      $username,
      $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  } catch (PDOException $e) {
    echo "Exception thrown: $e";
  }
?>