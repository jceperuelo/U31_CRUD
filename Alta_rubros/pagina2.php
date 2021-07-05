<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alta</title>
</head>
<body>
    <?php
    $mysql=new mysqli ("localhost", "root", "", "rubros");
    if ($mysql->connect_error)
        die ('Problemas con la conexion a la base de datos');

    $mysql->query("insert into rubros(descripcion) values ('$_REQUEST[descripcion]')") or
        die(mysql->error);

    $mysql->close();

    echo 'El nuevo rubro se almacenó';
    ?>
</body>
</html>