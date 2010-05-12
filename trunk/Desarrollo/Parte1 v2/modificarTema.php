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
    <td width="95%"><!-- InstanceBeginEditable name="Contenido" --><br />
<br />

	 <h2>Bienvenid@&nbsp;
	  	    <?php 
				echo $_SESSION["usuario"];
				$usuario = $_SESSION["usuario"];
			?>
          </h2>
	<br />
<br />

 <h2 align="center">Modificar Tema de Discusión</h2>
          

 
		
		<?php 
		
		$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
		$id= "SELECT p.`idtema`,p.`nombre`,p.`descripcion` FROM TEMA p WHERE p.`idtema`='$tema'";
		$resEmp2 = mysql_query($id, $conexion) or die(mysql_error());
		$totEmp2 = mysql_num_rows($resEmp2); 
								
								if ($totEmp2>0){
									while ($rowEmp2 = mysql_fetch_assoc($resEmp2)){
									$nombreTema= $rowEmp2['nombre'];
									$descripcionTema = $rowEmp2['descripcion'];
									$id =  $rowEmp2['idtema']; 
									
									}
								}
		
		?>
		<form name="form1" action="" method="post">
		<table width="477" border="0" align="center">
            <tr>
              <td width="75">Nombre:</td>
              <td width="392"><input name="nombreTema" type="text" id="nombreTema" size="60" value="<?php echo $nombreTema ?>" style="font-family:Verdana, Arial, Helvetica, sans-serif" /></td>
            </tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			
              <td height="82">Descripción: </td>
              <td><textarea name="descripcion" cols="50" rows="4" id="descripcion" style="font-family:Verdana, Arial, Helvetica, sans-serif"><?php echo $descripcionTema ?></textarea></td>
              <td width="163">(opcional)</td>
            </tr>
            <tr>
            </tr>
           
          </table>
		  
		   <div align="center"><br /> 
           	  <input type="submit" name="cancelar" id="cancelar" value="Cancelar" style="font-family:Verdana, Arial, Helvetica, sans-serif" /> 
              <input type="submit" name="modificar" id="modificar" value="Modificar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </div>
        </form> 
		
		
       <?php  
         if (isset($_POST["cerrarSesion"]))
{

	
	
	?>
		<script language="javascript">
			window.location = "cerrarSesion.php";
		</script>
				
	<?
}
	
	if (isset($_POST["modificar"]))
{
	
	$nombre = $_POST["nombreTema"];
	$descripcion = $_POST["descripcion"];
	
	$conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
mysql_select_db("cole9858_aulavirtual", $conexion);  
	
	if ($nombre == "")
	{
			?>
		<script language="javascript">
			window.alert ( "Debe ingresar el nombre del tema" );
		</script>		
			<?	
		
	} else
	{
	
		$fecha= date("Y-m-d");
		$existe= "SELECT `idTEMA` FROM TEMA WHERE `nombre`='$nombre'";
		$resEval = mysql_query($existe, $conexion) or die(mysql_error());
		$totEmp = mysql_num_rows($resEval); 
		
		$queEval = "Update TEMA set nombre ='$nombre',descripcion='$descripcion' where idtema ='$id';";
		$resEval = mysql_query($queEval, $conexion) or die(mysql_error());
			?>
		<script language="javascript">
			window.alert ( "Ha modificado el tema exitosamente" );
		</script>		
		<script> window.location = "gestionarForo.php"; </script>
			<? 
	
	}
	

}

if (isset($_POST["cancelar"]))
{
	?>
	<script language="javascript">
		window.location = "gestionarForo.php";
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