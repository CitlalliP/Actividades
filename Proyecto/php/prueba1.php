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
            $nombre = "Gabriel"; //variable string
            $edad =16; //varibale int
            $estatura = 1.75; //variable double
            $saludo = "Hola bienvenidos a mi pagina"; 

            echo $saludo;
            echo $nombre;
            echo "<table border='2'>
            <thead>
                <tr>
                    <th>Hola $nombre</th>
                 </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Buen día</td>
                    <td> Estatura $estatura </td>
                    <td> Edad $edad </td>
                </tr>
                
            </tbody>
            </table>";

            echo "<br>La edad es:";
            echo $edad;
            echo "<br>La estatura es:";
            echo $estatura;        
        ?>
    
        
    </body>
</html>