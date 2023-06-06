<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
</head>
<body>
    <h1>Inicio de sesión</h1>
    <div>
        <h2>Bienvenidx</h2>
        <form action="acciones.php" method="POST">
            <label>Nombre(s):
                <br>
                <input type="text" name="nombre" required autocomplete="on"> 
            </label>
            <br><br><br>
            <label for="Casa">Casa:</label>
            <br>
            <select id="casa" name="casa">
                <option value=""></option>
                <option value="Ajolote">Ajolotes</option>
                <option value="Halcon">Halcones</option>
                <option value="Teporingo">Teporingos</option>
            </select>
            <br><br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>