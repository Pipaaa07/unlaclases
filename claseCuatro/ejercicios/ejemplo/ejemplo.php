<?php

$persona=array("nombre" => "pablo", "apellido" => "maseda", "localidad" => "lanus");
$persona["documento"] = "33.333.333"; // si quiro agregar algo mas al array sin modificar lo anterior

echo "<h1>Los datos de la Persona</h1>";
foreach($persona as $clave=>$valor){
	// echo "$clave: $valor <br>";  //tambien se puede: 
	echo strtoupper($clave). "=";  //devuelve con mayuscula el String
	// echo $valor. "<br>";
	echo ucfirst(strtolower($valor)). "<br>"; // Hace que la primer letra del string sea mayuscula y lo demas en minuscula, sin importar como este escrito en el array
	
	
   }















































?>