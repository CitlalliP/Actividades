<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Taller de Monos Escritores</title>
  <link rel="icon" href="../Statics/Favicoin.ico.jpg" type="image/x-icon">

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffe4c4;
      text-align: center;
    }

    h1 {
      color: #000;
    }

    table {
      margin: 20px auto;
      border-collapse: collapse;
    }

    table th, table td {
      padding: 10px;
      border: 1px solid #ccc;
    }

    table th {
      background-color: #f2f2f2;
    }

    p {
      margin-bottom: 10px;
    }
  </style>
  
</head>
<body bgcolor="#ffe4c4">
  <h1>Taller de Monos Escritores</h1>
  <?php
  function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_=+[{]}\|;:,<.>/?';
    $randomString = ' ';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palabras = $_POST["palabras"];
    $modo = $_POST["modo"];

    $numero = rand(1,9999999999);
    $randomString = generateRandomString(500);
    $randomString2 = generateRandomString(500);

    if ($modo == "normal") {
      $frase = $randomString.$palabras.$randomString2;
    } elseif ($modo == "palabras") {
      $frase= $palabras . $randomString;
    } elseif ($modo == "desorden") {
      $words = explode(" ", $palabras);
      shuffle($words);
      $frase = $randomString.implode(" ", $words).$randomString2;
    }

    echo "<table align='center' border='2' cellpadding='10'>
          <thead>
            <tr>
              <th>Libro número: ".$numero."</th>
          </thead>
          <tbody>
          <tr>
              <td width='200'>".$frase."</td>
            </tr>
          </tbody>
    </table>";

    // Obtener la fecha y zona horaria
    date_default_timezone_set('America/New_York');
    $date = date('Y-m-d H:i:s T');

    echo "<p>Fecha de consulta: $date</p>";

    // Obtener el día de creación
    $creationDate = date('Y-m-d', strtotime($randomString));

    echo "<p>Día de creación de los caracteres: $creationDate</p>";
  }
  ?>
</body>
</html>