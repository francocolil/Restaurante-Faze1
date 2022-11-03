<?php

session_start();

include('db.php');

$Correo =$_POST['correo'];
$Clave =$_POST['clave'];

$_SESSION['correo']=$Correo;

$consulta= "SELECT * FROM registro_usuario WHERE correo = '$Correo' and clave = '$Clave'";
$resultado= mysqli_query($conectar, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:Cliente.php");
}else{
    include("Login.html");
    ?>
    <script>
	alert( 'Error. Intentelo denuevo' );
    </script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conectar);


?>