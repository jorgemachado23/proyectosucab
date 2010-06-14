<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aula Virtual</title>
</head>

<body>

<?php 

	$conexion = mysql_connect("127.0.0.1", "root", "12345");
	mysql_select_db("metodologia", $conexion);
	$queEmp = "DELETE FROM metodologia.comentarios";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
	$queEmp = "DELETE FROM metodologia.tema";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
	?>
	<script> window.alert ( "Ha eliminado el tema exitosamente" ); </script>
	<script> window.location = "gestionarForo.php"; </script>
	<?php

?>


</body>
</html>
