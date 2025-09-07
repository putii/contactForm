<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kontakt</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <p>Kontakt</p>
    <form action="contactFormHandler.php" method="post">
      <label for="name">Imię i nazwisko</label>
      <input id="name" type="text" name="name" placeholder="Podaj swoje imię i nazwisko tutaj">

      <label for="mail">Adress E-mail</label>
      <input id="mail" type="text" name="mail" placeholder="Podaj swój e-mail zwrotny">
      
      <label for="subject">Temat</label>
      <input id="subject" type="text" name="subject" placeholder="Temat wiadomości">
      
      <label id="message" for="name">Wiadomość</label>
      <textarea id="message" name="message" placeholder="Wiadomość"></textarea>
      
      <input type="submit">
    </form>
  </body>
</html>