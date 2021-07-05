<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificación de rubros</title>
</head>
<body>
    <?php
    $mysql=new mysqli ("localhost", "root", "", "tabla_ejemplo");
    if ($mysql->connect_error)
        die ('Problemas con la conexion a la base de datos');

    $mysql->query("update rubros set descripcion='$_REQUEST[descripcion]'
    where codigo=$_REQUEST[codigo]") or
        die(mysql->error);

    if ($reg=$registros->fetch_array())
        echo 'Se modificó la descripción del rubro';

    $mysql->close();

    ?>
</body>
</html>