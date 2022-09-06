<?php

$arreglo = array();

function calleable_function_void($function, $arg = array()){
    if(is_callable($function)){
        call_user_func($function, $arg);
    }else{
        echo "La funcion no es calleable";
    }
}

function calleable_function_return($function, $arg = array()){
    $result = NULL;
    if(is_callable($function)){
        $result = call_user_func_array($function, $arg);
    }else{
        echo "La funcion no es calleable";
    }
    return $result;
}

function calcular($string){    
    if(strpos($string, '+')){
        $GLOBALS["arreglo"] = explode('+', $string);
        sumar($GLOBALS["arreglo"][0], $GLOBALS["arreglo"][1]);
    }

    if(strpos($string, '-')){
        $GLOBALS["arreglo"] = explode('-', $string);
        restar($GLOBALS["arreglo"][0], $GLOBALS["arreglo"][1]);
    }

    if(strpos($string, 'x')){
        $GLOBALS["arreglo"] = explode('x', $string);
        multiplicar($GLOBALS["arreglo"][0], $GLOBALS["arreglo"][1]);
    }

    if(strpos($string, '/')){
        $GLOBALS["arreglo"] = explode('/', $string);
        dividir($GLOBALS["arreglo"][0], $GLOBALS["arreglo"][1]);
    }
}

function sumar($var1, $var2){
    $var1= round(floatval($var1), 2);
    $var2= round(floatval($var2), 2);
    echo round($var1+$var2, 2);
}

function restar($var1, $var2){
    $var1= round(floatval($var1), 2);
    $var2= round(floatval($var2), 2);
    echo round($var1-$var2, 2);
}

function multiplicar($var1, $var2){
    $var1= round(floatval($var1), 2);
    $var2= round(floatval($var2), 2);
    echo round($var1*$var2, 2);
}

function dividir($var1, $var2){
    $var1= round(floatval($var1), 2);
    $var2= round(floatval($var2), 2);
    echo round($var1/$var2, 2);
}

?>