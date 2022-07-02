<?php
$servername = "localhost";
$database = "inmuebles";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$Cuenta = $_GET['Cuenta'];

$consulta = "DELETE  FROM  cobros WHERE Cuenta='" . $_GET['Cuenta'] . "'";
$resultado3 = mysqli_query($conn, $consulta)

?>

<Script type="text/javascript">
    alert("El Cobro ha sido borrado Exitosamente");
    window.location.href = "VistaMostrarCobro.php";
</Script>