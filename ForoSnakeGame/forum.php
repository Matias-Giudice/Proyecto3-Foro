<!DOCTYPE html>
<html lang="es">
<head>
	<title>SnakeGame Forum | Discussions</title>
  	<meta charset="utf-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style>
    body{
      background-color: #7D3C98;
    }
    .contenedor{
      margin-top: 3%;
      margin-left: 10%;
      margin-right: 40%;
      background-color: #fff;
      padding: 8px;
      border: black 2px solid;
      border-radius: 13px;
    }
    /*.caja{
      border: black 1px solid;
      display: flex-inline;
      justify-content: space-around;
      background-color: #fff;
      margin-top: 3%;
      margin-left: 10%;
      padding: 8px;
      border-radius: 13px;
    }*/
    .caja1{
    	display: flex;
    	justify-content: space-between;
    }
    .caja2{
    	display: flex;
    }
    .caja3{
    	margin-left: 12%;
    }
    .letraazul{
    	color: #2E99FA;
    	margin-left: 20%;
    }
    .tema{
    	font-size: 150%;
    }
    .respuesta{
    	margin-top: 3%;
      	margin-left: 10%;
      	margin-right: 40%;
    	background-color: #fff;
    	border: black 2px solid;
    }
  </style>
</head>
<body>
	<!--<div class="contenedor">-->
		<?php
			include("connect_db.php");
			if(isset($_GET["id"]))
			$id = $_GET['id'];
			$query = "SELECT * FROM  foro WHERE id = '$id' ORDER BY fecha DESC";
			$result = $mysqli->query($query);
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				$id = $row['id'];
				$tema = $row['tema'];
				$autor = $row['autor']; 
				$descripcion = $row['descripcion'];
				$fecha = $row['fecha'];
				$respuestas = $row['respuestas'];

				echo "<div class='contenedor'>";
					echo "<div class='caja1'>";
						echo "<div class='caja2'>";
							echo "<img src='img/person_icon.jpg' height='55px' width='55px'>";
							echo "<p class='letraazul'>$autor</p>";
						echo "</div>";
						echo "<p class='letraazul'>".date("d-m-Y")."</p>";
					echo "</div>";
					echo "<div class='caja3'>";
						echo "<p class='tema'>$tema</p>";
						echo "<p>$descripcion</p>";
					echo "</div>";
					echo "<br/><br/><a href='form.php?id&respuestas=$respuestas&identificador=$id'>Responder</a><br/>";
				echo "</div>";
			}
			
			$query2 = "SELECT * FROM  foro WHERE identificador = '$id' ORDER BY fecha DESC";
			$result2 = $mysqli->query($query2);
			echo "<br/><p class='respuesta'>Answers:</p>";
			while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
				$id = $row['id'];
				$tema = $row['tema'];
				$autor = $row['autor']; 
				$descripcion = $row['descripcion'];
				$fecha = $row['fecha'];
				$respuestas = $row['respuestas'];
				
				echo "<div class='contenedor'>";
					echo "<div class='caja1'>";
						echo "<div class='caja2'>";
							echo "<img src='img/person_icon.jpg' height='55px' width='55px'>";
							echo "<p class='letraazul'>$autor</p>";
						echo "</div>";
						echo "<p class='letraazul'>".date("d-m-Y")."</p>";
					echo "</div>";
					echo "<div class='caja3'>";
						echo "<p class='tema'>$tema</p>";
						echo "<p>$descripcion</p>";
					echo "</div>";
					echo "<br/><br/><a href='form.php?id&respuestas=$respuestas&identificador=$id'>Responder</a><br/>";
				echo "</div>";
			}
		?>
	<!--</div>-->
</body>
</html>