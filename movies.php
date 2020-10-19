<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$titulo = $_GET["titulo"];
$pelis = 
[["Titulo" => "Toy Story 2","Año" => "2000","Director" => "Walt Disney"],
["Titulo" => "Fast and Furious","Año" => "2001","Director" => "Rob Cohen"],
["Titulo" => "Mulan","Año" => "1998","Director" => "Pixar"]];
$foundtitle = false;

if(is_array($pelis)){
    foreach($pelis as $row){
        foreach($row as $key => $value){ 
            if ($key == 'Titulo' && $foundtitle == false){
                if($titulo == $value){
                    $foundtitle = true;
                    $foundaño = false;
                    $founddirector = false; 
                }
            }
            if ($key == 'Año' && $foundaño == false){
                $foundaño = true;
                $año = $value;
            }
            if ($key == 'Director' && $founddirector == false){
                $founddirector = true;
                $director = $value;
            }
        }
    }
}

if ($foundtitle == true && $foundaño && true && founddirector == true){
    echo "<h1>Información sobre la película $titulo <br><h4>Basada en su entrada, la información es la siguiente:<br>
    La película $titulo del año $año fue creada por el director $director";
}
else{
    echo "No se ha encontrado la película .$titulo";
}
?>
</body>
</html>
