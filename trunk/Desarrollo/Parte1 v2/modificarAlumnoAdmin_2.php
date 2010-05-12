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


	<p>&nbsp;</p>
		 <h2 align="center">Modificar Alumno</h2>
         <p>&nbsp;</p >Modifique los datos que desee y presione el botón aceptar
		 <p>&nbsp;</p>

		  
        </div>
		
      
       
		           
<?
		  
		  $idalumno = $_SESSION["alumno"];
		
        $conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
			
			$queEmp1 = "SELECT p.`nombre`, p.`segundoNombre`, p.`apellido`, p.`segundoApellido`, p.`correo` FROM PERSONA p WHERE p.`idPERSONA`= $idalumno";
			$resEmp1 = mysql_query($queEmp1, $conexion) or die(mysql_error());

			$totEmp1 = mysql_num_rows($resEmp1); 

			if ($totEmp1> 0) {
   				while ($rowEmp1 = mysql_fetch_assoc($resEmp1)){
					$nom1 = $rowEmp1["nombre"];
					$nom2 = $rowEmp1["segundoNombre"];
					$ape1 = $rowEmp1["apellido"];
					$ape2 = $rowEmp1["segundoApellido"];
					$correo = $rowEmp1["correo"];
				}
			}
				?>
               
	<form id="form2" name="form2" method="post" action="">
		   <table width="75%" border="0" align="center">
  <tr>
    <td><span class="style4 style1">Nombre:</span></td>
    <td><input name="nombre" type="text" id="nombre" size="30" value= "<? echo $nom1." ".$nom2; ?>" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
      <span class="style1">*</span></td>
  </tr>
  <tr>
    <td><span class="style4 style1">Apellido:&nbsp;</span></td>
    <td><input name="apellido" type="text" id="apellido" size="30" value= "<? echo $ape1." ".$ape2; ?>" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
      <span class="style1">*</span> &nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style4 style1">Correo:</span></td>
    <td><input name="correo" type="text" id="correo" size="30" value= "<? echo $correo; ?>" style="font-family:Verdana, Arial, Helvetica, sans-serif" /></td>
  </tr>
</table>

                         <span class="style4 style1">&nbsp;</span><span class="style1"><br>
            </span></br></br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style4 style1">&nbsp;&nbsp;</span><span class="style1"></span></br>
            </br>
<div align="center">
              	
                <input type="submit" name="cancelar" id="cancelar" value="Cancelar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
                <input type="submit" name="modificar" id="modificar" value="Modificar" style="font-family:Verdana, Arial, Helvetica, sans-serif" align="middle" />
                
                </div>
                </form>
           
              <p>&nbsp;</p>
            <span class="style1">*</span> <span class="style2 style4 style1">Campos obligatorios</span>

<?php  

if (isset($_POST["modificar"]))
{	
	$nom = strtoupper($_POST["nombre"]);
	$ape = strtoupper($_POST["apellido"]);
	$correo = strtoupper($_POST["correo"]);
	
	$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
	
	$apellido = explode(chr(32),$ape);
	$nombre = explode(chr(32),$nom);
	
	echo $apellido[0];
	if (($apellido[0]!="")&&($apellido[1]!=""))
	{
		if (($nombre[0]=="")||($nombre[1]==""))
		{	
			?>
			<script language="javascript">
				window.alert ( "Debe ingresar los dos nombres del alumno");
			</script>		
			<?			
		} 
		else
		{
			$nombre = explode(chr(32),$nom);
	
			$primerNombre= $nombre[0];
			$segundoNombre = $nombre[1];
			$primerApellido = $apellido[0];
			$segundoApellido = $apellido[1];		
		
			for ($i = 2; $i <= str_word_count($nom); $i++)
			{
				$segundoNombre = $segundoNombre." ".$nombre[$i];
			} 
			
		$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
	
				$idalum = $_SESSION["alumno"];
			
				$queEval = "UPDATE PERSONA SET nombre = '$primerNombre', segundoNombre = '$segundoNombre', apellido = '$primerApellido', segundoApellido = '$segundoApellido', correo = '$correo' WHERE idPERSONA = $idalum";
				$resEval = mysql_query($queEval, $conexion) or die(mysql_error());
				
				?>
				<script language="javascript">
					window.alert ( "El alumno se ha modificado con éxito");
					window.location = "pagPpalAdmin.php";
				</script>		
				<?
			
			
		}/*fin del else del nom == ""*/
	}
	else
	{
		?>
		<script language="javascript">
			window.alert ( "Debe ingresar los dos apellidos del alumno");
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