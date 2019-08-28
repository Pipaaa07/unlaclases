<?php
      
	  $numeroUno        =$_POST["num1"];
      $numeroDos        =$_POST["num2"];               /*declaras las variables*/
	  $operacion        =$_POST["operacion"];

      echo "<h1>Operaciones</h1>";
      
      /*
	  $suma = $numeroUno + $numeroDos;
      $resta = $numeroUno - $numeroDos;
      $division = $numeroUno / $numeroDos;
	  $producto = $numeroUno * $numeroDos;
	  
	  
	  echo "la suma es $suma<br>"; 
	  echo "la resta es $resta<br>";
	  echo "la division es $division<br>";
	  echo "el producto es $producto<br>"; 

	  */
	  if($operacion=="+"){
		  $resultado = $numeroUno + $numeroDos;
		  
		  
	  }else{
		   if($operacion=="-"){
			   $resultado = $numeroUno - $numeroDos;
			   
		     }else{
				   if($operacion=="*"){
					   $resultado = $numeroUno * $numeroDos;
					   
				     }else{
						  if($operacion =="/"){
							  
							  $resultado = $numeroUno / $numeroDos;
						 
						 
						     }else{
								 
								 $resultado="error";
								 
							     }
						 
						 
						 
						 
					     }
				 
				 
				 
				 
			     }
		  
		  
		  
	        }
	     
	 
	         echo "El resultado es $resultado";















?>