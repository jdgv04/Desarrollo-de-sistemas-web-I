<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de datos!</title>
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div class="dive2">
        
        <center>
            <h1>Resultados</h1>
            <img src="img/Homero.jpeg" alt="Homero">
            <h2>¡Bien hecho!</h2>
            <?php
                $nombre = $_POST['Nombre'];
                $edad = $_POST['Edad'];
                $ciudad = $_POST['Ciudad'];
                $fecha = $_POST['Fecha'];
                $pasatiempo = $_POST['Pasatiempo'];

                echo '<p><b>Nombre: </b>' .$nombre. '</p>';
                echo '<p><b>Edad: </b>' .$edad. '</p>';
                echo '<p><b>Ciudad: </b>' .$ciudad. '</p>';
                echo '<p><b>Fecha: </b>' .$fecha. '</p>';
                echo '<p><b>Pasatiempo: </b>' .$pasatiempo. '</p>';

            ?>
            <div id="popUpOverlay"></div>
            <div id="popUpBox">
                <div id="box">
                    <i class="fas fa-question-circle fa-5x"></i>
                    <h1>¿Volver a ingresar datos?</h1>
                    <div id="closeModal"></div>
                </div>
            </div>
            <button onclick="Alert.render('You look very pretty today.')" class="btn">¡Volver a Ingresar!</button>
            <script src="./app.js"></script>
        </center>
    </div>

</body>
</html>