<?php
declare (strict_types=1);

function performOperation($opcion, $num){
    switch ($opcion){
        case "factorial":
            return factorials($num);
        case "sum":
            return suma($num);
        case "prime":
            return primers($num);
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
    echo factorial($num);
}

function suma(array $num): int{
    $resultado = array_sum($num);
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

echo performOperation("prime",43);

?>