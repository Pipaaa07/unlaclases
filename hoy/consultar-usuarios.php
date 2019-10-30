<?PHP

	require('conectar.php');
	
	function existeUsuario($user, $passwd){
		
		conectarDB();
		$hash = md5($passwd);
		$consulta = "SELECT * FROM Usuarios WHERE username = '$user' AND passwd = '$hash'";
		
		$resultado = realizarConsulta($consulta);
		
		if($resultado -> num_rows == 0){
			return false;
		}else{
			return true;
		}
	}

?>