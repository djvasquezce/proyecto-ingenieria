<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crear cobro</title>
  </head>

  <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
          <div class="mx-auto " style="width: 300px;"></div>
            <div class="container-fluid ">
              <img src="../images/mundo.gif" alt="Funny image" width="100" height="100"> 
                <ul class="navbar-nav">
                  <li class="nav-item fs-6 ms-3 rounded-pill bg-light "><a class="nav-link active text-black" aria-current="page" href="../Pages_Principal/index.html">Home</a></li>
                  <li class="nav-item fs-6 ms-3 rounded-pill bg-light"><a class="nav-link active text-black" aria-current="page" href="./Movimientos.html">Movimientos</a></li>
                  <li class="nav-item fs-6 ms-3 rounded-pill bg-light"><a class="nav-link active text-black" aria-current="page" href="./Cuentas.html">Cuentas</a></li>
                  <li class="nav-item dropdown  fs-6 ms-3 rounded-pill bg-light"><a class="nav-link dropdown-toggle fs-6 text-black" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Herramientas</a>
                    <ul class="dropdown-menu  fs-6 ms-3 " aria-labelledby="navbarDropdown">
                      <li class="nav-item fs-6"><a class="nav-link text-black" href="../Pages_Herramientas/Crear.php">Crear</a></li>
                      <li class="nav-item fs-6"><a class="nav-link text-black" href="../Pages_Herramientas/Editar_P.php">Editar</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
          </div>
        </nav>
    </header>
    
    <H1></H1>
    <main>
      <section class="mx-auto " style="width: 700px;">
          <h1 class=" fst-italic text-black text-center"> Crear Cobro</h1>
      </section>

      <section class="mx-auto " style="width: 750px;">
        <table class="table table-bordered border border-4 border-dark"  >
            <thead>
              <tr>
                <th scope="col">Referencia</th>
                <th scope="col">Propietario</th>
                <th scope="col">Tipo</th>
                <th scope="col"></th>
              </tr>
              <?php 
              $servername = "localhost";
              $database = "inmuebles";
              $username = "root";
              $password = "";
              // Create connection
              $conn = mysqli_connect($servername, $username, $password, $database);
              $consulta = "SELECT * FROM inmuebles";
              $resultado= mysqli_query($conn, $consulta) or die(mysqli_error($conn));

              while ($filas = mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td>"; echo $filas['Referencia']; echo"</td>";
                echo "<td>"; echo $filas['Propietario']; echo"</td>";
                echo "<td>"; echo $filas['Tipo']; echo"</td>";
                echo "<td> <a href='Cobro_p.php?Referencia=".$filas['Referencia']."'> <button type='button' class='btn btn-success'> Crear Cobro </button></a> </td>";

                echo "</tr>";
              }
              ?>
            </thead>
          </table>
      </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
</html>