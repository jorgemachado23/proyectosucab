<?php 
session_start();
$_SESSION["idTema"]=$_GET["tema"];
?>

<script>
		var x=window.confirm("¿Está seguro de que desea eliminar el tema?")
		if (x)
		{
			window.location = "borrarTema.php";	
		}
		else
		window.location = "gestionarForo.php";
</script>	