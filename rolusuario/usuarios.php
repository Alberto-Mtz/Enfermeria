<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #669934;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/logo.svg" alt="Bootstrap" width="35" height="35">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
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
        <div class="row align-items-center">
            <div class="col">
                <div class="card mt-3">
                    <a href="tablaestudiante.php" class="link">
                        <div class="card-body">
                            <h5 class="card-title text-center">Estudiantes</h5>
                            <img src="../images/grupos.png" class="opcion" alt="">
                        </div>
                    </a>
                    
                </div>
            </div>
            <div class="col">
                <div class="card mt-3">
                    <a class="link" href="tablajefe.php">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jefes de grupo</h5>
                            <img src="../images/grupos.png" class="opcion" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card mt-3">
                    <a href="tabladmin.php" class="link">
                        <div class="card-body">
                            <h5 class="card-title text-center">Administradores</h5>
                            <img src="../images/grupos.png" class="opcion" alt="">
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>

</body>
</html>

