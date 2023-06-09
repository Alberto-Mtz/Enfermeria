<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <title>ALUMNOS</title>
</head>

<body>
    <!-- BARRA DE NAVEGACION -->
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

    <!-- F O R M U L A R I O  -->
    <div class="container">
        <div class="row tabs mb-xl-5 mt-5">
            <ul class="nav nav-tabs">
                <div class="col-6">
                    <li class="nav-item ">
                        <a class="nav-link nActive" href="tablaAlumnos.php">Lista de Alumnos</a>
                    </li>
                </div>
                <div class="col-6">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Agregar Alumno</a>
                    </li>
                </div>
            </ul>
        </div>

        <div class="mb-3">
            <label for="cuenta" class="form-label">Nombre completo:</label>
            <input type="email" class="form-control" id="cuenta" placeholder="Nombre(s) apellidos">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Numero de cuenta:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: 20001234">
        </div>
        <div class="col-2 mb-3">
            <label for="">Semestre:</label>
            <select class="form-select" aria-label="Default select example">
                <option value="1">Primero</option>
                <option value="2">Segundo</option>
                <option value="3">Tercero</option>
                <option value="4">Cuarto</option>
                <option value="5">Quinto</option>
                <option value="6">Sexto</option>
                <option value="7">Septimo</option>
                <option value="8">Octavo</option>
            </select>
        </div>
        
        <div class="d-grid gap-2 col-6 mx-auto mt-3">
            <button class="btn boton" type="button">Guardar</button>
            <button class="btn btn-danger" type="button">Cancelar</button>
        </div>

    </div>
    
</body>
</html>

<!--
            <div class="row ml-2 mt-2  align-items-center">
                <div class="col-auto">
                    <label for="names">Nombre(s): </label>
                </div>
                <div class="col-10">
                    <input class="form-control" type="text" name="" id="names">
                </div>
            </div>
            <div class="row mt-2 ml-2 align-items-center">
                <div class="col-auto">
                    <label for="apellido">Apellido(s): </label>
                </div>
                <div class="col-10">
                    <input class="form-control" type="text" name="" id="apellido">
                </div>
            </div>
            <div class="row mt-2 ml-2 align-items-center">
                <div class="col-auto">
                    <label for="cuenta">Numero de cuenta: </label>
                </div>
                <div class="col-4">
                    <input class="form-control" type="text" name="" id="cuenta">
                </div>
            </div>
            <div class="row mt-2 ml-2 align-items-center">
                <div class="col-auto">
                    <label for="semestre">Semestre: </label>
                </div>
                <div class="col-2">
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>

        -->