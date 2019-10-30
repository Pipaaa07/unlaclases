  <?php if(!array_key_exists("submit", $_POST)){ ?>
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
		}}
	 ?>  