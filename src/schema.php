<?php

function schemaGenerator(PDO $db){ 
    $command = "
    CREATE TABLE IF NOT EXISTS usuarios(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name VARCHAR(100) NOT NULL,
        password VARCHAR(30) NOT NULL
    )";
    try{
        $db -> exec($command);
    }catch(PDOException $e){
        die($e -> getMessage());
    }
}

function insertItems(PDO $db, string $user, string $password){
    $command2 = "
    INSERT INTO usuarios (name,password) VALUES ('.$user.','.$password.')";
    try{
        $db -> exec($command2);
    }catch(PDOException $e){
        die($e -> getMessage());
    }
}

function deleteItems(PDO $db, string $user){
    $command3 = "
    DELETE FROM usuarios WHERE name = '$user'";
    try{
        $db -> exec($command3);
    }catch(PDOException $e){
        die($e -> getMessage());
    }
}
function insertSchema(PDO $db,$datos){
    if(is_array($datos)){
        foreach($datos as $row){
            foreach($row as $key => $value){
                if($key == 'name'){
                    $user = $value;
                    echo $key.' '.$value.'<br>';
                }
                else{
                    $password = $value;
                    echo $key.' '.$value.'<br>';
                }
                $command4 = "
                INSERT INTO usuarios (name,password) VALUES ('$user','$password')";
            }
            try{
                $db -> exec($command4);
            }catch(PDOException $e){
                die ($e -> getMessage());
                }
            }
        }
    }
function login(PDO $db, $user, $password){ //Creamos la funcion login para comprobar con la sentencia SELECT que los datos introducios en el formulario existen el la base de datos.
    $command5 = "
    SELECT * FROM usuarios WHERE name='$user' AND password='$password'";
    try{
        $db -> exec($command5);
    }catch(PDOException $e){
        die($e -> getMessage());
    }
}
?>