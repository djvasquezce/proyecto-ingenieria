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


$consulta = "UPDATE cobros SET Referencia='$Referencia', Propietario='$Propietario', Tipo='$Tipo', Cobro='$Cobro' WHERE Cuenta='$Cuenta'";
$result= mysqli_query($conn, $consulta);

if($result){
    echo "Se ha editado exitosamente";
}else{
    echo "No se ha podido editar";
};


?>
<Script type="text/javascript">
    alert("Cobro editado exitosamente")
    window.location.href="VistaMostrarCobro.php";
</Script>