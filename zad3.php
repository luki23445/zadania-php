<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dokument bez tytułu</title>
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

  if($x > 99)
      echo "$x jest trzy cyfrowe";
   elseif (99 >= $x)
      echo "$x nie jest trzy cyfrowe";
      
?>	
<body>
</body>
</html>