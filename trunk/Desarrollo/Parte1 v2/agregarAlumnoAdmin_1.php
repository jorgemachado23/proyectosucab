<?php 
session_start();

$usuario = $_SESSION["usuario"];
$_SESSION["privilegio"];
$tema = $_GET['tema'];
$_SESSION["cantAlumno"];
$_SESSION["seccion"];



?>


<html><!-- InstanceBegin template="/Templates/plantillaAulaVirtual.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Aula Virtual CSLC</title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="head" -->
<link href="files/style_.css" rel="stylesheet" type="text/css">
<!-- InstanceEndEditable -->
<link href="files/style_.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- ImageReady Slices (plantillaAulaVirtual.ai) -->
<table id="Table_01" width="1024" height="1241" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="3">
			<img src="../deskspace/images/plantillaAulaVirtual_01.png" width="1" height="1241" alt=""></td>
		<td colspan="2" align="left" valign="top" background="../deskspace/images/plantillaAulaVirtual_02.png" width="1023" height="393" >
        <table width="75%" height="100%" border="0">
  <tr>
    <td width="11%" height="357">&nbsp;</td>
    <td width="89%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <!--Cerrar Sesion-->
     <!-- InstanceBeginEditable name="Cerrar Sesion" -->		  
    <h2><a href="cerrarSesion.php" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px;">Cerrar Sesión >></a></h2>
<!-- InstanceEndEditable -->
    </td>
  </tr>
</table>

		</td>
	</tr>
	<tr>
    
		<td align="left" valign="top" width="672" height="807" background="../deskspace/images/plantillaAulaVirtual_03.png">
        
        <table width="100%" border="0">
  <tr>
    <td width="5%"></td>
    <td width="95%"><!-- InstanceBeginEditable name="Contenido" -->
	<h2>Bienvenid@&nbsp;
    	<?php 
				echo $_SESSION["usuario"];
				$usuario = $_SESSION["usuario"];
		?>
    </h2>
    
    <p>&nbsp;</p>
		 <h2 align="center">Agregar Alumnos<br>
		   <br>
		 </h2>
         Ingrese la cantidad de alumnos que desea cargar y la sección a la cual corresponden
		   
       
       <form id="form1" name="form1" method="post" action="">
<table width="489" height="66" border="0" align="center">
            <tr>
              <td width="148" height="27"><span class="style3">Sección:</span></td>
              <td width="401"><label>
				  <select name="seccion" id="seccion" style="font-family:Verdana, Arial, Helvetica, sans-serif">
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
				  </select>
				</label></td>
            </tr>
            <td width="148" height="31"><p>
  							<span class="style3">Cantidad de alumnos:</span>  
				</p></td>
              <td width="401"><input name="cantAlumnos" type="text" id="cantAlumnos" size="10" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
				<br /></td>
            <tr>
            </tr>
           
          </table>
   
  <p align="center">
    <input type="submit" name="cancelar" id="cancelar" value="Cancelar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
    <input type="submit" name="button" id="button" value="Continuar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
    </p>
</form>

<?php  

if (isset($_POST["button"]))
{
	
	$sec = $_POST["seccion"];
	$cant = $_POST["cantAlumnos"];
	
	$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
	
	if ($cant == "")
	{
			?>
		<script language="javascript">
			window.alert ( "Debe ingresar la cantidad de alumnos correspondiente" );
		</script>		
			<?	
		
	} else
	{
		$_SESSION["cantAlumno"] = $cant;
		$_SESSION["seccion"] = $sec;
		?>
		<script language="javascript">
			window.location = "agregarAlumnoAdmin_2.php";
		</script>		
			<?	
	}
}

if (isset($_POST["cancelar"]))
{
	?>
	<script language="javascript">
		window.location = "pagPpalAdmin.php";
	</script>		
	<?
}

?>
	<!-- InstanceEndEditable --></td>
  </tr>
</table>

        	</td>
  <td rowspan="2" align="left" valign="top" background="../deskspace/images/plantillaAulaVirtual_04.png" width="351" height="848">
			
			<table id="sidebar" width="354" border="0">
              <tr>
                <td>
                <ul class="categorytext">
        <li>
          
          <ul>
            <li><a href="agregarAlumnoAdmin_1.php">Agregar Alumnos</a> </li>
            <li><a href="modificarAlumnoAdmin_1.php">Modificar Alumno</a> </li>
            <li><a href="inhabilitarAlumnoAdmin_1.php">Inhabilitar Alumno</a> </li>
            <li><a href="eliminarAlumnoAdmin_1.php">Eliminar Alumnos</a> </li>
          </ul>
        </li>
      </ul>
                
                </td>
                
              </tr>
              <tr>
                <td>
                
                <ul class="categorytext">
        <li>
          
          <ul>
            <li><a href="agregarExamenAdmin_1.php">Agregar Examen Virtual</a> </li>
            <li><a href="modificarExamenAdmin_1.php">Modificar Examen Virtual</a> </li>
            <li><a href="eliminarExamenAdmin_1.php">Eliminar Examen Virtual</a> </li>
          </ul>
        </li>
      </ul>
                
                </td>
               
              </tr>
              <tr>
                <td>
                
                
          <ul class="categorytext">
        <li>
          
          <ul>
<li><a href="agregarEvaluacionAdmin.php">Agregar Evaluación</a></li>
          <li><a href="modificarEvaluacionAdmin.php">Modificar Evaluación</a></li>
          <li><a href="eliminarEvaluacionAdmin.php">Eliminar Evaluación</a></li>
          <li><a href="cargarNotasAdmin.php">Cargar Notas</a></li>
          <li><a href="consultarNotasAdmin.php">Consultar Notas</a></li>
          <li><a href="modificarNotasAdmin.php">Modificar Notas</a></li>
          </ul>
        </li>
      </ul>
          
                
                </td>
              
              </tr>
              <tr>
                <td>
                
          <ul class="categorytext">
        <li>
          
          <ul>
			<li><a href="gestionarForo.php">Ver Foro</a></li>
    	   <li><a href="crearTema.php">Crear un tema</a></li>
           <li><a href="borrarContenidoForo.php">Borrar Foro</a></li>
          </ul>
        </li>
      </ul>
          
                
                
                </td>
              
              </tr>
            </table></td>
	</tr>
	<tr>
		<td>
			<img src="../deskspace/images/plantillaAulaVirtual_05.png" width="672" height="41" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
<!-- InstanceEnd --></html>
