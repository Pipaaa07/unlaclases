<?php
session_start();
if(!isset($_session['usuario'])){
	 header('location:login.php')
	
	
	
     }else{
  		 echo "<a href='logout.php'>Salir</a>";
		 
		 
	     }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>