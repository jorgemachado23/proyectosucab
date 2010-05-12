<?php 
session_start();

$usuario = $_SESSION["usuario"];
$_SESSION["privilegio"];
$tema = $_GET['tema'];
$cantidad = $_SESSION["cantAlumno"];
$_SESSION["seccion"];

$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
	
$queEmp = "CREATE  TABLE IF NOT EXISTS `TEMPORALALUMNO` (
  `idTemporal` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL ,
  `apellido` VARCHAR(45) NULL ,
  `seccion` VARCHAR(2) NULL ,
  PRIMARY KEY (`idTemporal`) )
ENGINE = InnoDB;";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

$queEmp2 = "TRUNCATE `TEMPORALALUMNO`";
$resEmp2 = mysql_query($queEmp2, $conexion) or die(mysql_error());

?>


<html><!-- InstanceBegin template="/Templates/plantillaAulaVirtual.dwt" codeOutsideHTMLIsLocked="false" -->
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
	<h2><a href="cerrarSesion.php" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px;">Cerrar Sesión >></a></h2>
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
	<h2>Bienvenid@&nbsp;
    	<?php 
				echo $_SESSION["usuario"];
				$usuario = $_SESSION["usuario"];
		?>
        <br>
	    <br>
	</h2>
    
   	 <h2 align="center">Agregar Alumnos</h2>
         <p>&nbsp;</p>
         <div align="center">Ingrese los datos requeridos de cada alumno</div>
         
         <form id="form1" name="form1" method="post" action="" style="font-family:Verdana, Arial, Helvetica, sans-serif">
          <table width="559" height="66" border="0" align="center">
           <?
		   $lis = 1;
		   while ($cantidad <> 0)
		   {
		   echo 
		    "<tr>
			  <td width='3' height='30'>$lis</td>
              <td width='104' height='30'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombres:</td>
              <td width='445'><input name='nombres$lis' type='text' id='nombres$lis' size='50' style='font-family:Verdana, Arial, Helvetica, sans-serif'/></td>
            </tr><tr>
			<td width='3' height='30'></td>
            <td width='104' height='28'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellidos: <p>&nbsp;</p></td>
              <td width='445'><input name='apellidos$lis' type='text' id='apellidos$lis' size='50' style='font-family:Verdana, Arial, Helvetica, sans-serif'/></td>
            </tr>
			"; 
			$lis = $lis + 1;
			$cantidad = $cantidad - 1;
			}
			?>
           
          </table>
          <div align="center"><br />  
              <input type="submit" name="cancelar" id="cancelar" value="Cancelar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
              <input type="submit" name="agregar" id="agregar" value="Agregar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </div>
          <p>&nbsp;</p>
          </form>    
       
<?php  

function getUniqueCode($length = "")
{
$code = md5(uniqid(rand(), true));
if ($length != "") return substr($code, 0, $length);
else return $code;
}

if (isset($_POST["agregar"]))
{
	$falta = 0;
	$cont=1;
	$cant=$_SESSION["cantAlumno"];
	
	while ($cont <= $cant)
	{
		
		$nom = strtoupper($_POST["nombres".$cont]);
		$ape = strtoupper($_POST["apellidos".$cont]);
	
		$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
	
		$apellido = explode(chr(32),$ape);
	
		if (($apellido[0]!="")&&($apellido[1]!=""))
		{
			if ($nom == "")
			{	
				$falta = 1;
				 
				$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
			
				$apellido = $apellido[0]." ".$apellido[1];
				$queEmp = "INSERT INTO `temporalalumno` (`nombre`, `apellido`,`seccion` ) VALUES ('$nom', '$apellido', '$seccion');";
				$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
			
			} 
			else
			{
				$nombre = explode(chr(32),$nom);
		
				$primerNombre= $nombre[0];
				$segundoNombre = $nombre[1];
				$primerApellido = $apellido[0];
				$segundoApellido = $apellido[1];
				$cuenta = $primerNombre."_".$primerApellido;
				$clave = getUniqueCode(5);
		
		
				for ($i = 2; $i <= str_word_count($nom); $i++)
				{
					$segundoNombre = $segundoNombre." ".$nombre[$i];
				} 
			
			$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
		
			$existe= "SELECT p.`idPERSONA` FROM PERSONA p WHERE p.`nombre`='$primerNombre' AND p.`apellido`='$primerApellido' AND p.`segundoNombre`='$segundoNombre' AND p.`segundoApellido`='$segundoApellido'";
			$resEval = mysql_query($existe, $conexion) or die(mysql_error());
			$totEmp = mysql_num_rows($resEval); 
			
			if ($totEmp!=0)
			{
				$falta=1;
				
				$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
			
			
	
				$apellido = $apellido[0]." ".$apellido[1];
				$queEmp = "INSERT INTO `TEMPORALALUMNO` (`nombre`, `apellido`,`seccion` ) VALUES ('$nom', '$apellido', '$seccion');";
				$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
				
			}else
			{
				
				$queExiste = "SELECT p.`cuenta` FROM PERSONA p where p.`cuenta`='$cuenta'";
				$resExiste = mysql_query($queExiste, $conexion) or die(mysql_error());
				$totExiste = mysql_num_rows($resExiste); 
				
				if ($totExiste==0)
				{
				$queEval = "INSERT INTO `PERSONA` (`nombre`, `segundoNombre`, `apellido`, `segundoApellido`, `tipo`, `cuenta`, `clave`, `seccion`, `estado`) VALUES ('$primerNombre', '$segundoNombre', '$primerApellido', '$segundoApellido', 'ALUM', '$cuenta', '$clave', '$_SESSION[seccion]', 'Activo')";
				$resEval = mysql_query($queEval, $conexion) or die(mysql_error());
				}
				else
				{
					$cuenta = $cuenta."_2";
					
				$queEval = "INSERT INTO `PERSONA` (`nombre`, `segundoNombre`, `apellido`, `segundoApellido`, `tipo`, `cuenta`, `clave`, `seccion`, `estado`) VALUES ('$primerNombre', '$segundoNombre', '$primerApellido', '$segundoApellido', 'ALUM', '$cuenta', '$clave', '$_SESSION[seccion]', 'Activo')";
				$resEval = mysql_query($queEval, $conexion) or die(mysql_error());
				}
			}
			
			}/*fin del else del nom == ""*/
		}
		else
		{
			$falta = 1;
			$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
			
			
	
			$apellido = $apellido[0]." ".$apellido[1];
			$queEmp = "INSERT INTO `TEMPORALALUMNO` (`nombre`, `apellido`,`seccion` ) VALUES ('$nom', '$apellido', '$seccion');";
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
		}
	
		$cont = $cont + 1;
	}/*fin del while*/
	
	if ($falta == 0)
{
?>
	<script language="javascript">
		window.alert ( "El alumno ha sido agregado con éxito");
		window.location = "pagPpalAdmin.php";
	</script>
	<?
}else if ($falta == 1)
{
	?>
		<script language="javascript">
			window.alert ( "Hubo errores en la carga de los datos. \n Esto se puede deber a que no ingreso los datos obligatorios o que ingreso un alumno que ya ha sido registrado.");
			window.location = "agregarAlumnoAdmin_3.php";
		</script>		
	<?
}


	
	
}/*fin del if del boton*/



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
