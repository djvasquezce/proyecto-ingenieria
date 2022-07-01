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

    $consulta = "INSERT  INTO cobros(Referencia,Propietario,Tipo,Cuenta,Cobro) VALUES('$Referencia','$Propietario','$Tipo','$Cuenta','$Cobro')";
    $resultado= mysqli_query($conn, $consulta) or die(mysqli_error($conn))
?>
<Script type="text/javascript">
    alert("Se ha editado exitosamente")
    window.location.href="Cobro_cobro.php";
</Script>