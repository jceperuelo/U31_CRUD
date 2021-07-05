<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Borrado de un artículo</title>
</head>
<body>
    <?php
    $mysql=new mysqli ("localhost", "root", "", "tabla_ejemplo");
    if ($mysql->connect_error)
        die ('Problemas con la conexion a la base de datos');

    $mysql->query("delete from articulos where codigo=$_REQUEST[codigo]") or
        die(mysql->error);

    if ($mysql->affected_rows==1)
        echo 'Se elimino el articulo';
    else
        echo 'No existe un articulo con dicho código';

    $mysql->close();

    ?>
</body>
</html>