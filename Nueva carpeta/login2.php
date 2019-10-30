<?php

require('funciones.php');

if($_POST['username']=="" or $_POST['password']==""){
			





				 
				 }else{
					 $usuario=$_POST['username'];
					 $password=$_POST['password'];
					 if(existeUsuario($user, $pas)){
						 
						 seccion_start();
						 $_SECCION['usuario']=$usuario;
						 header('location:index.php'); //el header significa que lo manda a otro lado
						 
						 }else{
							 echo "pusiste algun dato mal";
							 
							 
						     } 

				 }

































?>