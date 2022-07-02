<?php
$servername = "localhost";
$database = "inmuebles";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$Referencia= $_POST['C_Referencia'];
$Propietario = $_POST['C_Propietario'];
$Tipo = $_POST['C_Tipo'];
$Cuenta=$_POST['C_Cuenta'];
$Cobro = $_POST['C_Cobro'];


$consulta = "DELETE  FROM  cobros WHERE Cuenta='$Cuenta'";  
$result= mysqli_query($conn, $consulta);


?>
<Script type="text/javascript">
    alert("Pago de Administración exitosamente")
    window.location.href="VistaPagarAdmin.php";
</Script>