<?php 
session_start();

$_SESSION['id'];
$idc=$_SESSION['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aula Virtual CSLC</title>
</head>

<body>

<?php 
	$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion); 
	$queEmp = "DELETE FROM COMENTARIOS where `idcomentarios`= '$idc'";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
	?>
	<script> window.alert ( "Ha eliminado el comentario exitosamente" );</script>
	<script> window.location = "gestionarForo.php"; </script>
	<?php

?>


</body>
</html>