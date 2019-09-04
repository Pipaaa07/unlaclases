<?php

$numero = $_GET["numero"];             
$topetabla= $_GET["tope"];



echo "<h1> tabla de multiplicar del $numero</h1>";

for ($i=0;$i<=$topetabla;$i=$i+1){
	$res = $numero * $i;
	
	if($res%2==0){
		
		echo "<font color = 'red'>";
		
	   }else{
		
		  echo "<font color = 'blue'>";
		
	     }
		 
	echo "$numero * $i=". $res."<br>";
	echo"</font>";
	
	
	
	
}







































?>