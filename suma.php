<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>
<form action="factorial.php">
  <label>Introduce un número:</label>
  <input type="text" name="num1"><br><br>
  <label>Introduce otro número:</label>
  <input type="text" name="num2"><br><br>
  <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php
include_once 'calculadora.php';

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

suma($num1,$num2,$resultado);
echo "<br>El resultado de la suma de ".$num1." y de ".$num2." es ".$resultado;
?>