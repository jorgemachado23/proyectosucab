<title>Aula Virtual CSLC</title><?php 
session_start();
$_SESSION["id"]=$_GET["idc"];
?>

<script>
		var x=window.confirm("¿Está seguro de que desea eliminar el comentario?")
		if (x)
		{
			window.location = "borrarComentario.php";	
		}
		else
		window.location = "gestionarForo.php";
</script>	