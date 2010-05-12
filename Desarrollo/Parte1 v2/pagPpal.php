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
		
		<br />
<br />

	
      
      <table width="99%" border="0">
  <tr>
    <td width="5%">&nbsp;</td>
    <td width="95%">
     <h2>Bienvenid@&nbsp;
	  	    <?php 
				echo $_SESSION["usuario"];
				$usuario = $_SESSION["usuario"];
			?></h2> <br>
<br>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenid@ amiguit@ al sistema de Aula Virtual SAVI, esperamos que disfrutes de todos los servicios que te ofrecemos. Cualquier duda o información adicional que necesites, puedes acudir al módulo de ayuda, donde encontrarás preguntas frecuentes sobre el manejo del sistema.<br />
      <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recuerda repasar todos los días la materia vista en clase. Que tengas un lindo día.
</td>
  </tr>
</table>

    
<?php  
         if (isset($_POST["cerrarSesion"]))
{

	
	
	?>
		<script language="javascript">
			window.location = "cerrarSesion.php";
		</script>
				
	<?
		
}?>
		
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