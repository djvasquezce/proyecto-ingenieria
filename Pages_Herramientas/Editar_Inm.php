<?php
$servername = "localhost";
    $database = "inmuebles";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    $Referencia= $_POST['E_Referencia'];
    $Propietario = $_POST['E_Propietario'];
    $Direccion = $_POST['E_Direccion'];
    $Email=$_POST['E_Email'];
    $Tipo = $_POST['EgridRadios'];

    $consulta = "UPDATE inmuebles SET Propietario='$Propietario', Direccion='$Direccion',Email='$Email', Tipo='$Tipo'  WHERE Referencia='$Referencia'";
    $resultado2= mysqli_query($conn, $consulta)
    
?>
<Script type="text/javascript">
    alert("Se ha editado exitosamente")
    window.location.href="Editar_P.php";
</Script>
