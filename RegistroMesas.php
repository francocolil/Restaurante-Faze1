<?php

include 'db.php';

$Id_Reserva;
$Id_RegistroUsuario;
$Nombre =$_POST['nombre'];
$Correo=$_POST['correo'];
$Telefono =$_POST['telefono'];
$Id_platos;
$Descripcion =$_POST['descripcion'];
$Mesa =$_POST['mesa'];
$Fecha =$_POST['fecha'];

$insertar="INSERT INTO reserva VALUES ('$Id_Reserva','$Id_RegistroUsuario','$Nombre','$Correo','$Telefono','$Id_platos','$Descripcion','$Mesa','$Fecha')";
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