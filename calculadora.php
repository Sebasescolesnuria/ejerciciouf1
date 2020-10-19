<?php
declare (strict_types=1);

function performOperation(){
    $opcion = $_GET["opcion"];
    $num = $_GET["num"];
    switch ($opcion){
        case 0:
            factorials($num);
        case 1:
            suma($num);
        case 2:
            primers($num);
    }
}

function factorials (int $num): int{
    $num2 = 1;
    $num3 = 1;
    $num4;
    
    while($num2 <= $num){
        $num4 = $num3;
        $num3 = $num4 * $num2;
        $num2 ++;
    
    }
    return $num3;
}

function suma(int $num): array{
    $resultado = $num1 + $num2;
    return $resultado;
}

function primers(int $num): bool{
    $num2 = 0;
    for ($i = 1; $i < $num; $i ++) {
        if ($num % $i == 0) {
            $num2++;
        }
    }
     
    if ($num2 >= 2) {
        return false;
    } 
    else{
        return true;
    }
}

?>