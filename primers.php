<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Primers</title>
</head>
<body>
<form action="primers.php">
  <label>Introduce un número:</label>
  <input type="text" name="num"><br><br>
  <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php
include_once 'calculadora.php';

$num = $_GET['num'];

echo primers($num);

?>