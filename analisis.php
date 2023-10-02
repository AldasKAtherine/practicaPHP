<?php

print_r($_REQUEST);

$palabras = array("sol", "luna", "cielo","luz","estrellas","lluvia");

for ($i=0; $i < count($palabras); $i++) { 
    if($_REQUEST["palabra".$i]== $palabras[$i]){
        echo "la palabra ingresada es correcta <br>";
    }else{
        echo "La palabra es incorrecta, Respuesta: ".$palabras[$i]."<br>";
    }
}

// if($_REQUEST['palabra0']== $palabras[0]){
//     echo "<p>La palabra es correcta</p>";
// }else{
//     echo "<p>la palabra es incorrecta. Respuesta ".$palabras[0]."</p>";
// }

// if($_REQUEST['palabra1']== $palabras[1]){
//     echo "<p>La palabra es correcta";
// }else{
//     echo "<p>la palabra es incorrecta. Respuesta ".$palabras[1]."</p>";
// }

// if($_REQUEST['palabra2']== $palabras[2]){
//     echo "<p>La palabra es correcta";
// }else{
//     echo "<p>la palabra es incorrecta. Respuesta ".$palabras[2]."</p>";
// }
?>