<?php
   
   require ('conectar.php');
   function existeUsuario($user,$pas){
         /*require('consultar.php');
		  consultarDB()
		  $hash=md5($pas);   */
		  $consulta="SELECT *from usuarios 
	     where username:'$user' and password='".md5($pas)."'"; //poniendo el asterisco significa que me traigo todas las tablas dentro de usuario
		 
		 conectarDB();
		 
		 $resultado=realizarConsulta($consulta);
		 if($resultado=num_rows==0)
			  return false;
		  else
			  return true;
		 
		 
		 }
?>		 