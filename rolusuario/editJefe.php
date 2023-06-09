<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <title>PROFESORES</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #669934;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/images/logo.svg" alt="Bootstrap" width="35" height="35">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tablaestudiante.php">Estudiantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tablajefe.php">Jefes de grupo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tabladmin.php">Administradores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="tabs mb-xl-5 mt-5">
            <ul class="nav nav-tabs">
                <div class="col-12">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Editar jefe de grupo</a>
                    </li>
                </div>
            </ul>
        </div>

        <!-- F O R M U L A R I O  -->
        <div class="mb-3">
            <label for="cuenta" class="form-label">Número de cuenta</label>
            <input type="email" class="form-control" id="cuenta" placeholder="Ejemplo: 20175259">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre completo</label>
            <input type="email" class="form-control" id="nombre" placeholder="Nombre(s) Apellidos">
        </div>
        <div class="mb-3">
            <label for="">Tipo de usuario:</label>
            <select class="form-select" aria-label="Default select example">
                <option value="1">Estudiante</option>
                <option value="2">Jefe de grupo</option>
                <option value="3">Admin</option>
            </select>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="link btn boton" href="tablajefe.php">Guardar</a>
            <a class="link btn btn-danger" href="tablajefe.php">Cancelar</a>
        </div>
    </div>
</body>
</html>