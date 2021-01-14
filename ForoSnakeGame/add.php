<?php
	include("connect_db.php");
	
	if(isset($_POST["submit"])){
		if(!empty($_POST['descripcion'])){
			$autor=$_POST['autor'];
			$tema=$_POST['tema'];
			$descripcion=$_POST['descripcion'];
			$respuestas=$_POST['respuestas'];
			$identificador=$_POST['identificador'];
			$fecha = date("d-m-Y");
			
			
			//Evitamos que el usuario ingrese HTML
			$descripcion = htmlentities($descripcion);
			echo "identificador:";
			echo $identificador;
			
			//Grabamos el mensaje en la base de datos. //cambiar
			$query = "INSERT INTO foro (autor, tema, descripcion, identificador, fecha, ult_respuesta) VALUES ('$autor', '$tema', '$descripcion', '$identificador','$fecha','$fecha')";
			
			echo $query;
			echo "identificador:";
			echo $identificador;
			$result = $mysqli->query($query);
			
			/* si es un mensaje en respuesta a otro actualizamos los datos */
			if ($identificador != 0)
			{
				$query2 = "UPDATE foro SET respuestas=respuestas+1 WHERE id='$identificador'";
				$result2 = $mysqli->query($query2);
				echo $query2;
				Header("Location: forum.php?id=$identificador");
				exit();
			}
			Header("Location: index.php");
		}
	}
?>