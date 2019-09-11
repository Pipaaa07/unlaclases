<?php

/* $nombre [0] [2] ---- fila 0, columna 2 ---- arrays.    funcion: sizeof --- cuenta cuantos elementos hay, osea la cantidad de arrays.
                                                                   foreach --- para cada elemento del arrays lo nombra de esta manera:
																   $nombres=arrays();
																   $nombres[]="jorge"; ----- sin subindice, te lo carga igual
																   $nombres[]="raul";

                     0       1        2       3        4    */
$nombres = array("Pablo", "jorge", "Raul", "Pedro", "Fabian");
$cantnombres = sizeof($nombres); 


for($i=0;$i<$cantnombres;$i=$i+1)
{
	


echo "el nombre buscado es: " . $nombres[$i] . "<br>";




}
$nombres[1]="Benito";
$nombres[]="Gonzalo";

foreach($nombres as $nombre)
{
	echo "El nombre buscado es: " . $nombre . "<br>";
	
}	
































?>