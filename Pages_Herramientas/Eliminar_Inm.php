<?php
$servername = "localhost";
    $database = "inmuebles";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    $Referencia= $_GET['Referencia'];

    $consulta = "DELETE  FROM  inmuebles WHERE Referencia='".$_GET['Referencia']."'";
    $resultado2= mysqli_query($conn, $consulta)
    
?>

<Script type="text/javascript">
    alert("El inmueble ha sido borrado Exitosamente");
    window.location.href="Editar_P.php";
</Script>