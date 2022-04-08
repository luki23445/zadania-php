<!doctype html>zadanie 2
<html>
<head>
<meta charset="utf-8">
<title>2v1</title>
</head>
<form method="GET">
  <input type="number" name="a">
  <input type="number" name="b">
  <button>Oblicz</button>
</form>

<?php
if(isset($_GET['a'])&&(isset($_GET['b'])))
{
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = pow($a, $b);
}
echo $c

      
?>	
<body>
</body>
</html>