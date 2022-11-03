<?php

include 'db.php';

$CodProducto;
$Descripcion =$_POST['descripcion'];
$Proveedor =$_POST['proveedor'];
$Costo =$_POST['costo'];
$Categoria=$_POST['categoria'];
$Stock =$_POST['stock'];


$insertar="INSERT INTO producto VALUES ('$CodProducto','$Descripcion','$Proveedor','$Costo','$Categoria','$Stock')";
$query = mysqli_query($conectar, $insertar);

if($query){

    echo "<script> alert('Usted se a Registrado');
    location.href = 'RegistroProducto.php';
    </script>";
}
else{
    echo "<script> alert('incorrecto'); 
    location.href = 'RegistroProducto.php';
    </script>";
}
?>