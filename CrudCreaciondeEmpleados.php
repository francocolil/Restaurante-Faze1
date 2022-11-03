<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'db.php';
        $sql="SELECT * FROM usuarios";
        $resultado=mysql_query($sql);?>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Clave</th>
                    <th>ID_cargo</th>
                    <th>Rut</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tebody>
                <?php while ($filas=mysql_fetch_assoc($resultado)){ 
                    ?>
                <tr>
                    <td><?php echo $filas['Id'] ?></td>
                    <td><?php echo $filas['Nombre'] ?></td>
                    <td><?php echo $filas['Apellido'] ?></td>
                    <td><?php echo $filas['Correo'] ?></td>
                    <td><?php echo $filas['Clave'] ?></td>
                    <td><?php echo $filas['ID_cargo'] ?></td>
                    <td><?php echo $filas['Rut'] ?></td>
                    <td><?php echo $filas['Telefono'] ?></td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tebody>
        </table>
    </div>
</body>
</html>