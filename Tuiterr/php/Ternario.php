<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./Ternario.php" method="post">
        <label for="valor">Elige un valor entre 1 y 3:</label>
        <input type="text" id="valor" name="valor">
        <br><br>
        <label for="palabras">Elige una palabra:</label>
        <select name="palabras">
            <option value="sus">sus</option>
            <option value="papu">papu</option>
            <option value="krunker">krunker</option>
        </select>
        <button type="submit">Enviar</button>
        <br><br>
    </form>
    <?php

        $i=(isset($_POST['valor']) && $_POST["valor"] != "")? $_POST['valor'] : "Falta Valor";
        $palabra=(isset($_POST['palabras']) && $_POST["palabras"] != "")? $_POST['palabras'] : "Falta Valor";


        if($i >= 1 && $i <= 3){
            echo "El valor que se eligió está dentro de los parámetros";
        }else{
            echo "El valor que se eligió NO está dentro de los parámetros :(";
        };
        echo "<br><br>";
        switch ($palabra) {
            case 'sus':
                echo "SUS??<br><br>";
                break;
            case 'papu':
                echo "Hola Papu<br><br>";
                break;
            case 'krunker':
                echo "Vamos a Krunkear :D<br><br>";
                break;
        }
        // for($a=1; $a < 10; $a++){
        //     echo $a." ";
        // }

        // echo "<br><br>";
        // $a=1;
        // while($a <= 10){
        //     echo $a++." ";
        // }

        // echo "<br><br>";
        // do{
        //     echo $a;
        // }while($a < 10);
// echo "<br><br>";
        // $instructores= array("Servín", "Danda", "Gabo", "Majo", "Falcon", "Fersa", "Balsa", "Ara", "Mia");
        // foreach($instructores as $valor){
        //     echo $valor." ";
        // };

        // echo "<br><br>";
        // if($a < 10){
        //     echo "si";
        // }else if($a > 15){
        //     echo "no";
        // };

        // $b=2;

        // switch($b){
        //     case 2:
        //         echo "dos";
        //         break;
        //     case 3:
        //         echo "tres";
        //         break;
        // }

    ?>
</body>
</html>
