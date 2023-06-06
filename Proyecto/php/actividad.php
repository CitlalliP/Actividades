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
        for($a=1; $a<=10; $a++){
            echo $a. " ";
        }
        $a=1;
        while($a<=10){
            echo "<br>". $a++."  ";
        }
        do{
            echo $a;
         } while ($a<10);

         echo"<br><br>";
         $instructores= array("Danda","Gabo","Majo","Falcon","Fersa","Balsa","Ara");
         foreach($instructores as $valor){
            echo $valor." ";
         }

         echo"<br><br>";
         if($a<10){
            echo "si";
         } else{
            echo "no";
         }

         echo "<br><br>";
         $b=3;
         switch($b){
            case 2;
            echo"dos";
            break;

            case 3;
            echo"tres";
            break;
         }

         
    ?>
</body>
</html>