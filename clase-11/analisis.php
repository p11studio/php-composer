<?php
print_r($_REQUEST);

$palabras = array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");

for ($i=0; $i < count($palabras); $i++) { 
    if($_REQUEST["palabra".$i] == $palabras[$i]) {
        echo "La palabra ingresada es correcta"."<br>";
    } else {
        echo "La palabra es incorrecta, la palabra correcta es: ".$palabras[$i]."<br>";
    }
}

/* if($_REQUEST["palabra0"] == $palabras[0]) {
    echo "La palabra ingresada es correcta";
} else {
    echo "La palabra es incorrecta, la palabra correcta es: ".$palabras[0];
    echo "\n";
}
if($_REQUEST["palabra1"] == $palabras[1]) {
    echo "La palabra ingresada es correcta";
} else {
    echo "La palabra es incorrecta, la palabra correcta es: ".$palabras[1];
    echo "\n";
    
}
if($_REQUEST["palabra2"] == $palabras[2]) {
    echo "La palabra ingresada es correcta";
} else {
    echo "La palabra es incorrecta, la palabra correcta es: ".$palabras[2];
    echo "\n";
} */
/* if($_REQUEST["palabra2"] == $palabras[2]) {
    echo "La palabra ingresada es correcta";
} else {
    echo "La palabra es incorrecta, la palabra correcta es: ".$palabras[2];
} */


?>