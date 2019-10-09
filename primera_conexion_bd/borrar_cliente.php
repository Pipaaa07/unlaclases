<?php

require("conectar.php");
$id_borrar=$_GET["id"];
conectarDB();

$consulta= "DELETE FROM CLIENTES WHERE
            id_clientes=". $id_borrar.";";
			
realizarConsulta($consulta);

cerrarConexion();			
			

header("location: index.php");













?>
