<?php

include 'db.php';

$Id_proveedor;
$Proveedor =$_POST['proveedor'];
$Contacto =$_POST['contacto'];
$Telefono=$_POST['telefono'];
$Direccion =$_POST['direccion'];
$Date_add;
$Estatus;

$insertar="INSERT INTO proveedor VALUES ('$Id_proveedor','$Proveedor','$Contacto','$Telefono','$Direccion','$Date_add','$Estatus')";
$query = mysqli_query($conectar, $insertar);

if($query){

    echo "<script> alert('Usted se a Registrado');
    location.href = 'RegistroProveedor.html';
    </script>";
}
else{
    echo "<script> alert('incorrecto'); 
    location.href = 'RegistroProveedor.html';
    </script>";
}
?>