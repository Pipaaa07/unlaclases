<?php

require("conectar.php");

if(!array_key_exists('id', $_GET)){
	
	echo "Error: ID inexistente";
	exit;
}

$id_borrar=$_GET['id'];


if(!is_int($id_borrar)){
	
	echo "id debe ser entero";
	
	exit();

}










conectarDB();

$consulta= "DELETE FROM CLIENTES WHERE
            id_clientes=". $id_borrar.";";
			
realizarConsulta($consulta);





cerrarConexion();			
			

header("location: index.php");













?>
