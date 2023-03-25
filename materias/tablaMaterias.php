<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <title>Materias</title>
    <script>
        if(!document.cookie){
            window.location.replace("../login.php");
        }
    </script>
</head>
    <body onload="mostrarMaterias()">
        <!-- barra de navegación Inicio -->
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
        <!-- barra de navegación Final -->

        <!-- Selector inicio -->
        <div class="container">
            <div class="tabs">
                <ul class="nav nav-tabs">
                    <div class="col-6">
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">Lista de Materias</a>
                        </li>
                    </div>
                    <div class="col-6">
                        <li class="nav-item">
                            <a class="nav-link nActive" href="agregarMateria.php">Agregar Materias</a>
                        </li>
                    </div>
                </ul>
            </div>
            <!-- Selector Final -->

            
            <!-- barra de busqueda Inicio -->
            <div class="input-group p-5">
      
                <select class=" btn-outline-secondary selector" id="inputGroupSelect">
                  <option selected value="1">Asignatura</option>
                  <option value="2">Profesor</option>
                </select>
          
                <input type="text" class="form-control" id="busqueda" onkeyup="buscar()" placeholder="Buscar materia">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2" >Buscar</button>
              </div>
            <!-- barra de busqueda Final -->
            
            <div class="card">
              <div class="card-body text-end">

                  <input class="form-check-input" type="checkbox" id="activas" onchange="mostrarMaterias()">
                  <label class="form-check-label" for="activas">Mostrar materias inactivas</label>

              </div>
            </div>

            <!-- Tabla Inicio -->
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Asignatura</th>
                    <th scope="col">Profesor</th>
                    <th scope="col">Materia Activa</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody id="tabla">
                </tbody>
              </table>
            </div>
            <!-- Tabla Final-->
        </div>


        <!-- VENTANA PARA EDITAR MATERIA-->

        <div class="window-select" id="window-select">
          
        </div>

        <!-- navegador Inicio -->
        
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>

        <!-- navegador Final -->
        <style>
            .container{
    padding: 50px;
    
}

.selector{
    display: block;
    width: 15% !important;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    -moz-padding-start: calc(0.75rem - 3px);
    border: 1px solid #ced4da;
    border-radius: 0.375rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #fff;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
}

@media (prefers-reduced-motion: reduce) {
    .selector {
      transition: none;
    }
  }
  .selector:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
  }
  .selector[multiple], .selector[size]:not([size="1"]) {
    padding-right: 1rem;
    background-image: none;
  }

  .selector:disabled {
    background-color: #e9ecef;
  }
  .selector:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #212529;
  }
        </style>

      <script src="subjects.js"></script>
    </body>
</html>