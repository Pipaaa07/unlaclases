<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
   <?php 
   if(!array_key_exists("submit", $_POST)){ ?>
         <form action="" method="POST">
         <input name="username" type="text" />
         <input name="password" type="password" required />
         <input name="submit" type="submit" value="entrar" />
             
         </form>
    <?php 
	
   }else{ 
	   require("consultas_Usuarios.php");
      
	   if( array_key_exists('username', $_POST)&& array_key_exists('password', $_POST)){
	    	echo"existen ambos datos <br>";
	        if($_POST['username']=="" or $_POST['password']==""){
				 echo"algun campo vacio";
			}else{
				    //echo"hola".$_POST['username']."tu password es:".md5($_POST['password']);
					$usuario=$_POST['username'];
					$password=$_POST['password'];
					if(esUsuariovalido($usuario,$password)){
						session_start();
						$_SESSION['usuario']=$usuario;
						header('Location:index.php');
						//echo"validacion correta";
					}else{	
						echo"pusiste algun dato mal ";
				//}else{
					//echo"validacion incorrecta";
				}
					
	        }
		}else{
			 echo "datos erroneos o faltantes <br>";	   
		}
	}
	 ?>  
</body>
</html>