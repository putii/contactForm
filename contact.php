<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kontakt</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include "header.php" ?>

    <div class="container">
      <h1>Kontakt</h1>
      <form id="form" action="javascript:postData()" method="post">
        <div class=form-input>
          <label for="name">Imię i nazwisko</label>
          <input id="name" type="text" name="name" placeholder="Imię i nazwisko" required>
        </div>
        
        <div class=form-input>
          <label for="mail">Adres E-mail</label>
          <input id="mail" type="text" name="mail" placeholder="Adres e-mail do kontaktu" required>
        </div>
        
        <div class=form-input>
          <label for="subject">Temat</label>
          <input id="subject" type="text" name="subject" placeholder="Temat wiadomości" required>
        </div>

        <div class=form-input>
          <label id="message" for="name">Wiadomość</label>
          <textarea id="message" name="message" placeholder="Wiadomość" required></textarea>
          <input type="text" id="website" name="website" autocomplete='off'/> <!-- honeypot  -->
        </div>
        <button>Wyślij</button>
      </form>
    </div>

    <?php include "footer.php" ?>
  </body>
</html>