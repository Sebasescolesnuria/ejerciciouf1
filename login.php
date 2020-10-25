<?php
require __DIR__.'/src/schema.php';
require __DIR__.'/src/connect.php';

$user = filter_input(INPUT_POST,"name");
$password = filter_input(INPUT_POST,"password"); //Hay que convertir la contraseña en hush
$recordar = filter_input(INPUT_POST,"recordar");
$register = filter_input(INPUT_POST,"register");
$tiempo = date("d-M-Y H:i:s");
$dbname = "usuarios";
$base = connectSqlite($dbname);

if ($register == TRUE){ //Comprueba si el checkbox esta seleccionado para registrar el usuario en la db
    insertItems($base,$user,$password); //Guardamos y enviamos los valores a InsertSchema para que haga la funcion SQL de insertar nuevos valores en la BD
    if ($recordar == TRUE){ //Comprueba si el checkbox esta seleccionado para poder crear las cookies
        setcookie("name",$user); //Creamos cookies para guardar el nombre
        setcookie("password",$password); //Creamos cookies para guardar la contraseña
        setcookie("tiempovisita",$tiempo); //Creamos cookies para guardar la hora de la visita al sitio web
        header('Location: src/loginconcookie.php'); //Redirige a la página principal
    }
    else{
        header('Location: src/loginsincookie.php'); //Redirige a la página principal
    }
}
else{
    if ($recordar == TRUE){
        setcookie("name",$user);
        setcookie("password",$password); 
        setcookie("tiempovisita",$tiempo); 
    }
    login($base,$user,$password,$recordar);//Envia los datos a la sentencia SQL login para poder ver si el usuario insertado existe en la base de datos.
}
?>