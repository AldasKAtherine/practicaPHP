<?php

$palabras = array("sol", "luna", "cielo");
$palabraDesordenadas = array();

for ($i=0; $i < 3; $i++) { 
   $palabraDesordenadas[$i] = str_shuffle($palabras[$i]);
}

echo "
<form>
    <input type='text' name='palabra0'/>
    <input type='text' name='palabra1'/>
    <input type='text' name='palabra2'/>
</form>
";


?>