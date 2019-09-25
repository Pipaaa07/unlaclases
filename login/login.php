<?php
// $usuarios=array("pipaaa07" => "user1", "agustin722" => "user2", "themegabart" => "user3");

$usuarios=array("user1" => array("password" => "123456",
                                "perfil" => "admin" ) ,
				"user2" => array("password" => "789456",
				                  "perfil" => "user")				
								);
/*
$usuario=$_POST["usuario"];
$password=$_POST["password"];

if(array_key_exists($usuario, $usuarios)){	//me va a decir si existe o no el usuario
       $pass_guardada=$usuarios[$usuario];
	   if($password==$pass_guardada){
		   echo "Accediste correctamente";
		   
		   
		   
	   }else{
		   echo "Password invalida";
		   
		   
	   }
	   
	  





    }else{
		echo "Usuario inexistente <br>";
		
	}
 */


$usuario=$_POST["usuario"];
$password=$_POST["password"];

if(array_key_exists($usuario, $usuarios)){	

       $usuario_accediendo=$usuarios[$usuario];
	   
	   if($password == $usuario_accediendo["password"]){
		   
		   saludar_usuario($usuario_accediendo);
		   
		   
	   }else{
		   
		   echo "Password invalida";
		   
		   
	   }
	   
	  





    }else{
		echo "Usuario inexistente <br>";
		
	}









function saludar_usuario($usuario){
		   
	  
		   
		   $perfil_guardado=$usuario["perfil"];
		   
		   if($perfil_guardado=="admin"){
			   echo "Hola señor ADMIN";
			   
			   
		   }else if ($perfil_guardado=="user"){
			   echo "Hola Usuario";
			   
		   }
		   
	   



}








?>