<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_GET["tab"]) && is_array($_GET["tab"]))
    {
        $tab = $_GET["tab"];
        foreach($tab as $klucz => $wartosc)
        {
            if (!empty($wartosc))
                echo "<p>$klucz - $wartosc</p>";
        }
    }
    else
    {
        echo "Błąd danych";
    }
    
    ?>
  </body>
</html>