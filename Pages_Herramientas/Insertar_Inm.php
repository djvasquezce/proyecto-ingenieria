<?php
    $servername = "localhost";
    $database = "inmuebles";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    $Referencia= $_POST['In_Referencia'];
    $Propietario = $_POST['In_Propietario'];
    $Direccion = $_POST['In_Direccion'];
    $Email=$_POST['In_Email'];
    $Tipo = $_POST['gridRadios'];

    $consulta = "INSERT  INTO inmuebles(Referencia,Propietario,Direccion,Email,Tipo) VALUES('$Referencia','$Propietario','$Direccion','$Email','$Tipo')";
    $resultado= mysqli_query($conn, $consulta) or die(mysqli_error($conn))
    
?>
<script type="text/javascript">
    alert("El inmueble se ha creado Exitosamente");
    window.location.href='Crear.php';
</script>