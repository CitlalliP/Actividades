<?php
$duracion = time()+60*10;
    setcookie("primercookie", "valor", $duracion);
    setcookie("cookie2", "Hola soy una cookie", $duracion);
    //var_dump($_COOKIE);
    echo "<br>";
    $valor = $_COOKIE ["primercookie"];
    $cadena = $_COOKIE ["cookie2"];
    echo $valor;
    echo "<br>";
    echo $cadena;
    setcookie("primercookie","", time()-1);
?>