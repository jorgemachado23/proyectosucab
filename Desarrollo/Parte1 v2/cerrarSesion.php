<?php 
session_start();

$_SESSION["usuario"];
$_SESSION["privilegio"];




$_SESSION["usuario"] = "";
$_SESSION["privilegio"]="";

?>

<script language="javascript">
	window.location = "inicioSesion.php";
</script>
