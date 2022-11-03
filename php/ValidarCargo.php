<?php

session_start();

include('db.php');

$Correo =$_POST['correo'];
$Clave =$_POST['clave'];

$consulta= "SELECT * FROM usuarios WHERE correo = '$Correo' and clave = '$Clave'";
$resultado= mysqli_query($conectar, $consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['Id_cargo']==1){ // El numero 1 indica que es el administrador 
    header("location:Administrador.html");
}else
if($filas['Id_cargo']==2){ // El numero 2 nos inidca que es finanzas
    header("location:Finanzas.html");
}else
if($filas['Id_cargo']==3){
    header("location:Bodeguero.html"); // El numero 3 nos indica que es bodeguero
}else
if($filas['Id_cargo']==4){
    header("location:Cocina.html"); // El numero 4 nos indica que es cocina
}else
if($filas['Id_cargo']==5){
    header("location:Recepcionista.html"); // El numero 5 nos indica que es recepcionista
}else
if($filas['Id_cargo']==6){
    header("location:Login.html"); // El numero 6 nos indica que es cliente
}
else{
    include("LoginEmpresa.html");
    ?>
    <h1>ERROR</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conectar);


?>