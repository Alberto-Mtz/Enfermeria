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
                            <a class="nav-link" href="tablaAdmin.php">Administradores</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="tabs mb-xl-5 mt-5">
                <ul class="nav nav-tabs">
                    <div class="col-6">
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">Lista de jefes de grupo</a>
                        </li>
                    </div>
                    <div class="col-6">
                        <li class="nav-item">
                            <a class="nav-link nActive" href="usuariojefe.php">Agregar jefes de grupo</a>
                        </li>
                    </div>
                </ul>
            </div>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar un jefe de grupo" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

            <table class="table table-striped table-hover mt-5">
                <thead>
                    <td>
                        Cuenta
                    </td>
                    <td>
                        Nombre
                    </td>
                    <td>
                        Correo
                    </td>
                    <td>
                        Editar - Eliminar
                    </td>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            20004521
                        </td>
                        <td>
                            Roman Andrés Sola Hernández
                        </td>
                        <td>
                            rsola122@ucol.mx
                        </td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a href="editjefe.php" class="btn boton">Editar</a>
                                <button class="btn btn-danger" type="button">Eliminar</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            20004521
                        </td>
                        <td>
                            Roman Andrés Sola Hernández
                        </td>
                        <td>
                            rsola122@ucol.mx
                        </td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a href="editjefe.php" class="btn boton">Editar</a>
                                <button class="btn btn-danger" type="button">Eliminar</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            20004521
                        </td>
                        <td>
                            Roman Andrés Sola Hernández
                        </td>
                        <td>
                            rsola122@ucol.mx
                        </td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a href="editjefe.php" class="btn boton">Editar</a>
                                <button class="btn btn-danger" type="button">Eliminar</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>