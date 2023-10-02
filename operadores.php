<?php
$valorA = true;
$valorB =true;

$resultado = $valorA and $valorB;
/*
OPERADORES LOGICOS
and
true and true  = true
true && true = true
true && false =false //tiene precendencia el lado izquierdo

or
true or true = true
false  or true = true
false or false = false

xor 
//uno u otro verdadedo igual verdadero
true xor true = true
true xor false = true
false xor false =false

!   negacion
!false =true

OPERADORES MATEMATICOS
potencia
val1 ** val2
base    exponente


estructuras de control 
if - while - do while - for

foreach($arr as $value){
    $value
}
switch($valor){
    case: 1
     //sentencia
     breack;
     default:
     //sentencia
     break:
}

*/ 
var_dump($resultado);

?>