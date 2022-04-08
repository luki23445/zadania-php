<!doctype html>zadanie 2
<html>
<head>
<meta charset="utf-8">
<title>2</title>
</head>
<form method="GET">
    A:
  <input type="number" name="a">
  B:
  <input type="number" name="b">
  C:
  <input type="number" name="c">
  X:
  <input type="number" name="x">
  <button>Oblicz</button>
</form>

<?php
if(isset($_GET['a'])&&(isset($_GET['b']))&&(isset($_GET['c'])))
{
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $x = $_GET['x'];
    $d = pow($a + $x, 2);
    $e = ($d + ($b + $x) + $c);
}
echo $e

      
?>	
<body>
</body>
</html>