<?php
require('conectar.php');

  function esUsuariovalido($usuario , $password){
	 $consulta="SELECT* from usuarios where username='".$usuario."' AND password='". md5($password)."' ";
	 //echo $consulta;
	conectarDB();
	$resultado= realizarConsulta($consulta);
	if ($resultado->num_rows==0){
		return false;
	}else{
		 return true;
	}
  }	  
?>