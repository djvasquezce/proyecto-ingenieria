<?php
    error_reporting(0);
    $servername = "localhost";
    $database = "inmuebles";
    $username = "root";
    $password = "";
    // Create connection
    $Referencia=$_GET["Referencia"];
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    $consulta=Traer($conn, $Referencia);

    function Traer($conn, $Referencia){
    $consulta = "SELECT * FROM inmuebles WHERE Referencia = '$Referencia'";
    $resultado= mysqli_query($conn, $consulta) or die(mysqli_error($conn));
    $filas = mysqli_fetch_assoc($resultado);
    return [
        $filas['Referencia'],
        $filas['Propietario'],
        $filas['Direccion'],
        $filas['Email'],
        $filas['Tipo']
    ];
}

$Formatos= explode(',',$consulta[4]);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> Crear Inmuebles</title>
  </head>
  <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
          <div class="mx-auto" style="width: 300px;"></div>
            <div class="container-fluid">
              <img src="../images/mundo.gif" alt="Funny image" width="100" height="100"> 
              <ul class="navbar-nav">
                <li class="nav-item fs-6 ms-3 rounded-pill bg-light "><a class="nav-link active text-black" aria-current="page" href="../javascript/index.html">Home</a></li>
                <li class="nav-item fs-6 ms-3 rounded-pill bg-light"><a class="nav-link active text-black" aria-current="page" href="../Pages_Principal/Movimientos.html">Movimientos</a></li>
                <li class="nav-item fs-6 ms-3 rounded-pill bg-light "><a class="nav-link active text-black" aria-current="page" href="../Pages_Principal/Crear_cobro.html">Crear cobro</a></li>
                <li class="nav-item fs-6 ms-3 rounded-pill bg-light"><a class="nav-link active text-black" aria-current="page" href="../Pages_Principal/Cuentas.html">Cuentas</a></li>
                <li class="nav-item dropdown  fs-6 ms-3 rounded-pill bg-light"><a class="nav-link dropdown-toggle fs-6 text-black" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Herramientas</a>
                  <ul class="dropdown-menu  fs-6 ms-3 " aria-labelledby="navbarDropdown">
                    <li class="nav-item fs-6"><a class="nav-link text-black" href="./Editar_P.php">Editar</a></li>
                  </ul>
                </li>
              </ul>
          </div>
        </div>
      </nav>
  </header>

  <H1></H1>
  <H1></H1>
  
  <main>
    <section class="mx-auto " style="width: 700px;">
        <h1 class=" fst-italic text-black text-center"> Crear inmueble</h1>
      <form method="POST" action="Editar_Inm.php">


        <input type='hidden' class='form-control' name='E_Referencia' value='<?php echo $_GET["Referencia"];?>'>

        <div class="row mb-3">
          <label for="inputString" class="col-sm-2 col-form-label">Propietario:</label>
          <div class="col-sm-10">
            <input type="String" class="form-control" name="E_Propietario" value="<?php echo $consulta[1]?>">
          </div>
        </div>


        <div class="row mb-3">
          <label for="inputInteger" class="col-sm-2 col-form-label">Dirección:</label>
          <div class="col-sm-10">
            <input type="String" class="form-control" name="E_Direccion"  value="<?php echo $consulta[2]?>">
        </div>
      </div>

        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="E_Email" value="<?php echo $consulta[3]?>">
          </div>
        </div>
      
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Tipo:</legend>
          <div class="col-sm-10">
             

            <div class="form-check">
              <input class="form-check-input" type="radio" name="EgridRadios" value="Apartamento" <?php if(in_array('Apartamento',$Formatos)== true){echo 'checked = "checked"';} ?>>
              <label class="form-check-label" for="Edificio">
                Apartamento
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="EgridRadios" value="Parqueadero" <?php if(in_array('Parqueadero',$Formatos)== true){echo 'checked = "checked"';} ?>>
              <label class="form-check-label" for="Edificio">
                Parqueadero
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="EgridRadios" value="Edificio" <?php if(in_array('Edificio',$Formatos)== true){echo 'checked = "checked"';} ?>>
              <label class="form-check-label" for="Edificio">
                Edificio
              </label>
            </div>
          </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Editar</button>
      </form>
    </section>
  
  </main>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
</html>