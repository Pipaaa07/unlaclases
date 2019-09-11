<?php


$numeros=array();
$cantidades=rand(100,200);



for($i=0;$i<$cantidades;$i=$i+1){
	  
	  $numeros[]=rand(0,99);   // esta es la carga de los numeros
        
	
}
$suma = 0;
$cantidad = 0;



foreach($numeros as $numero){
	echo $numero . "<br>";
	$suma= $suma + $numero;
	$cantidad= $cantidad + 1;
	
	
	
	
	
}
echo "El resultado de la suma es: " .$suma . "<br>";
echo "La cantidad de numeros es: " .$cantidad . "<br>";
echo "El promedio es de: " .$suma / $cantidad;




















































































?>