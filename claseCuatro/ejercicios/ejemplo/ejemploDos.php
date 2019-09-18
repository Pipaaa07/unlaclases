<?php

$personaA = array("nombre" => "Pablo", "apellido" => "maseda", "localidad" => "Lanus");
$personaB = array("nombre" => "jorge", "apellido" => "Perez" , "localidad" => "lomas");

$listapersonas=array();
$listapersonas[]=$personaA;
$listapersonas[]=$personaB;
/*
<table>
    <tr>    //para armar una lista
	   <td>
	   <td>
	   <td>
	</tr>
	


</table>

*/
echo"<table border = 1>";
foreach($listapersonas as $persona){
	echo"<tr>";
	echo"<td>". $persona["nombre"] . "</tal>"; 
	echo"<td>". $persona["apellido"] . "</tal>"; 
	echo"<td>". $persona["localidad"] . "</tal>"; 
	echo"</td>";
	
	
	
}
echo"</table>";







































?>