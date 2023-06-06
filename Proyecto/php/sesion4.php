<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //comentario de una sola linea
        /* Comentario
        de 
        bloque*/
        const CONSTANTE = "Hola soy una CONSTANTE";
        define("HOLA", 'Adios');
        define("NUMERO", 56);
        //Tipo de datos

        //Entero
        $var1 =1; //asignación
        $var2 =50;

        //Flotantes o con número decimal
        $flotante = 5.5;
        $PI = 3.14159;

        //Nulos
        $sereunNulo = null;


        echo CONSTANTE;
        echo "<br>";
        echo HOLA;
        echo "<br>";
        echo NUMERO;
        echo "<br>";
        echo $var2;
        echo"<br>";
        echo $PI;
        echo"<br>";
        echo $sereunNulo;
        echo "<br>";

        //Cadenas
        $cadenitas = 'chambear';

        echo $cadenitas;

        //Bool
        $soy_Bool = false;

        echo $soy_Bool;

        echo "<br>", $cadenitas, "<br>", $flotante;
        echo "<br>". $cadenitas. "<br>". $flotante; //concatenación
        echo"<br>";
        print "Soy un print";

        printf("<br> A mi no me gusta %s <br>", $cadenitas);
        "50" === 50;
        var_dump($var1);
        echo"<br>";
        var_dump($cadenitas);
        echo"<br>";
        $cadenota = "MI PRIMERA PÁGINA WEB";
        echo $cadenota;
        echo"<br>";
        echo "<h1>".$cadenota."</h1>"; //Concatenada

        //Operadores aritmeticos

        $entero1=190;
        $entero2=5;
        $entero3=14;

        $entero1=-$entero3; //identidad (signo)
        /*
        $entero1=$entero2+$entero3;
        $entero1=$entero2-$entero3;
        $entero1=$entero2*$entero3;
        $entero1=$entero2/$entero3;
        $entero1=$entero2**$entero3; potencia
        $entero1=$entero2%$entero3; modulo (residuo de la división)
        */
        echo $entero1;
        //  Asignación
        $a=12;
        $b=4;

        $a+=$b;
        /*
        $a-=$b;
        $a*=$b;
        $a**=$b;
        $a%=$b;
        $a/=$b;
        */

        echo "<br>Asignación <br>",$a;
        //Incremento
        $b++; //$b--
        echo "<br>Incremento <br>",$b;

        //Estructuras de control 
       //Iterativas (for, while, do-while) Control (if)

       $arreglo[0] ="Carmen";
       $arreglo[1] ="se";
       $arreglo[2] ="me";
       $arreglo[3] ="perdio";
       $arreglo[4] ="la";
       $arreglo[5] ="cadenita";

       echo $arreglo[3];
       echo"<br>";

       for ($contador=0; $contador<=10; $contador++){
        echo $contador."<br>";
       }
       for ($i=0; $i<6; $i++){
        echo $arreglo[$i];
       }

       //Función array
       $aguas=array ("jamaica", "melon", "limon", "horchata");
       echo "<br>";
       echo $aguas[1];
       echo "<br>";
       for ($j=0; $j<4; $j++){
        echo "<br>". $aguas[$j] ;
       }
       //función asociativa
       $array = array(
        1 =>"Que",
        2 =>"onda",
        3 =>"chicos",
       );
       echo"<br>";
       echo $array[1];
       echo"<br>";
       //Funcion array asosiativa mixta
       $arraymixto = array(
       "x"=> "Estoy en x",
       4=> "soy 4",
       3.1416=>"Soy Pi redondeaod",
       3.1415=>"soy Pi",
       "2"=> "Me llamo 2",
       true =>"soy verdadero",
       );

       echo $arraymixto[3.1415];


       








    ?>
</body>
</html>