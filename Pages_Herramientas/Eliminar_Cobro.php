<?php
$servername = "localhost";
$database = "inmuebles";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$Referencia = $_GET['Referencia'];

$consulta = "DELETE  FROM  cobros WHERE Referencia='" . $_GET['Referencia'] . "'";
$resultado3 = mysqli_query($conn, $consulta)

?>

<Script type="text/javascript">
    alert("El Cobro ha sido borrado Exitosamente");
    window.location.href = "VistaMostrarCobro.php";
</Script>