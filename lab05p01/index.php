<?php
    session_start();
?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>


     <?php
        if(isset($_SESSION['user']))
        {
           $ile_minut = round((time()- $_SESSION['time'])/60);
            echo "<p>".$_SESSION['user']."<br> zalogowany od ".$ile_minut;
            echo '<form action="wyloguj.php">';
            echo '<input type="submit" value="Wyloguj"/>';
            echo '</form>';
        }
        else
        {
            echo '<form>';
            echo '<input name="user" type="text"/>';
            echo '<input type="submit" value="Zaloguj"/>';
            echo '</form>';
        }
     ?>

    <?php
        if(isset($_GET['user']))
        {
            $_SESSION['user'] = $_GET['user'];
            $_SESSION['time'] = time();
        }
     ?>
  </body>
</html>