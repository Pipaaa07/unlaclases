<?php

$palos=array("oro","copas","espadas","bastos");
$numeros=range(1,12);
$cartas=array();

foreach($palos as $palo){     //ejecuta primero el array de los palos
	
   foreach($numeros as $numero){  // despues ejecuta el numero que va con el palo y vuelve a hacer la vuelta desde el array palos
	   
       $cartas[]="$numero de $palo";
	   
	   
	   
	   
     }


}
shuffle($cartas); //mezcla lo que hay dentro del array
echo "<pre>";
print_r($cartas);
echo"</php>";


















































?>