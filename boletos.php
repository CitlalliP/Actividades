<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletos</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/432/432312.png" type="image/png">
</head>
<body  bgcolor="#C1E3B1">
   <h1>Boletos para tu concierto de: </h1>
</body>
</html>
<?php 
     $i=(isset($_POST['valor']) && $_POST["valor"] != "")? $_POST['valor'] : "No indicaste el número de boletos";
     $nombre=(isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : "No indicaste el nombre";
     $apellido=(isset($_POST['apellido']) && $_POST["apellido"] != "")? $_POST['apellido'] : "No indicaste el apellido";
     $artista=(isset($_POST['artista']) && $_POST["artista"] != "")? $_POST['artista'] : "No indicaste el artista";
     $fecha=(isset($_POST['fecha']) && $_POST["fecha"] != "")? $_POST['fecha'] : "No se eligio fecha del concierto";
     $lugar=(isset($_POST['lugar']) && $_POST["lugar"] != "")? $_POST['lugar'] : "No se eligió ningún lugar";
     $zona=(isset($_POST['zona']) && $_POST["zona"] != "")? $_POST['zona'] : "No se eligió ninguna zona";
     $extra1=(isset($_POST['bebida']) && $_POST["bebida"] != "")? $_POST['bebida'] : " ";
     $extra2=(isset($_POST['comida']) && $_POST["comida"] != "")? $_POST['comida'] : " ";
     $extra3=(isset($_POST['estacionamiento']) && $_POST["estacionamiento"] != "")? $_POST['estacionamiento'] : " ";
     $extra4=(isset($_POST['souvenir']) && $_POST["souvenir"] != "")? $_POST['souvenir'] : " ";
    $resta=$i-15;

    if($artista == "Taylor Swift"){
        echo "<h3>".$artista."</h3>
        <center><img src='https://upload.wikimedia.org/wikipedia/commons/b/b5/191125_Taylor_Swift_at_the_2019_American_Music_Awards_%28cropped%29.png' width='100' height='120'></center>";
    };
    if($artista == "Bad Bunny"){
        echo "<h3>".$artista."</h3>
        <center><img src='https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/bad-bunny-1672827485.jpg?resize=640:*' width='100' height='120'></center>";
    };
    if($artista == "Morat"){
        echo "<h3>".$artista."</h3>
        <center><img src='https://lumiere-a.akamaihd.net/v1/images/fl1o8duxeaeak_z_946fb5b8.jpeg?region=285,0,1383,1380' width='100' height='120'></center>";
    };
    if($artista == "Harry Styles"){
        echo "<h3>".$artista."</h3>
        <center><img src='https://image.europafm.com/clipping/cmsimages02/2022/09/12/744EDE75-6626-4CE2-9DE6-EE0E6E2BAA32/harry-styles-premios-tiff-2022_104.jpg?crop=2456,2456,x544,y0&width=1200&height=1200&optimize=low&format=webply*' width='100' height='120'></center>";
    };
    
    
    if ($i <=15){
        for($a=1; $a <$i+1; $a++){
        echo '
            <table align="center" border="2" cellpadding="10" >
            <thead>
                <th colspan="4">Boleto</th></tr>
            </thead>
            <tbody>
            <tr>
                <td width="180" height="100">Nombre: '.$nombre.'</td>
                <td>Apellido: '.$apellido.'</td>
                <td> Artista: '.$artista.'</td>
            </tr>
            <tr>
                <td width="180" height="100">Fecha del concierto: '.$fecha.'</td>
                <td>Lugar del concierto: '.$lugar.'</td>
                <td>Zona: '.$zona.'</td>
            </tr>
            <tr>
                <td colspan="3">Extras: '.$extra1.' '.$extra2.' '.$extra3.' '.$extra4.'</td>
            </tr>
            <br><br><br>
            </tbody>
        ';
       
        }
     } else{
        echo " <br> No puedes comprar más de 15 boletos. Se imprimieron 15 y restan ". $resta;
        for($a=0; $a <15; $a++){
            echo '
                
                <table align="center" border="2" cellpadding="10" >
                <thead>
                    <th colspan="3">Boleto</th></tr>
                </thead>
                <tbody>
                <tr>
                    <td width="180" height="100">Nombre: '.$nombre.'</td>
                    <td>Apellido: '.$apellido.'</td>
                    <td> Artista: '.$artista.'</td>
                </tr>
                <tr>
                    <td width="180" height="100">Fecha del concierto: '.$fecha.'</td>
                    <td>Lugar del concierto: '.$lugar.'</td>
                    <td>Zona: '.$zona.'</td>
                </tr>
                <tr>
                    <td colspan="3">Extras: '.$extra1.' '.$extra2.' '.$extra3.' '.$extra4.'</td>
                </tr>
                <br><br><br>
                </tbody>
    
    
            ';
            }
     };
     if ($i ==0){
        echo "Error, debes de comprar por lo menos un boleto";
     }

    ?>