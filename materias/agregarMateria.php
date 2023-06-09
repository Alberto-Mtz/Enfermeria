<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <title>Materias</title>
    <script src="subjects.js"></script>
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
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="materias/tablaMaterias.php">Materias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alumnos/tablaAlumnos.php">Alumnos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rolusuario/usuarios.php">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profesores/tablaProfesores.php">Profesores</a>
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
                      <a class="nav-link nActive" href="tablaMaterias.php">Lista de Materias</a>
                  </li>
              </div>
              <div class="col-6">
                  <li class="nav-item">
                      <a class="nav-link active" href="#">Agregar Materias</a>
                  </li>
              </div>
          </ul>
      </div>


          <div class="mb-3">
            <label for="materia" class="form-label">Materia</label>
            <input type="text" class="form-control" id="materia" placeholder="Materia">
          </div>

          <div class="mb-3">
            <label>Profesor:</label>
            <select class="form-select" aria-label="Default select example">
                <option value="1">Juan Jose Rosas</option>
                <option value="2">Gullermina Lopez Rosales</option>
                <option value="3">Luis Alberto Lopez</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Materia Activa:</label>
            <select class="form-select" aria-label="Default select example">
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Dias que se imparte:</label>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-success" for="btncheck1">Lunes</label>

                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                <label class="btn btn-outline-success" for="btncheck2">Martes</label>

                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                <label class="btn btn-outline-success" for="btncheck3">Miercoles</label>

                <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                <label class="btn btn-outline-success" for="btncheck4">Jueves</label>

                <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                <label class="btn btn-outline-success" for="btncheck5">Viernes</label>
            </div>
        </div>


        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn boton" type="button">Guardar</button>
        </div>
      </div>
      
</body>
</html>