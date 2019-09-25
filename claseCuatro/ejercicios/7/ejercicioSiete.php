<?php


$numeros=array(25,30,-1,2,-50,20);
$mayor=$numeros[0]; // le asigno uno de los valores, osea la posicion 0 (25)
$menor=$numeros[0];

foreach($numeros as $numero){
	if($numero>$mayor){
		$mayor=$numero;
		
	}
	if($numero<$menor){
		$menor=$numero;
	
	
	}
	
}
echo "El mayor numero es:  $mayor  <br>";
echo "El menor numero es:  $menor  <br>";




// max($numeros) ----> para comparar el numero maximo con otro, calcula el maximo entre todos los elementos



































?>