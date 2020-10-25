<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <form action="logout.php" method="POST">
        <p>Borrar datos:<br><input type="submit" name="logout" value="Borrar"></p>
    </form>
</body>
</html>

<?php
    $logout = filter_input(INPUT_POST,"logout");
    if ($logout == TRUE){
        setcookie("name","");
        setcookie("password","");
        setcookie("tiempovisita","");
        echo "Se han borrado sus datos correctamente <br>";
        echo "<a href='pagina.html'>Volver a la página de inicio.</a>";  
    }
?>