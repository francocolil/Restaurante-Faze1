<?php

include 'db.php';

$Id_usuario;
$Nombre =$_POST['nombre'];
$Apellido =$_POST['apellido'];
$Correo=$_POST['correo'];
$Clave =$_POST['clave'];
$Idcargo  =$_POST['cargo'];
$Rut =$_POST['rut'];
$Telefono =$_POST['telefono'];

$insertar="INSERT INTO usuarios VALUES ('$Id_usuario','$Nombre','$Apellido','$Correo','$Clave','$Idcargo','$Rut','$Telefono')";
$query = mysqli_query($conectar, $insertar);

if($query){

    echo "<script> alert('Usted se a Registrado');
    location.href = 'RegistroEmpleado.html';
    </script>";
}
else{
    echo "<script> alert('incorrecto'); 
    location.href = 'RegistroEmpleado.html';
    </script>";
}
?>