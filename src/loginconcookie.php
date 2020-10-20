<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
</head>
<body>
    <p>Bienvenido <?php echo $_COOKIE["name"];?>.</p>
    <p><br>Te has logeado correctamente.</p>
    <br><iframe src="https://www.google.es/maps/@41.2936894,1.9979421,15z"></iframe>
    <br><a href="logout.php">¿Desea borrar sus datos almacenados en cookies?</a>
</body>
</html>