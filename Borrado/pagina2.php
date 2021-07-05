<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Borrado</title>
</head>
<body>
    <?php
    $mysql=new mysqli ("localhost", "root", "", "tabla_ejemplo");
    if ($mysql->connect_error)
        die ('Problemas con la conexion a la base de datos');

    $mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or
        die(mysql->error);

    if ($reg=$registros->fetch_array())
        echo 'La descripción del rubro que se eliminó es:' .$reg['descripcion'];
    else 'No existe un rubro con dicho código';

    $mysql->close();

    ?>
</body>
</html>