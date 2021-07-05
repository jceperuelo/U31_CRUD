<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alta de rubros</title>
</head>
<body>
    <?php
    $mysql=new mysqli ("localhost", "root", "", "tabla_ejemplo");
    if ($mysql->connect_error)
        die ('Problemas con la conexion a la base de datos');

    $mysql->query("insert into articulos(descripcion, precio, codigorubros)
        values '$_REQUEST[descripcion]',$_REQUEST[precio],$_REQUEST[codigorubros])") or
        die(mysql->error);

    echo 'Se cargó el articulo y se generó el código de articulo:';
    echo $mysql->insert_id;
   

    $mysql->close();

    ?>
</body>
</html>