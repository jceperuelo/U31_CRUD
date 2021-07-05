<?php 
     $mysql=new mysqli ("localhost", "root", "", "tabla_ejemplo");
     if ($mysql->connect_error)
         die ('Problemas con la conexion a la base de datos');
 
     $registro=$mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or
         die(mysql->error);

        if ($reg=$registros->fetch_array())
        {      
?>
<form method="post" action="pagina3.php">
Descripción del rubro:
<input type="text" name="descripcion" size="50" value="<?php echo $reg['descripcion'];?>">
<input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo'];?>">
<br>
<input type="submit" value="Confirmar">
</form>
<?php
}
else
    echo 'No existe un rubro con dicho código';

$mysql->close();
?>