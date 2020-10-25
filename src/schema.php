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
function login(PDO $db, $user, $password,$recordar){ //Creamos la funcion login para comprobar con la sentencia SELECT que los datos introducios en el formulario existen el la base de datos.
    $command5 = "
    SELECT * FROM usuarios WHERE name = '$user' AND password = '$password'";
    try{
        $db -> exec($command5);
        if ($recordar == TRUE){
            header('Location: src/loginconcookie.php');
        }
        else{
            header('Location: src/loginsincookie.php');
        }
    }catch(PDOException $e){
        die($e -> getMessage());
    }
}
    /*Toni no he verificado que los campos del usuario esten en la base de datos dado que la funcion de abajo esta bug, 
    no me entra nunca en el IF ($result > 0) aunque si me conecta con la base de datos. Tambien dado que no me entra en el IF no puedo hacer el HASH de la contraseña dado que no leera el campo.*/
    
    /*$command5 = "
    SELECT * FROM usuarios WHERE name = :name AND password = '$password'";
    try{
        $select = $db->prepare($command5);
        $select->execute(array(':name' => $user));
        $result = $select->fetchColumn();
        if ($result > 0){
            if ($recordar == TRUE){
                setcookie("name",$user);
                setcookie("password",$password); 
                setcookie("tiempovisita",$tiempo); 
                header('Location: src/loginconcookie.php');
            }
            else{
                header('Location: src/loginsincookie.php');
            }
        }
        else{
            echo "Usuario y/o Contraseña incorrectos";
        }
    }catch(PDOException $e){
        die($e -> getMessage());
    }*/
?>