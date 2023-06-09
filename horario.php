<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <title>HORARIOS</title>
    <script>
        if(!document.cookie){
            window.location.replace("login.php");
        }
    </script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #669934;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo.svg" alt="Bootstrap" width="35" height="35">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Horarios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="content">
            <div class="mb-3 mt-4">
                <label>Dia: </label>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" id="btnLunes" autocomplete="off" name="dia" value="1" onclick="mostrar(value)" >
                    <label class="btn btn-outline-success" for="btnLunes">Lunes</label>

                    <input type="radio" class="btn-check" id="btnMartes" autocomplete="off" name="dia" value="2" onclick="mostrar(value)">
                    <label class="btn btn-outline-success" for="btnMartes" >Martes</label>

                    <input type="radio" class="btn-check" id="btnMiercoles" autocomplete="off" name="dia" value="3" onclick="mostrar(value)">
                    <label class="btn btn-outline-success" for="btnMiercoles" >Miercoles</label>

                    <input type="radio" class="btn-check" id="btnJueves" autocomplete="off" name="dia" value="4" onclick="mostrar(value)">
                    <label class="btn btn-outline-success" for="btnJueves">Jueves</label>

                    <input type="radio" class="btn-check" id="btnViernes" autocomplete="off" name="dia" value="5" onclick="mostrar(value)">
                    <label class="btn btn-outline-success" for="btnViernes">Viernes</label>
                </div>
            </div>

            <div>
                <label for="">Clase:</label>
                <select class="form-select" id="materias"></select>
            </div>
            <div>
                <label for="">Profesor:</label>
                <select class="form-select" id="profesores"></select>
            </div>
            <div class="content-buttons"><a href="#" id="close-button" onclick="ShowMateria()">Aceptar</a></div>
        </div>

        <div class="row mt-5 border-dark">
            <div class="col-8">
                <label>Elegir horario:</label>
                <button class="btn boton" value="0" onclick="elegirHorario(value)">Matutino</button>
                <button class="btn boton" value="1" onclick="elegirHorario(value)">Vespertino</button>
            </div>
            <div class="col-4 align-items-center">
                <label>Semestre: </label>
                <label>Grupo: </label>
            </div>
            
        </div>

        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th scope="col">Hora</th>
                    <th scope="col">Lunes</th>
                    <th scope="col">Martes</th>
                    <th scope="col">Miércoles</th>
                    <th scope="col">Jueves</th>
                    <th scope="col">Viernes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td name="hora"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td name="hora"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td name="hora"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td name="hora"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td name="hora"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td name="hora"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td name="hora"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
            </tbody>
        </table>
    </div>

    <!--<div class="window-select" id="window-select">
        <div class="content">
            <div>
                <label for="">Clase:</label>
                <select class="form-select" id="materias"></select>
            </div>
            <div>
                <label for="">Profesor:</label>
                <select class="form-select" id="profesores"></select>
            </div>
            <div class="content-buttons"><a href="#" id="close-button" onclick="ShowMateria()">Aceptar</a></div>
        </div>
    </div>
</body>-->
<script src="script.js"></script>

<!--
<select class="form-select" aria-label="Default select example" id="materias" name="materias">
    <option value="1">Clase 1</option>
    <option value="2">Clase 2</option>
    <option value="3">Clase 3</option>
    <option value="4">Clase 4</option>
    <option value="5">Clase 5</option>
    <option value="6">Clase 6</option>
    <option value="7">Clase 7</option>
    <option value="8">Clase 8</option>
</select>
-->


<!-- 
    <tr class="celdaHorario">
                    <td name="hora"></td>
                    <td><button class="btn clases" name="1" value="0" onclick="mostrar(name,value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="2" value="0" onclick="mostrar(name,value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="3" value="0" onclick="mostrar(name,value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="4" value="0" onclick="mostrar(name,value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="5" value="0" onclick="mostrar(name,value)">Seleccionar</button></td>
            </tr>
            <tr class="celdaHorario">
                    <td name="hora"></td>
                    <td><button class="btn clases" name="1" value="1" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="2" value="1" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="3" value="1" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="4" value="1" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="5" value="1" onclick="mostrar(name, value)">Seleccionar</button></td>
            </tr>
            <tr class="celdaHorario">
                    <td name="hora"></td>
                    <td><button class="btn clases" name="1" value="2" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="2" value="2" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="3" value="2" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="4" value="2" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="5" value="2" onclick="mostrar(name, value)">Seleccionar</button></td>
            </tr>
            <tr class="celdaHorario">
                    <td name="hora"></td>
                    <td><button class="btn clases" name="1" value="3" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="2" value="3" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="3" value="3" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="4" value="3" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="5" value="3" onclick="mostrar(name, value)">Seleccionar</button></td>
            </tr>
            <tr class="celdaHorario">
                    <td name="hora"></td>
                    <td><button class="btn clases" name="1" value="4" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="2" value="4" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="3" value="4" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="4" value="4" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="5" value="4" onclick="mostrar(name, value)">Seleccionar</button></td>
            </tr>
            <tr class="celdaHorario">
                    <td name="hora"></td>
                    <td><button class="btn clases" name="1" value="5" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="2" value="5" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="3" value="5" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="4" value="5" onclick="mostrar(name, value)">Seleccionar</button></td>
                    <td><button class="btn clases" name="5" value="5" onclick="mostrar(name, value)">Seleccionar</button></td>
            </tr>
            <tr class="celdaHorario">
                <td name="hora"></td>
                <td><button class="btn clases" name="1" value="6" onclick="mostrar(name, value)">Seleccionar</button></td>
                <td><button class="btn clases" name="2" value="6" onclick="mostrar(name, value)">Seleccionar</button></td>
                <td><button class="btn clases" name="3" value="6" onclick="mostrar(name, value)">Seleccionar</button></td>
                <td><button class="btn clases" name="4" value="6" onclick="mostrar(name, value)">Seleccionar</button></td>
                <td><button class="btn clases" name="5" value="6" onclick="mostrar(name, value)">Seleccionar</button></td>
        </tr>
-->