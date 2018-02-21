<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Document</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>
  
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Gestion de Inventarios</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Administrador</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Productos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Ingreso de productos</a>
                <a class="dropdown-item" href="#">consulta de productos</a>
                <a class="dropdown-item" href="#">actualización de productos</a>
                   
              </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#">Reportes especiales</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="src/operaciones.php">Operaciones matemáticas</a>
                </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success" type="submit">Buscar</button>
          </form>
        </div>
      </nav>


      <div class="container-fluid">
        
      <div class="jumbotron">


      <form method="post">
  <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Primer numero</label>
      <input type="number" class="form-control" id="num1" name="num1" placeholder="Ingrese el primer numero">
    </div>

    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Primer numero</label>
      <input type="number" class="form-control"  name="num2" placeholder="Ingrese el segundo numero">
    </div>

    
 
  </div>


  



  <div class="form-check">
  <input class="form-check-input" type="radio" name="option" id="suma1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Suma
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Resta
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Multiplicacion
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Divicion
  </label>
</div>


<div class="col-auto my-1">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>


  
</form>
     

<?php

$num1=$_POST['num1'];
$num2=$_POST['num2'];



?>


</div>

    </div>





  <script src="../js/jquery-3.2.1.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
