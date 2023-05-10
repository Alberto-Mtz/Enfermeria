<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <title>PROFESORES</title>
    <script>
        if(!document.cookie){
            window.location.replace("../login.php");
        }
    </script>

</head>
    <body onload="mostrarProfesores()">
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
                            <a class="nav-link" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../materias/tablaMaterias.php">Materias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../alumnos/tablaAlumnos.php">Alumnos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../rolusuario/usuarios.php">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../profesores/tablaProfesores.php">Profesores</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Horarios</a>
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
                            <a class="nav-link active" href="#">Lista de Profesores</a>
                        </li>
                    </div>
                    <div class="col-6">
                        <li class="nav-item">
                            <a class="nav-link nActive" href="agregarProfesor.php">Agregar Profesor</a>
                        </li>
                    </div>
                </ul>
            </div>

            <input type="text" class="form-control" id="busqueda" onkeyup="buscar()" placeholder="Buscar profesor">

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
                        Grupo
                    </td>
                    <td>
                        Editar - Eliminar
                    </td>
                </thead>
                <tbody id="tabla"></tbody>
            </table>
        </div>
        <script src="profesores.js"></script>
    </body>
</html>