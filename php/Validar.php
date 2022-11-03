<?php

session_start();

include('db.php');

$Correo =$_POST['correo'];
$Clave =$_POST['clave'];

$consulta= "SELECT * FROM registro_usuario WHERE correo = '$Correo' and clave = '$Clave'";
$resultado= mysqli_query($conectar, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:Cliente.html");
}else{
    include("Login.html");
    ?>
    <h1>ERROR</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conectar);


?>