<?php

include 'db.php';

?>

<!DOCTYPE html>
<html lang=”es”>
<head>
    <meta charset=”UTF-8″ />
    <title>Registro Cliente</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<style>
    .menu{
    text-align: center;
    list-style:none;
    padding: 0;
    background: #C8E6C9;
    width:100%;
    max-width: 3000px;
    margin: auto;
  }
  .menu li a{
    text-decoration: none;
    color:#616161;
    padding:20px;
    display: block;
  }
  .menu li{
    display: inline-block;
    text-align: center;
  }
  .menu li a:hover{
    background:white;
  }

  table, th, td {
    border: 1px solid;
    
  }
  table {
    width: 80%;
    border-collapse: collapse;
    text-align: center;
    list-style:none;
    padding: 0;
    width:100%;
    max-width: 1700px;
    margin: auto;
  }
  .option{
    text-align: center;
    list-style:none;
    padding: 0;
    width:100%;
    max-width: 3000px;
    margin: auto;
    text-decoration: none;
  }

</style>
<body>
<ul class="menu">
        <li class=""><a href="Administrador.php">Perfil</a></li>
        <li class=""><a href="RegistroEmpleado.html">Registrar Empleado</a></li>
        <li class=""><a href="RegistroProveedor.html">Registrar Proveedor</a></li>
        <li class=""><a href="RegistroProducto.php">Agregar Porductos</a></li>
        <li class=""><a href="#">Visualizar Agregar mesas</a></li>
        <li class=""><a href="#">Encargar Pedidos</a></li>
        <li class=""><a href="ListaTrabajadores.php">Lista de Trabajadores</a></li>
        <li class=""><a href="ListaProveedor.php">Lista de Proveedores</a></li>
        <li class=""><a href="ListaProductos.php">Lista de Productos</a></li>
    </ul>
    <br>
    <br>
    <br>
    <br>
    <section id="container">
        <h1>Lista de Proveedores</h1>
    <br>
        <table>
            <tr>
                <th>ID</th>
                <th>Proveedor</th>
                <th>Contacto</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Cargo</th>
            </tr>
            <?php
                $query = mysqli_query($conectar, "SELECT usuarios.Id_usuario, usuarios.Nombre, usuarios.Apellido, usuarios.Correo, usuarios.Rut, cargo.Descripcion FROM usuarios INNER JOIN cargo ON usuarios.Idcargo = cargo.Id");
                $result = mysqli_num_rows($query);

                if($result >0){

                    while($data = mysqli_fetch_array($query)){
            
                ?>
                    <tr>
                        <td><?php echo $data["Id_usuario"] ?></td>
                        <td><?php echo $data["Nombre"] ?></td>
                        <td><?php echo $data["Apellido"] ?></td>
                        <td><?php echo $data["Correo"] ?></td>
                        <td><?php echo $data["Rut"] ?></td>
                        <td><?php echo $data["Descripcion"] ?></td>
                    </tr>
            <?php
                    }
                }
            ?>
        </table>
        <br>
        <br>
        <div class="option">
        <a class="link_edit" href="#">Editar</a>
        <a class="link_delete" href="#">Eliminar</a>
        </div>
    </selection>
 </body>