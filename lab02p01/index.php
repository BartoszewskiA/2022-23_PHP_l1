<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css"
          href="styl.css">
    <title></title>
</head>

    <body>
        <?php
        $wiersze = 4;
        $kolumny = 3;
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        for ($i = 0; $i < $kolumny; $i++) {
            echo "<td>";
            echo "Wiersz " . ($i + 1);
            echo "</td>";
        }
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        for ($i = 0; $i < $wiersze; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $kolumny; $j++) {
                echo "<td>";
                echo ($i * $kolumny) + $j + 1;
                echo "</td>";
            }
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        ?>


    </body>

</html>