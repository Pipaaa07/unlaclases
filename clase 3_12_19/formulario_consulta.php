
  <?php 
  
  
  if(!isset($_POST['submit'])){ //detecta el boton de "consultar"
	  
	  
	  
	  

  

  ?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p><strong><u>Formulario consulta</u></strong></p>
  <p>
    <label for="name">nombre </label><input type="text" name="name" id="name" />
  </p>
  <p>
    <label for="email">email</label>
    <input type="text" name="email" id="email" />
  </p>
  <p>
    <label for="sala">sala</label>
    <select name="sala" id="sala">
      <option value="sala1">sala1</option>
      <option value="sala2">sala2</option>
      <option value="sala3">sala3</option>
      <option value="sala4">sala4</option>
    </select>
    
  </p>
  <p>
    <label for="fecha">fecha</label>
    <input type="date" name="fecha" id="fecha"/>
    
  </p>
  <p>
    <label for="obervaciones">observaciones</label>
    <input type="text" name="obervaciones" id="obervaciones" />
  </p>
  <p>
          <input type="submit" name="submit" id="Consultar" value="Consultar" />
  </p>
</form>
</body>
</html>
  
  <?php 
  
  
  
  }else{
	      $hoy=date("d"); // tal dia del mes querria borrar un archivo, por ej el primer de cada mes, la funcion date cada vez que se ejecute te va a decir que dia del mes es, si coincide con un if, (que si es este dia se borre el archivo) el archivo va a ser borrado.
	      $strfecha= $_POST['fecha'];
		  $tiempo =strtotime($strfecha);
		  $fecha=date("d/m/y",$tiempo );   // para "date" algunas letras significan algo, como y = año etc. || es una funcion que llama a otra funcion, la primera recibe un string y lo convierte a un formato de tiempo, y el otro crea un formato
		  $nombre = $_POST['name'];
		  $email=$_POST['email'];
		  $sala=$_POST['sala'];
		  $obs=$_POST['obervaciones'];
	      echo $fecha."<br>";
		  
		  $tiempo_futuro=strtotime("+7day", $tiempo);
		  echo date("d/m/y", $tiempo_futuro);
		  
		  $salida=fopen("consultas.csv", "a");
		  fputcsv($salida, array("$nombre","$email", "$sala", "$obs"),";");// sirve para escribir en el archivo csv
		  fclose($salida);
		  
		   
          /*$tiempo=strtotime($strfecha);
		  $fecha=date("y-m-d", $tiempo); es lo mismo que arriba pero en 2 pasos, es mas comun encontrarlo como el primer ejemplo.*/ 
	  
	  
	  
	  
       }
  
  
  
     /* $file= "archivo.txt";
	 if(file_exists($file)){
		 unlink($file); sirve para borrar el archivo creado.
		 
		 
	     }  */
  
  
  
  
  
  
?>
	