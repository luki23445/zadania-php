<!doctype html>zadanie 2
<html>
<head>
<meta charset="utf-8">
<title>Dokument bez tytułu</title>
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
}
if($a > $b)
echo "$a jest jest większe od $b";
elseif ($b > $a)
echo "$b jest jest większe od $a";

      
?>	
<body>
</body>
</html>
