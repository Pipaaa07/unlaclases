<?php

$numeros = array (923,250,-13,20,-8,5);
$positivos = array();
$negativos = array();
//$cantidades = sizeof($numeros);      <ul>   <li>    </li>             <ul>



/*
for($i=0;$i<$cantidades;$i=$i+1){    
	$positivos[]=$i;
	$negativos[]=$i;
	
	
}

*/
foreach($numeros as $numero){      //va tomando cada valor que haya en el array, el $numero mira todo lo q hay en orden en el array y luego realiza lo siguiente
     if($numero>=0){
		$positivos[]=$numero;
		
	 
	 }else{
		 
		 $negativos[]=$numero;
		 
          }
}	

echo "<h1>Positivos</h1>";
echo "<ul>";	//tipo de lista

foreach($positivos as $positivo){
	
	
	echo "<li>$positivo</li>";



}	
echo "</ul>";  //cierra el tipo de lista

echo "<h1>Negativos</h1>";
echo "<ul>";
foreach($negativos as $negativo){
	
	
	    echo "<li>$negativo</li>";



      } 	
	
echo "</ul>";	
	
	
	
	



/*
$cantnumeros=count($numeros);
for($i=0;$i<$cantnumeros;$i=$i+1){
	
	if($numeros[$i]>=0)
	  $positivos[]=$numeros[$i];
  
   else
	   $negativos[]=$numeros[$i];
 

	
	
	
}
*/































































?>