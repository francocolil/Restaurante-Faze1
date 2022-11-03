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
* {
    box-sizing: border-box;
}

body{
    margin: 0;
    padding:0;
    font-family: Helvetica;
    background: #424242;
}

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

h1{
    color: #fff;
    text-align: center;
}

form .form-register{
    width: 95%;
    max-width: 500px;
    margin:auto;
    background: #C8E6C9;
    border-radius: 10px;
}

.form__titulo{
    color: black;
    padding: 1px;
    text-align: center;
    font-weight: 100;
    font-size: 30px;
    border-radius:5px;
}

.contenedor-inputs{
    background-color: transparent;
  border:1px solid gray;
  border-radius:5px;
  padding:17px;
  width: 340px;
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  background: #C8E6C9;
}
input{
    margin-bottom: 15px;
    padding: 15px;
    font-size: 16px;
    border-radius: 3px;
    border: 1px solid darkgray;
}

.input-50{
    width: 100%;
}

.input-100{
    width: 150%;
}

.btn-enviar{
    background: #424242;
    color: #F5F5F5;
    margin: auto;
    padding: 15px 100px;
}

.form__link{
    width: 100%;
    margin: 0;
    padding: 10px 50px;
    text-align: center;
    font-size: 15px;
    text-decoration: none;
    color: #F5F5F5;
}

.link{
    width: 100%;
    margin: 0;
    padding: 10px 50px;
    text-align: center;
    font-size: 15px;
    text-decoration: none;
    color:#F5F5F5;
}

h1{
    color: black;
    text-align: center;
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
<body>
    <br>
    <br>
    <br>
    <br>
    <h1>Registro de Productos</h1>
    <form action="ProductoRegistro.php" method="post" class="form-register">
        <div class="contenedor-inputs">
        <br>
        <br>
            <div class="NombreProveedor">
                <label for="proveedor">Proveedor</label>
                <?php
                    $query_proveedor = mysqli_query($conectar, "SELECT Id_proveedor, Proveedor FROM proveedor ORDER BY proveedor ASC");
                    $result_proveedor = mysqli_num_rows($query_proveedor);
                    mysqli_close($conectar);
                ?>
                <select name="proveedor" id="proveedor">
                <?php

                    if($result_proveedor > 0){
                        while($proveedor = mysqli_fetch_array($query_proveedor)){
                ?>
                    <option value="<?php echo $proveedor['Id_proveedor']; ?>"><?php echo $proveedor['Proveedor']; ?></option>
                <?php
                        }
                    }
                ?>
                </select>
            </div>
            <div class="DescripcionProducto"><input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" class="input-50" required></div>
            <div class="CategoriaProducto"><input type="text" name="categoria" id="categoria" placeholder="Categoria" class="input-50" required></div>
            <div class="CostoProducto"><input type="number" name="costo" id="costo" placeholder="Costo" class="input-50" required></div>
            <div class="StockProducto"><input type="number" name="stock" id="stock" placeholder="Stock" class="input-50" required></div>
            <input type="submit" value="Registrar" class="btn-enviar">                 
        </div> 
    </form>
</body>
</html>