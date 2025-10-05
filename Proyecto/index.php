<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Datos</title>
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div class="dive">
        <center>
        <h1>Captura de datos personales</h1><br>
        <h2>Ingresa los datos que se te piden</h2><br>
        <p>Mi primera encuesta</p><hr>
        <form action="resultados.php" method="POST">
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" value="Ingresa tu nombre"/><hr>
            <label for="Edad">Edad</label>
            <input type="number" id="Edad" name="Edad" value=""/><hr>
            <label for="Ciudad">Ciudad donde vives</label>
            <input type="text" id="Ciudad" name="Ciudad" value="Ingresa la ciudad donde vives"/><hr>
            <label for="Fecha">Fecha de nacimiento</label>
            <input type="date" id="Fecha" name="Fecha" value=""/><hr>
            <label for="Pasatiempo">Pasatiempo favorito</label>
            <input type="text" id="Pasatiempo" name="Pasatiempo" value="Ingresa tu pasatiempo favorito"/><hr>
            <a href="resultados.html">
                <button type="submit">¡Ingresamos Datos!</button>
            </a>
        </form>
        </center>
    </div>

</body>
</html>