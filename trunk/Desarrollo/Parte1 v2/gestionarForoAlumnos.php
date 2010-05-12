<?php 
session_start();

$usuario = $_SESSION["usuario"];
$_SESSION["privilegio"];
$tema = $_GET['tema'];
?>

<html><!-- InstanceBegin template="/Templates/plantillaAlumno.dwt" codeOutsideHTMLIsLocked="false" -->
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
			<img src="images/plantillaAlumnos_01.png" width="1" height="1241" alt=""></td>
		<td colspan="2" align="left" valign="top" background="images/plantillaAlumnos_02.png" width="1023" height="393">
		<table width="75%" height="100%" border="0">
  <tr>
    <td width="4%" height="351">&nbsp;</td>
    <td width="96%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><!-- InstanceBeginEditable name="CerrarSesion" -->
		   <h2 style="vertical-align:top"><a href="cerrarSesion.php" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px;">Cerrar Sesión >&gt;</a></h2>
	
	<!-- InstanceEndEditable --></td>
  </tr>
</table>

        
        </td>
	</tr>
	<tr>
		<td align="left" valign="top" background="images/plantillaAlumnos_03.png" width="672" height="807" ><!-- InstanceBeginEditable name="Contenido" -->
		
		<table width="99%" border="0">
  <tr>
    <td width="7%">&nbsp;</td>
    <td width="93%">
    
    <br />
<br />

	 <h2>Bienvenid@&nbsp;
	  	    <?php 
				echo $_SESSION["usuario"];
				$usuario = $_SESSION["usuario"];
			?>
            <br>
	        <br>
	 </h2>

		<h2 align="center">Foro de Discusión</h2><br />
		<h2 align="center">Temas:</h2>
 
 				   <?php 
	 		    $conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
	   			$queEmp = "SELECT p.`nombre`,p.`fecha`,p.`descripcion`,p.`idtema` FROM TEMA p";
				$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
				$totEmp = mysql_num_rows($resEmp); 
				if ($totEmp> 0) {
				
					while ($rowEmp = mysql_fetch_assoc($resEmp)) {
				echo "<table BORDER=2 bordercolor='#999999' RULES=NONE FRAME=BOX style='width:508px'>";
			 	echo "<tr bordercolor='#FFFFFF'><td style='width:78%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href='mostrarComentariosAlumnos.php?tema=".$rowEmp['nombre']."' style='color:#666666; font-style:italic; font-size:14px;font-family:Verdana, Arial, Helvetica, sans-serif' >".$rowEmp ['nombre']."</a></strong><br />";
						
				echo "<p style='font-size:20; font-style:italic;font-family:Verdana, Arial, Helvetica, sans-serif' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha:&nbsp;".$rowEmp ['fecha']."</p>";
				echo "<p style='font-size:20; font-style:italic;font-family:Verdana, Arial, Helvetica, sans-serif' class='entry-content' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descripción: ".$rowEmp ['descripcion']."</p></td>
				
				</tr><br />";
				echo "</table>";
					}
				}	
		?>

    
    
    </td>
  </tr>
</table>

		
		<!-- InstanceEndEditable -->        </td>
  <td rowspan="2" align="left" valign="top" background="images/plantillaAlumnos_04.png" width="351" height="848">
	<table width="86%" height="231" border="0">
  <tr>
    
    <td width="97%" height="130"> 
    <ul class="categorytext">
        <li>
          
          <ul>
            <li><a href="gestionarForoAlumnos.php">Ver Tema</a> </li>
          </ul>
        </li>
      </ul></td>
  </tr>
  <tr>
    
    <td>
     <ul class="categorytext">
        <li>
          
          <ul>
            <li><a href="responderExamen.php">Responder Exámen</a></li>
          </ul>
        </li>
      </ul>
    
    </td>
  </tr>
</table>
		
  </td>
	</tr>
	<tr>
		<td>
			<img src="images/plantillaAlumnos_05.png" width="672" height="41" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
<!-- InstanceEnd --></html>