<?php
error_reporting(0);
$servername = "localhost";
$database = "inmuebles";
$username = "root";
$password = "";
// Create connection
$Referencia = $_GET["Referencia"];

$conn = mysqli_connect($servername, $username, $password, $database);
$consulta = Traer($conn, $Referencia);

function Traer($conn, $Referencia)
{
    $consulta = "SELECT * FROM cobros WHERE Referencia = '$Referencia'";
    $resultado = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
    $filas = mysqli_fetch_assoc($resultado);
    return [
        $filas['Referencia'],
        $filas['Propietario'],
        $filas['Tipo'],
        $filas['Cuenta'],
        $filas['Cobro']
    ];
}

$Formatos = explode(',', $consulta[4]);

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
                    <li class="nav-item fs-6 ms-3 rounded-pill bg-light "><a class="nav-link active text-black" aria-current="page" href="../index.html">Home</a></li>
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
            <h1 class=" fst-italic text-black text-center"> Editar Cobro</h1>
            <form method="POST" action="Editar_Cobro.php">


                <input type='hidden' class='form-control' name='C_Referencia' value='<?php echo $consulta[0]; ?>'>
                <input type='hidden' class='form-control' name='C_Propietario' value='<?php echo $consulta[1]; ?>'>
                <input type='hidden' class='form-control' name='C_Tipo' value='<?php echo $consulta[2]; ?>'>
                <!-- aaa -->
                <div class="row mb-3">
                    <label for="String" class="col-sm-2 col-form-label">Propietario:</label>
                    <label for="String" class="col-sm-2 col-form-label"><?php echo $consulta[1] ?></label>
                </div>
                </div>

                <div class="row mb-3">
                    <label for="String" class="col-sm-2 col-form-label">Tipo:</label>
                    <label for="String" class="col-sm-2 col-form-label"><?php echo $consulta[2] ?></label>
                </div>

                <div class="row mb-3">
                    <label for="inputString" class="col-sm-2 col-form-label">Cuenta:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="C_Cuenta" value="<?php echo $consulta[3]?>">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputInteger" class="col-sm-2 col-form-label">Cobro</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="C_Cobro" value="<?php echo $consulta[4]?>">
                    </div>
                </div>
                <!-- aaa -->

                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </section>

    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

</html>