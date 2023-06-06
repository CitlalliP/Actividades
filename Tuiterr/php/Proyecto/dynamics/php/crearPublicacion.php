<?php
    $include = include("./config.php");
    $con= connect();

    if ($include && $con){

        // $ID_USUARIO =1;
        // $descripcion="Descripcion nueva";
        // $fecha="01-06-2023";
        // $hora="10:28";
        // $corazon=1;
        // $n_comentarios=3;
        // $n_retuits=5;

        // $ID_USUARIO =1;
        // $descripcion="Ejemplo";
        // $fecha="06-06-2023";
        // $hora="19:13";
        // $corazon=5;
        // $n_comentarios=10;
        // $n_retuits=7;

        // $ID_USUARIO =1;
        // $descripcion="Mi ultima publicacion";
        // $fecha="05-06-2023";
        // $hora="11:06";
        // $corazon=11;
        // $n_comentarios=4;
        // $n_retuits=20;

         $ID_USUARIO =1;
        $descripcion="Foto";
        $fecha="04-06-2023";
        $hora="17:36";
        $corazon=1;
        $n_comentarios=4;
        $n_retuits=2;

        $peticion="INSERT INTO publicacion VALUES (0, 1, '$descripcion', '$fecha', '$hora', $corazon, $n_comentarios, $n_retuits )";
        $query =mysqli_query ($con,$peticion);
        var_dump($query);

        // //$sql ="SELECT * FROM usuarios";
        // //$sql ="SELECT * FROM publicacion";
        // $sql ="SELECT * FROM publicacion WHERE ID_PUB >0 && ID_PUB <3";
        // $query = mysqli_query ($con, $sql);
        // //var_dump(query);
        // //$datos= mysqli_fetch_array($query);
        // // $datos= mysqli_fetch_assoc($query);
        
        // // var_dump($datos);
        // // echo "<br><br><br>";

        // // $datos= mysqli_fetch_assoc($query);
        // // var_dump($datos);
        // // echo "<br><br><br>";

        // // $datos= mysqli_fetch_assoc($query);
        // // var_dump($datos);
        // // echo "<br><br><br>";


        // while ($row = mysqli_fetch_assoc($query))
        // {
        //     echo"<br><br><br><br><br>";
        //     //var_dump($row);
        //     var_dump($row ["descripcion"]);
        // }

        
    }
?>