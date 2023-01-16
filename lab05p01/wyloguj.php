<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
    <?php
        session_start();
        session_destroy();
    ?>
    <p>Jesteś niezalogowany</p>
    <a href="index.php">Zaloguj się ponownie</a>
  </body>
</html>