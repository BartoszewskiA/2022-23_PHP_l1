<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <title></title>
</head>

<body>
  <h1>Równanie kwadratowe</h1>
  <form method="get">
    <label for="a">a=</label>
    <input name="a" type="number" /><br>
    <label for="b">b=</label>
    <input name="b" type="number" /><br>
    <label for="c">c=</label>
    <input name="c" type="number" /><br>
    <input type="submit" value="Wylicz" />
  </form>
  <br>
  <?php
  if (
    isset($_GET['a']) && is_numeric($_GET['a']) &&
    isset($_GET['b']) && is_numeric($_GET['b']) &&
    isset($_GET['c']) && is_numeric($_GET['c'])
  ) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    foreach ($_GET as $klucz => $wartosc) {
      echo "$klucz -> $wartosc <br>";
    }
  } else {
    echo "----------";
  }
  ?>
</body>

</html>