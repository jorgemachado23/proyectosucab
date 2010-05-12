<?php 
session_start();

$usuario = $_SESSION["usuario"];
$_SESSION["privilegio"];
$tema = $_GET['tema'];
$idc = $_GET['idcomentarios'];
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
	
	Para ingresar un nuevo comentario por favor introduzca el comentario y una descripcion del mismo.<br>

		 <h2 align="center"><br>
		   Tema:&nbsp;
           <?php 
				echo $tema;
			?> </h2>
		  <p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="">
          <table width="477" border="0" align="center">
			<tr>
              <td height="82">Agregar Comentario: </td>
              <td><textarea name="comentario" cols="50" rows="4" id="comentario" style="font-family:Verdana, Arial, Helvetica, sans-serif"></textarea></td>
            </tr>
          </table>
          <div align="center"><br />  
              <input type="submit" name="cancelar" id="cancelar" value="Cancelar" style="font-family:Verdana, Arial, Helvetica, sans-serif" /> 
              <input type="submit" name="agregar" id="agregar" value="Agregar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </div>
        </form> 
		  

       <br>

<?php  
					if (isset($_POST["cerrarSesion"]))
				{
					?>
						<script language="javascript">
							window.location = "cerrarSesion.php";
						</script>		
					<?	
				}
				
				
				if (isset($_POST["agregar"]))
				{
					
					$comentario = $_POST["comentario"];
					
					               $conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
	mysql_select_db("cole9858_aulavirtual", $conexion);  
					
					if ($comentario == "")
					{
							?>
						<script language="javascript">
							window.alert ( "Debe ingresar un comentario" );
						</script>		
							<?	
						
					} else
					{
						$fecha= date("Y-m-d");
						$comentario = "$comentario";
						$queEval = "INSERT INTO `COMENTARIOS` (`comentario`, `fecha`, `PERSONA_idPERSONA`, `TEMA_idTEMA`) VALUES ('$comentario',  '$fecha',(SELECT P.IDPERSONA FROM PERSONA P WHERE P.CUENTA='$usuario'), (SELECT t.`idTEMA` FROM TEMA t WHERE t.`nombre`='$tema'));";
				
						$resEval = mysql_query($queEval, $conexion) or die(mysql_error());
							?>
						<script language="javascript">
							window.alert ( "Ha ingresado el comentario exitosamente" );

						</script>		
							<?
					}
								
				}
				
								               $conexion = mysql_connect("localhost", "cole9858_virtual", "admin9858");
	mysql_select_db("cole9858_aulavirtual", $conexion);  
								$tema = $_GET['tema'];
								$id= "SELECT p.`idPERSONA`,p.`nombre` FROM PERSONA p WHERE p.`cuenta`='$usuario'";
								
								$resEmp2 = mysql_query($id, $conexion) or die(mysql_error());
								$totEmp2 = mysql_num_rows($resEmp2); 
								
								if ($totEmp2>0){
									while ($rowEmp2 = mysql_fetch_assoc($resEmp2)){
									$id2= $rowEmp2['idPERSONA'];
									}
								}
								
								$queEmp = "SELECT c.`comentario`,c.`fecha`,c.`persona_idpersona`,c.`idcomentarios`, p.`cuenta`
FROM COMENTARIOS c, PERSONA p WHERE c.`TEMA_idTEMA`=(SELECT t.`idTEMA` FROM TEMA t WHERE t.`nombre`='$tema') AND p.idPERSONA=c.persona_idpersona";
								$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
								$totEmp = mysql_num_rows($resEmp); 
								
								if ($totEmp> 0) {
								
								while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									$id3=$rowEmp['persona_idpersona'];
									$cuenta=$rowEmp['cuenta'];
									
								$queEmp3 = "SELECT p.`nombre` FROM PERSONA p WHERE p.`idPERSONA`='$id3'";
								$resEmp3 = mysql_query($queEmp3, $conexion) or die(mysql_error());
								$comento= $resEmp3['nombre'][1];

								if($rowEmp['persona_idpersona']==$id2){
								
								echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>"."$cuenta:&nbsp;".$rowEmp ['comentario']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='borrarComentario1.php?idc=".$rowEmp['idcomentarios']."'class='home' id='link_home' style='color:#333333; font-size:12px;text-decoration: none;'>Borrar</a></p>";
								}else	
								{
								$comentario = $rowEmp ['comentario'];
																								
								echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>"."$cuenta:&nbsp;"."$comentario"."</p>";
								}
								
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