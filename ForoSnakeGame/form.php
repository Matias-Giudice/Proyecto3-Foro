<?php
	if(isset($_GET["respuestas"]))
		$respuestas = $_GET['respuestas'];
	else
		$respuestas = 0;
	if(isset($_GET["identificador"]))
		$identificador = $_GET['identificador'];
	else
		$identificador = 0;
?>
<table>
<form name="form" action="add.php" method="post">
	<input type="hidden" name="identificador" value="<?php echo $identificador;?>">
	<input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
    <tr>
		<td>Autor</td>
		<td><input type="text" name="autor"></td>
    </tr>
    <tr>
      <td>Tema</td>
      <td><input type="text" name="tema"></td>
    </tr>
    <tr>
      <td>Descripcion</td>
      <td><textarea name="descripcion" cols="50" rows="5" required="required"></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" id="submit" name="submit" value="Enviar Mensaje"></td>
    </tr>
  </form>
</table>