<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:login.php");
}
?>
<html lang="es">
<head>
  <title>SnakeGame Forum | Home</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style>
    body{
      background-color: #7D3C98;
    }
    .contenedor{
      margin-top: 3%;
      margin-left: 20%;
      margin-right: 10%;
      background-color: #fff;
      padding: 3px;
      border-radius: 13px;
    }
    .caja{
      border: black 1px solid;
      display: flex;
      justify-content: space-around;
    }
  </style>
</head>
<body>
  <div class="contenedor">
    <h1>Snake Game Forum</h1>
    <p>We invite you to participate in our forum.</p>
    <div class="caja">
      <?php 
        include("connect_db.php");
        $query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
        $result = $mysqli->query($query);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          $id = $row['id'];
          $tema = $row['tema'];
          $fecha = $row['fecha'];
          $respuestas = $row['respuestas'];
            echo "<img src='img/person_icon.jpg' height='55px' width='55px'>";
            echo "<p><a href='forum.php?id=$id'>ver</a></p>";
            echo "<p>$tema</p>";
            echo "<img src='img/message_icon.png' height='55px' width='55px'>";
            echo "<p>$respuestas</p>";
            echo "<p>".date("d-m-y,$fecha")."</p>";
          }
      ?>
    </div>
    <a href="form.php"> nuevo tema </a>
  </div>
</body>
</html>