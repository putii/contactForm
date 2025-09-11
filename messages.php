<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Wiadomości</title>
  </head>
  <body>
    <head></head>
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
    <div class="container messages">
      <table>
        <tr>
          <th>Imię</th>
          <th>Mail</th>
          <th>Temat</th>
          <th>Wiadomość</th>
          <th>Data</th>
        </tr>
        <?php
          try {
            foreach($pdo->query('SELECT * FROM messages') as $row) {
              echo "<tr>\n";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>".$row['subject']."</td>";
              echo "<td>".$row['message']."</td>";
              echo "<td>".$row['send_at']."</td>";
              echo "</tr>\n";
            }
          } catch (PDOException $e) {
            echo "Exception thrown: $e";
          }
        ?>
      </table>
    </div>
    
    <footer></footer>
  </body>
</html>