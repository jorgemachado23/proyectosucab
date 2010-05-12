<script>
		var x=window.confirm("¿Está seguro de que desea eliminar todo el contenido del foro?")
		if (x)
		{
			window.location = "borrarForo.php";	
		}
		else
		window.location = "gestionarForo.php";
</script>