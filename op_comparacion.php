<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Operadores comparativos</title>

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
                            <li><a class="dropdown-item" style="color: aliceblue;" href="Aritmeticos.html">Operadores Aritmeticos</a></li>
                            <li><a class="dropdown-item" style="color: aliceblue;" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: aliceblue;" href="#">Something else here</a></li>
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
               <h3>Operadores Comparacion</h3>
                <HR>
                
                <form method="post" action="Calculo_comparacion.php">
                        <div class="form-group">
                            <label for="valor1">Valor 1:</label>
                            <input id="valor1" class="form-control" type="text" name="valor1" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="valor2">Valor 2:</label>
                            <input id="valor2" class="form-control" type="text" name="valor2" required autocomplete="off">
                        </div>
                        <!-- <div class="form-group">
                            <label for="operacion">Seleccione una operacion</label>
                            <select name="operacion" id="operacion" class="form-control" required autocomplete="off">
                            <option value="igual">Igual</option>
                            <option value="diferente">Diferente</option>
                            <option value="mayor_que">Mayor Que</option>
                            <option value="menor_que">Menor Que</option>
                            <option value="mayor_igual">Mayor o Igual</option>
                            <option value="menor_igual">Menor o Igual</option>
                        </select>
                        </div> -->
                        
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