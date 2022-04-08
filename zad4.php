<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>4</title>
</head>
<form method="GET">
  <input type="number" name="x">
  <button>Oblicz</button>
</form>

<?php
if(isset($_GET['x']))
{
    $x = $_GET['x'];
}
if ($x%2==0) 
  echo "liczba jest parzysta";
  else 
  echo "liczba jest nieparzysta";
      
?>	
<body>
</body>
</html>