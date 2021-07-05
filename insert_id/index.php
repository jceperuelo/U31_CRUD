<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alta de artículo</title>
</head>
<body>

<form method="post" action="pagina2.php">
Ingrese descripcion del artículo:
<input type="text" name="descripcion" required>
<br>
<input type="text" name="precio" required>
<br>
Seleccione rubro:
<select name="codigorubro">

<?php
$mysql=new mysqli ("localhost", "root", "", "tabla_ejemplo");
if ($mysql->connect_error)
    die ('Problemas con la conexion a la base de datos');

$registros=$mysql->query("select codigo, descripcion from rubros") or
    die(mysql->error);
while ($reg=$registros->fetch_array())
{
    echo "<option value=\"".$reg['codigo']."\">".$reg['descripcion']."</option>";
}
    
?>

</select>
<br>
<input type="submit" value="confirmar">
</form>
    
</body>
</html>