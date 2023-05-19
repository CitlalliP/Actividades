<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketero</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/432/432312.png" type="image/png">
</head>
<body  bgcolor="#C1E3B1">
    <center><h1>Ticketero</h1></center>
    <p>Bienvenidx a la página en donde encontraras todos los conciertos de tus artistas 
       <br>favoritos, y ahora hay más probabilidad de que obtengas tus boletos y se evite la reventa. 
       <br> ¡Adquiere ahora tus boletos!</p>
    <center><img src="https://www.bbva.com/wp-content/uploads/2020/05/festival2.jpg" alt="P6" width="420" height="350"></center>
    <hr>
    <br><br>
    <form action="./boletos.php" method="post"> 
        <fieldset>
            <legend>Compra de boletos</legend>
            <label>Nombre(s):
                <input type="text" name="nombre" required autocomplete="on"> 
            </label>
            <br><br>
            <label>Apellido:
                <input type="text" name="apellido" required autocomplete="on"> 
            </label>
            <br><br>
            <label for="artista">Artista:</label>
            <select id="artista" name="artista">
                <option value=""></option>
                <option value="Taylor Swift">Taylor Swift</option>
                <option value="Bad Bunny">Bad Bunny</option>
                <option value="Morat">Morat</option>
                <option value="Harry Styles">Harry Styles</option>
            </select>
            <br><br>
            <label>Fecha del concierto:
                <input type="date" name="fecha" required>
            </label>
            <br><br>
            <label for="lugar">Auditorio o sala de concierto:</label>
            <select id="lugar" name="lugar">
                <option value=""></option>
                <option value="Foro Sol">Foro Sol</option>
                <option value="Palacio de los Deportes" >Palacio de los Deportes</option>
                <option value="Auditorio Nacional" >Auditorio Nacional</option>
                <option value="Estadio Azteca" >Estadio Azteca</option>
                <option value="Arena Ciudad de México<" >Arena Ciudad de México</option>
            </select>
            <br><br>
            <label>Zona:
                <br>
                <input type="radio" name="zona" value="VIP">VIP
                <br>
                <input type="radio" name="zona" value="Preferente">Preferente
                <br>
                <input type="radio" name="zona" value="Balcon">Balcón
                <br>
                <input type="radio" name="zona" value="General">General
            </label>
            <br><br>
            <label>Número de boletos:
                <input type="number" id="valor" name="valor" require>
            </label>
            <br><br>
            <label>Elige algunos extras para mejorar tu experiencia:
                <input type="checkbox" name="bebida" value="Bebidas">Bebidas
                <input type="checkbox" name="comida" value="Paquete comida">Paquete de comida
                <input type="checkbox" name="estacionamiento" value="Estacionamiento">Estacionamiento
                <input type="checkbox" name="souvenir" value="Souvenir">Souvenir
            </label>
            <br><br>
            <button type="reset">Borrar</button>
            <button type="submit">Comprar</button>
        </fieldset>
    </form>
    

</body>
</html>