<?php 
    ini_set('display_errors','On');
    require __DIR__.'/src/connect.php';
    require __DIR__.'/src/schema.php';
    $dbname = "usuarios";
    $base = connectSqlite("usuarios");
    schemaGenerator($base);

    if ($_COOKIE["name"]){ //Lee si hay una cookie con el nombre de usuario para redirigirnos directamente a la página de inicio y decirnos cuando fue nuestra última visita.
        echo "Bienvenido de nuevo ".$_COOKIE["name"].", tu última visita a esta página web fue el ".$_COOKIE["tiempovisita"];
        header('Location: src/loginconcookie.php');
    }
    else{ //Con esto directamente nos enviará al formulario para rellenar los datos de inicio de sesión dado que no existe la cookie name
        header('Location: src/pagina.html');
    }
?>