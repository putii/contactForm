<?php
  $serveraddress = "db";
  $dbname = getenv("MYSQL_DATABASE");
  $username = "root";
  $password = getenv("MYSQL_ROOT_PASSWORD");
  
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