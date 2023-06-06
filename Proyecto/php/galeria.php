<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GalerÃ­a de imagenes</title>
    <link rel="icon" href="https://kinsta.com/es/wp-content/uploads/sites/8/2018/07/plugins-galeria-fotos-wordpress.jpg" type="image/jpg">
</head>
<body>
    <form action="galeria.php" method="post" enctype="multipart/form-data" target="_self" >
        <fieldset style="width: 400px;" >
            <legend>Sube tu imagen</legend>
            <label for="nom">Nombre:</label><br>
            <input type="text" id="nom" name="nombre" required/><br><br>
          
            <label for="arch">Imagen:</label><br>
            <input type="file" id="arch" accept="image/*" name="arch"/><br><br>
           
            <button type="reset">Restablecer</button>
            <button type="submit">Enviar</button>
        </fieldset>
    </form>
    <?php
    $nombre = (isset ($_POST["nombre"]) && $_POST["nombre"]!="")? $_POST["nombre"]: false;
    if (isset($_FILES["arch"])){
        $arch = $_FILES["arch"];
        $name = $arch["arch"];
        $ruta_temporal = $arch["tmp_name"];
        $ext = pathinfo ($nme, PATHINFO_EXTENSION);
        if (file_exists ("./img")){
            mkdir("./img");
        }
        $ruta_final = "./img/$nombre.$ext";
        rename($ruta_temporal,$ruta_final); 
    } 
    //Despliegue de imagenes
    $dir = opendir("./img");
    $hay_archivo = true;
    $archivos = [];
    while ($hay_archivo){
        $archivo = readdir ($dir);
        if ($archivo){
            array_push ($archivos, $archivo);
        }else{
            $hay_archivos = false;
        }
    }
    echo '
        <table> 
            <thead>
            <tr>
                <th>Nombre</th>
                </tr>
            </thead>
            <tbody>';
            foreach ($archivos as $archivo){

                if($archivo != '.' && $archivo != '..'){

                $nombrearch =pathinfo($archivo, PATHINFO_BASENAME);
                echo"<tr>
                <td>
                    '.$nombrearch.'
                </td>
                <td>
                    <img src='./img/'.$archivo.'' height = '200px'>
                </td>

                </tr>";
                }
            }
            echo '
            </tbody>
        </table>';
    ?>
</body>
</html>