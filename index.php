<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>COMPRA DE BOLETOS</title>
</head>
<body>
    <h1>COMPRA DE BOLETOS</h1>
    <h2>FORMULARIO</h2>
    <form action="guardar.php" class="boletos" method="post">
        <label for="ticket">Ticket</label>
        <input type="number" id="ticket" name="ticket" maxlength="6" require><br><br>

        <label for="pelicula">Pelicula</label>
        <input type="text" id="pelicula" name="pelicula" maxlength="40" require><br><br>

        <button class="submit" type="submit">Reservar boletos</button>
    </form>
</body>
</html>