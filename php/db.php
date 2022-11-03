<?php

#function conn(){
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname = "restaurante siglo xxi";

$conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
return $conectar;

#}
?>