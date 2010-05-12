<title>Aula Virtual CSLC</title><?php 
session_start();
$_SESSION["id"]=$_GET["idc"];
?>

<script>
		var x=window.confirm("¿Estás seguro de que desea eliminar el comentario?")
		if (x)
		{
			window.location = "borrarComentarioAlumno.php";	
		}
		else
		window.location = "gestionarForoAlumnos.php";
</script>	