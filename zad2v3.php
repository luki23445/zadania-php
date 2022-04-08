<!doctype html>
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
  <button>Oblicz</button>
</form>

<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if (is_numeric($a) and is_numeric($b) and is_numeric($c) and $a<>0) {
    $delta=$b*$b-4*$a*$c;
    if ($delta>0) {
      $x1=(-$b-sqrt($delta))/(2*$a);
      $x2=(-$b+sqrt($delta))/(2*$a);
      echo "równanie ma dwa pierwiastki rzeczywiste: $x1 oraz $x2";
    } else if ($delta==0) {
      $x1=-$b/(2*$a);
      echo "równanie ma jeden pierwiastek rzeczywisty: $x1";
    } else if ($delta<0) {
      echo "równanie nie ma pierwiastków rzeczywistych";
    }
  } else echo "wprowadzone dane są błędne!";

      
?>	
<body>
</body>
</html>