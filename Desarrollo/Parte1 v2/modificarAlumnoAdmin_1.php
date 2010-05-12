<?php 
session_start();

$usuario = $_SESSION["usuario"];
$_SESSION["privilegio"];
$tema = $_GET['tema'];
?>


<html><!-- InstanceBegin template="/Templates/plantillaAulaVirtual.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Aula Virtual CSLC</title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
<style type="text/css">
<!--
.style2 {font-size: 12}
-->
</style>
<style type="text/css">
<!--
.style3 {font-size: 14px}
-->
</style>
<!-- InstanceEndEditable -->
<link href="files/style_.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- ImageReady Slices (plantillaAulaVirtual.ai) -->
<table id="Table_01" width="1024" height="1241" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="3">
			<img src="images/plantillaAulaVirtual_01.png" width="1" height="1241" alt=""></td>
		<td colspan="2" align="left" valign="top" background="images/plantillaAulaVirtual_02.png" width="1023" height="393" >
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
	
	  <h2 style="vertical-align:top"><a href="cerrarSesion.php" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px;">Cerrar Sesión >&gt;</a></h2>
	<!-- InstanceEndEditable -->
    </td>
  </tr>
</table>

		</td>
	</tr>
	<tr>
    
		<td align="left" valign="top" width="672" height="807" background="images/plantillaAulaVirtual_03.png">
        
        <table width="100%" border="0">
  <tr>
    <td width="5%"></td>
    <td width="95%"><!-- InstanceBeginEditable name="Contenido" -->
	<br />
<br />

	 <h2>Bienvenid@&nbsp;
	  	    <?php 
				echo $_SESSION["usuario"];
				$usuario = $_SESSION["usuario"];
			?>
          </h2>
	<br />
<br />

 <h2 align="center">Modificar Alumno</h2>
		 <p>&nbsp;</p>
	Seleccione la sección a la cual pertenece el alumno que desea modificar
		  <p>&nbsp;</p>
              
       <form id="form1" name="form1" method="post" action="" style="font-family:Verdana, Arial, Helvetica, sans-serif">
          <div align="center">
            <br />Sección: 
              <select name='select' id='select'>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
              </select>
              
                <br />
                <br />
                <input type="submit" name="buscar" id="buscar" value="Buscar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </div>
        </form> 
        
                    <span class="style1 style2 style3">
                    <?
       
	if (isset($_POST["buscar"]))
	{
	
		$seccion = $_POST["select"];
		$_SESSION["seccion"] = $seccion;
		
		$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
		
		$queEmp = "SELECT e.`idPersona` as iden,e.`nombre` as nom1, e.`segundoNombre` as nom2, e.`apellido` as ape1, e.`segundoApellido` as ape2 FROM PERSONA e WHERE e.`tipo` = 'ALUM' and e.`seccion`='$seccion' and e.`estado` = 'Activo'";
		$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

		$totEmp = mysql_num_rows($resEmp); 
			
		if ($totEmp> 0) {
		
		
		 echo "
		 <br /><br />
		  <form id='form2' name='form2' method='post' action='' style='font-family:Verdana, Arial, Helvetica, sans-serif'>
          <table width='477' border='0' align='center'> 
		  
		  <tr>
		  Seleccione el alumno que desea Modificar
		  <br></br>
		  <td><select name='select2' id='select2'>
              
		  ";
		
   				while ($rowEmp = mysql_fetch_assoc($resEmp)) {	
	
		$iden = $rowEmp["iden"];
		$nombre1 = $rowEmp['nom1'];
		$nombre2 = $rowEmp['nom2'];
		$apellido1 = $rowEmp['ape1'];
		$apellido2 = $rowEmp['ape2'];
		
		$nombre = $nombre1.' '.$nombre2;
		$apellido = $apellido1.' '.$apellido2; 
	
		echo "<option value=".$iden.">".$nombre." ".$apellido."</option>";
	
		
			}
			
			echo "</select></td></tr></table>
          <div align='center'><br />  
              <input type='submit' name='cancelar' id='cancelar' value='Cancelar' style='font-family:Verdana, Arial, Helvetica, sans-serif' />
			  <input type='submit' name='modificar' id='modificar' value='Modificar' style='font-family:Verdana, Arial, Helvetica, sans-serif' />
			  
			  
          </div>
        </form>";
   		}	
	}
	
if (isset($_POST["modificar"]))
{
	$alumno = $_POST["select2"];
	
	$_SESSION["alumno"] = $alumno;
	?>
                    <script language="javascript">
		            </script>
            </span>
            <script language="javascript">  </script>
          <span class="style1">
          <script language="javascript">window.location = "modificarAlumnoAdmin_2.php";
	       </script>		
          <?
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
	            </span><!-- InstanceEndEditable --></td>
  </tr>
</table>

        	</td>
  <td rowspan="2" align="left" valign="top" background="images/plantillaAulaVirtual_04.png" width="351" height="848">
			
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
			<img src="images/plantillaAulaVirtual_05.png" width="672" height="41" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
<!-- InstanceEnd --></html>
