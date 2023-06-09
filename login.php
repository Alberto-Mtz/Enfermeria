<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <title>Iniciar sesión</title>
</head>

<body>
    <div class="container">
        <div class="principal">
                <div class="centrar">
                    <img src="https://idp.ucol.mx/imglogin/UdClog21.png" alt="Universidad de Colima">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control " id="user" placeholder="Número de cuenta">
                    <input type="text" class="form-control mt-2" id="password" placeholder="Ingresa tu contraseña">
                </div>
                <div>
                    <button class="btn btnLogin" onclick="login()">Iniciar sesión</button>
                </div>
                <div class="centrar">
                    <a style="color: black;" href="https://sistemas2.ucol.mx/ucol_id/indexRecupera.php">Olvidé mi contraseña</a>
                </div>
        </div>               
    </div>

    <script src="login.js"></script>
</body>
</html>

