<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Proyecto</title>

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: aliceblue;">Proyecto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: aliceblue;" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: aliceblue;" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color: aliceblue;"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Clases PW
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" style="color: black;" href="Aritmeticos.html">Operadores Aritmeticos</a></li>
                            <li><a class="dropdown-item" style="color: black;" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black;" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" style="color: aliceblue;">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav> -->

    <?php require_once "Menu.php" ?>
</head>

<body>

    <!-- Contono de un formulario rounded esquinas redondiadas, shadow-lg sombras -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
               <h3>Registro de Ususario</h3>
                <HR>
                
                <form method="post" action="Recibe_post.php">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" class="form-control" type="text" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input id="ususario" class="form-control" type="text" name="usuario">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password:</label>
                            <input id="Password" class="form-control" type="Password" name="Password">
                        </div>
                        <div class="form-group">
                            <label for="Password2">Repetir Password:</label>
                            <input id="Password2" class="form-control" type="Password" name="Password2">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input id="correo" class="form-control" type="email" name="correo">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Iniciar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>

                    </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>