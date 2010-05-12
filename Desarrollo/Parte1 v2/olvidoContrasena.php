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
	<table width="99%" border="0">
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="90%">
    
    <h2 align="center">¿Olvido su Usuario o Contraseña?</h2>
    <br>
<br>
    Su nombre de Usuario y Contraseña seran enviados a la dirección de correo electrónico secundaria que facilitó cuando ingreso por primera vez al sistema.
       
        <br>
        <br>
        <form id="form2" name="form2" method="post" action="">
          <p><span class="style1" style="font-family:Verdana, Arial, Helvetica, sans-serif">Correo alterno:</span> 
            <input name="correo" type="text" id="correo" size="50" style="font-family:Verdana, Arial, Helvetica, sans-serif" /> 
            <input type="submit" name="button" id="button" value="Enviar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </p>
          </form>
        
        
         
<?php 


if (isset($_POST["button"]))
{
	$cor = $_POST["correo"];
	if ($cor <> "")
	{
	
	$correo = strtoupper($_POST["correo"]);	
	
$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
	mysql_select_db("cole9858_aulavirtual", $conexion);  
	
	$queEmp = "SELECT p.`correo` as correo,p.`clave` as clave FROM PERSONA p WHERE p.`correo` = '$correo'";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

	$totEmp = mysql_num_rows($resEmp); 
	
	
	if ($totEmp> 0) {
   		while ($rowEmp = mysql_fetch_assoc($resEmp)) {
     		
			$cuerpo="La clave es: ".$rowEmp['clave'];
			
			
			?>
				<script language="javascript">
					window.location = "inicioSesion.php";
					window.alert("Su contraseña ha sido enviada al correo alterno.");
				</script>
				
				
			<?
			
			if(mail("anampardo@gmail.com","Contrasena",$cuerpo))
			
			{
				?>
				<script language="javascript">
					window.location = "inicioSesion.php";
					window.alert("Su contraseña ha sido enviada al correo alterno.");
				</script>
				
				
				<?
			
			}
			 		
   }
} else 
   			{	?>
				<script language="javascript">
					window.alert("El correo no esta registrado.");
				</script>
				
				
				<? }
	} else
	{
	?>
	<script language="javascript">
		window.alert("Debe ingresar el correo.");
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