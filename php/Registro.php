<?php

require 'db.php';

$Nombre =$_POST['nombre'];
$Apellido =$_POST['apellido'];
$Rut=$_POST['rut'];
$Correo =$_POST['correo'];
$Clave =$_POST['clave'];
$Telefono =$_POST['telefono'];

$insertar="INSERT INTO registro_usuario VALUES ('$Nombre','$Apellido','$Rut','$Correo','$Clave','$Telefono')";
$query = mysqli_query($conectar, $insertar);

if($query){

    echo "<script> alert('Usted se a Registrado');
    location.href = 'RegistroUsuario.html';
    </script>";
}
else{
    echo "<script> alert('incorrecto'); 
    location.href = 'RegistroUsuario.html';
    </script>";
}

?>