<?php

session_start();

include('db.php');

$Correo =$_POST['correo'];
$Clave =$_POST['clave'];

$_SESSION['correo']=$Correo;

$consulta= "SELECT * FROM usuarios WHERE correo = '$Correo' and clave = '$Clave'";
$resultado= mysqli_query($conectar, $consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['Idcargo']==1){ // El numero 1 indica que es el administrador 
    header("location:Administrador.php");
}else
if($filas['Idcargo']==2){ // El numero 2 nos inidca que es finanzas
    header("location:Finanzas.php");
}else
if($filas['Idcargo']==3){
    header("location:Bodeguero.php"); // El numero 3 nos indica que es bodeguero
}else
if($filas['Idcargo']==4){
    header("location:Cocina.php"); // El numero 4 nos indica que es cocina
}else
if($filas['Idcargo']==5){
    header("location:Recepcionista.php"); // El numero 5 nos indica que es recepcionista
}else
if($filas['Idcargo']==6){
    header("location:Login.php"); // El numero 6 nos indica que es cliente
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