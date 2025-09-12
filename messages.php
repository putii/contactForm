<!DOCTYPE html>
<?php
  require_once "db_pdo.php";
?>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Wiadomości</title>
  </head>
  <body>
    <?php include "header.php" ?>
    <div class="container messages">
      <h1>Wiadomości</h1>
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
              echo "<td>".$row['mail']."</td>";
              echo "<td>".$row['subject']."</td>";
              echo "<td>".$row['message']."</td>";
              echo "<td>".$row['sent_at']."</td>";
              echo "</tr>\n";
            }
          } catch (PDOException $e) {
            echo "Exception thrown: $e";
          }
        ?>
      </table>
    </div>
    
    <?php include "footer.php" ?>
  </body>
</html>