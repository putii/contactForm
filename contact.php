<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kontakt</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <p>Kontakt</p>
    <form id="form" action="javascript:postData()" method="post">
      <label for="name">Imię i nazwisko</label>
      <input id="name" type="text" name="name" placeholder="Imię i nazwisko" required>

      <label for="mail">Adres E-mail</label>
      <input id="mail" type="text" name="mail" placeholder="Adres e-mail do kontaktu" required>
      
      <label for="subject">Temat</label>
      <input id="subject" type="text" name="subject" placeholder="Temat wiadomości" required>
      
      <label id="message" for="name">Wiadomość</label>
      <textarea id="message" name="message" placeholder="Wiadomość" required></textarea>

      <input type="text" id="website" name="website" autocomplete='off'/> <!-- honeypot  -->
      
      <input type="submit">
    </form>
  </body>
</html>