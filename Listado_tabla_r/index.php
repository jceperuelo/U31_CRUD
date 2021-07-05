<?php 
     $mysql=new mysqli ("localhost", "root", "", "tabla_ejemplo");
     if ($mysql->connect_error)
         die ('Problemas con la conexion a la base de datos');
 
     $mysql->query("insert into rubros(descripcion) values ('$_REQUEST[descripcion]')") or
         die(mysql->error);

        echo '<table class="tablalistado">';
        echo '<tr><th>Código</th><th>Desccripción</th></tr>';
        while ($reg=$registros->fetch_array())
        {
            echo '<tr>';
            echo '<td>';
            echo $reg['codigo'];
            echo '</td>';
            echo '<td>';
            echo $reg['descripcion'];
            echo '</td>';
            echo '<td>'; 
        }
        echo '</table>';
 
     $mysql->close();
        
?>