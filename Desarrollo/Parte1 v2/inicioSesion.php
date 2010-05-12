<?php 
session_start();

$_SESSION["usuario"];
$_SESSION["privilegio"];
?>

<html><!-- InstanceBegin template="/Templates/PlantillaInicio.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Aula Virtual CSLC</title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<link href="files/style_.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (plantillaAulaVirtual.ai) -->
<table id="Table_01" width="1024" height="1241" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="3">
			<img src="images/plantillaIniciSesion_01.png" width="1" height="1241" alt=""></td>
		<td colspan="2" align="left" valign="top">
			<img src="images/plantillaIniciSesion_02.png" width="1023" height="393" alt=""></td>
	</tr>
	<tr>
		<td align="left" valign="top" background="images/plantillaIniciSesion_03.png" width="672" height="807"><!-- InstanceBeginEditable name="Contenido" -->
		<table width="92%" border="0">
  <tr>
    <td width="7%">&nbsp;</td>
    <td width="93%">  <h2 align="center">Bienvenido al Sistema de Aula Virtual</h2>
    <br>
<br>
    	   Para ingresar al sistema introduzca su usuario y contraseña y haga clic en el botón "Iniciar Sesión" que aparece a continuación.
        <form id="form1" name="form1" method="post" action="" style="font-family:Verdana, Arial, Helvetica, sans-serif">
          <table width="500" border="0" style="font-family:Verdana, Arial, Helvetica, sans-serif">
            <tr>
              <td width="151">Nombre de Usuario:</td>
              <td><input name="nombreUsuario" type="text" id="nombreUsuario" size="50" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></td>
            </tr>
            <tr>
              <td>Contraseña</td>
              <td><input type="password" name="clave" id="clave" size="50" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></td>
            </tr>
          </table>
          <div align="center">
            <p>
              <input type="submit" name="inicioSesion" id="inicioSesion" value="Iniciar Sesión" style="font-family:Verdana, Arial, Helvetica, sans-serif"/>
            </p>
            <p><a href="olvidoContrasena.php">¿Olvido su contraseña?</a></p>
          </div>
        </form> 
         
<?php 

if (isset($_POST["inicioSesion"]))
{

	$nombreUsuario = strtoupper($_POST["nombreUsuario"]);
	$clave = strtoupper($_POST["clave"]);
	
	$_SESSION["usuario"] = $nombreUsuario;
	$_SESSION["privilegio"] = $clave;

	
	$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
	
	$queEmp = "SELECT p.`clave` as clave, p.`tipo` as tipo FROM PERSONA p WHERE p.`cuenta` = '$nombreUsuario'";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

	$totEmp = mysql_num_rows($resEmp); 
	
	
	if ($totEmp> 0) 
	{
   		while ($rowEmp = mysql_fetch_assoc($resEmp)) 
		{
			if ($clave == $rowEmp['clave'])
			{
				if ($rowEmp['tipo']== "ADMIN")
				{
				?>
				<script language="javascript">
					window.location = "pagPpalAdmin.php";
				</script>
				
				<? }
				else if ($rowEmp['tipo']== "ALUM")
				{
				?>
				<script language="javascript">
					window.location = "pagPpal.php";
				</script>
				
				<? 
				
				}
			}else
			{
				?>
					<script language="javascript">
						window.alert("La contraseña no es correcta. Verifique los datos o \n comuniquese con el administrador");
					</script>
				<? 
			}		
   		}
	} else 
	{
		?>
			<script language="javascript">
				window.alert("El nombre de usuario no existe. Verifique los datos o \n comuniquese con el administrador");
			</script>
		<? 
	}
}

?>      

</td>
  </tr>
</table>

		
		
		<!-- InstanceEndEditable -->		</td>
  <td rowspan="2" align="left" valign="top">
			<img src="images/plantillaIniciSesion_04.png" width="351" height="848" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/plantillaIniciSesion_05.png" width="672" height="41" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
<!-- InstanceEnd --></html>