<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <title></title>
</head>

<body>
  <h1>Równanie kwadratowe</h1>
  <form method="get">
    <label for="n">Ilość liczb</label>
    <input name="n" type="number" /><br>
    <label for="minimum">Minimum</label>
    <input name="minimum" type="number" /><br>
    <label for="maksimum">Maksimum</label>
    <input name="maksimum" type="number" /><br>
    <input type="submit" value="Wygeneruj" />
  </form>
  <br>
  <?php
  if (
    isset($_GET['n']) && is_numeric($_GET['n']) &&
    isset($_GET['minimum']) && is_numeric($_GET['minimum']) &&
    isset($_GET['maksimum']) && is_numeric($_GET['maksimum'])
  ) {

    $n = $_GET['n'];
    $minimum = $_GET['minimum'];
    $maksimum = $_GET['maksimum'];

    for ($i=0; $i<$n; $i++)
    {
      $tab[]= rand($minimum, $maksimum);
    }
    sort($tab);
    foreach($tab as $x)
    {
      echo $x.";";
    }

  } else {
    echo "----------";
  }
  ?>
</body>

</html>