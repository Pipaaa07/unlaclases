<?php
   function existeUsuario($user,$pas){
         require('consultar.php');
		  consultarDB()
		  $hash=md5($pas);   
		  $consulta="SELECT *from usuarios
	     where username:'$_user' and password='$hash'  ";
		 
		 
		 $resultado=realizarConsulta($consulta)
		 if($resultado=num_md5==1)
			  return true;
		  else
			  return false;
		 
		 
		 }
?>		 