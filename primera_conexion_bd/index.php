<?php

require("conectar.php");

conectarDB();

echo "prueba de conexion"."<br>";

$consulta= "SELECT * FROM clientes";

$resultado=  realizarConsulta($consulta);
















?>

<table border=1>

<tr>
  <td>idclientes</td>
  <td>apellido</td>
  <td>nombre</td>
  <td>mail</td>
  <td>edad</td>
  <td></td>
 </tr> 
<?php

while($cliente = $resultado -> Fetch_assoc()){
echo "<tr>";
echo "<td>". $cliente["id_clientes"]."</td>";
echo "<td>". $cliente["apellido"]."</td>";
echo "<td>". $cliente["nombre"]."</td>";
echo "<td>". $cliente["mail"]."</td>";
echo "<td>". $cliente["edad"]."</td>";
echo "<td> <a href='borrar_cliente.php?id=". $cliente["id_clientes"]."'>BORRAR</a></td>";
echo "</tr>";


/*
echo "<pre>";
print_r($cliente);
echo "</pre>";
*/

//echo "El id de cliente" .$cliente["id_clientes"]." tiene apellido ". $cliente["apellido"]."<br>";


}


cerrarConexion();




?>
</table>