<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Recibe valores aritmeticos</title>
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
    </nav> --> <?php require_once "Menu.php" ?>
  
</head>
<body>
<?php 

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];



if($valor1 == $valor2){
$op1="Verdadero";
$tipo="Igual";
}
else if($valor1 <> $valor2){
    $op1="Verdadero";
    $tipo="Diferente";
    }
    else if($valor1 > $valor2){
        $op1="Verdadero";
        $tipo="Mayor que";
        }
        else if($valor1 < $valor2){
            $op1="Verdadero";
            $tipo="Menor que";
            }
            else if($valor1 >=$valor2){
                $op1="Verdadero";
                $tipo="Mayo igual";
                }
                else if($valor1 <= $valor2){
                    $op1="Verdadero";
                    $tipo="Menor igual";
                    }
else{
                    $op1="falso";
                }

?>    

<div class="container">
    El valor enviado es: <?php echo $valor1 ?><br>
    El valor enviado es: <?php echo $valor2 ?><br>

<table class="table table-success table-striped table-bordered" >
    <tbody>
           <tr>
            <td>Estado</td>
            <td>Tipo</td>
        </tr>
        <tr>
        <td><?php echo $op1 ?></td>
         <td><?php echo $tipo ?></td> 
        

        </tr>
    </tbody>
</table>
</div>

</body>
</html>