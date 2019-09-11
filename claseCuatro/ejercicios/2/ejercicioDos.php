<?php


$numeros=array();



for($i=0;$i<100;$i=$i+1){
	  
	  $numeros[]=rand(0,99);   // esta es la carga de los numeros
        
	
}
$suma = 0;
$cantidad = 0;
foreach($numeros as $numero){
	echo $numero . "<br>";
	$suma= $suma + $numero;
	$cantidad = $cantidad + 1;
	
	
	
}
echo "El resultado de la suma es: " .$suma . "<br>";
echo "La cantidad de numeros es: " .$cantidad;




















































































?>