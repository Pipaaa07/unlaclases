  <?php
  
  /* if(!array_key_exists("submit", $_POST)){ ?>
         <form action="" method="POST">
         <input name="username" type="text" />
         <input name="password" type="password" />
         <input name="submit" type="submit" value="entrar" />
         </form>
    <?php 
   }else{
	   if( array_key_exists('username', $_POST)&& array_key_exists('password', $_POST)){
	    	 echo"existen ambos datos <br>";
	         if($_POST['username']=="" or $_POST['password']==""){
				 echo"algun campo vacio";
			 }else{
				 echo"hola".$_POST['username']."tu password es:".md5($_POST[password]);
			 }
			 }else{
	    		echo"faltan datos";
		}}*/
	
// Validar login
require('validar_login.php');

//Conectar

require('conectar.php');
conectarDB()                                                                  //="SELECT apUsuario as apellido, nombUsuario as nombre from USUARIOS;";
 //Hacer la consulta con SELECT, para pedir datos siempre se usa SELECT     //el ";" dentro de las comillas sirve para que se ejecute en el string
$consulta="SELECT from USUARIOS;"; //sirve para cambiar el nombre de una columna sin la necesidad de tocar la base de datos, osea solo en el codigo
$resultado= realizarConsulta($consulta);

//recorrer datos y darle formato
while($usuario=$resultado->fetch_assoc()){ //el fetch va a devolver valores hasta que no alla mas y de false
	
	echo $usuario['apellido']. ",". $usuario['nombre']; //---> por cada fila 
}

//1 while por tabla




//cerrar la conexion
cerrarConexion();




































	?>  
	 