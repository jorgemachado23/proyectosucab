<?php 
session_start();

$_SESSION["usuario"];
$_SESSION["privilegio"];
$_SESSION["numero"];
$_SESSION["pregunta"];
$_SESSION["nombre"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Aula Virtual</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="files/style.css" type="text/css" media="screen" />

<style type="text/css">
<!--
.style3 {font-family: verdana}
-->
</style>

</head>

<body>

<div id="wrapper">
  <div class="header">
    <div class="inner">
      <ul class="nav">
      </ul>
    </div>
    <h1 class="logo"><a href="">YourSite - Slogan Here!</a></h1>
   
       <div class="search">
      <form method="get" id="searchform">
        <div>
		  <h2><a href="cerrarSesion.php" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px; position:absolute; left: 249px; top: 243px;">Cerrar Sesión >></a></h2>
        </div>
      </form>
    </div>
   
    <div class="paperclip"></div>
    <div class="paperclip2"></div>
    <div class="paperclip3"></div>
	<div style="position:absolute; left: 238px; top: 334px;"> 
    <h2>Bienvenid@</h2></div>
	
  </div>
  <div id="container">
    <div id="contentPagPpal">
      <div id="content_top">
        <div class="post">
         <h2 style="position:absolute; left: 343px; top: 333px;">
         	<?php 
				echo $_SESSION["usuario"];
			?>
         </h2>
          <p>&nbsp;</p>
          
          <h2 align="center">Agregar Exámen Virtual</h2>
		 <p>&nbsp;</p>
		 <td align="left"><div align="center">Ingrese los datos solicitados a continuación</div></td>
		  <p>&nbsp;</p>
          
		  <form id="form1" name="form1" method="post" action="">
        <?  
			echo "Examen: ".$_SESSION["nombre"]."<br />";
			echo "Pregunta: ".$_SESSION["pregunta"]."<br /><br />";
		 ?>
        <table width="559" height="66" border="0" align="center">
        
		<?
		
		$num = $_SESSION["numero"];
		
		$lis = 1;
		while ($num <> 0)
		{
			echo 
		    "<tr>
			  <td width='3' height='30'>$lis</td>
              <td width='104' height='30'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Respuesta:</td>
              <td width='445'><input name='respuesta$lis' type='text' id='respuesta$lis' size='70' /> 
                <span class='style1'>*</span></td>
            </tr>
			"; 
			$num = $num - 1;
			$lis = $lis + 1;
		}
		
		
		?>
        
		</table>
        <br /><br />

        <tr>
        	<td width='70'>Numero de Respuesta Correcta:</td>
            <td><input name='respCorrecta' type='text' id='respCorrecta' size='6' /></td>
         </tr>
        
        <div align="center"><br />  
        <input type="submit" name="cancelar" id="cancelar" value="Cancelar" style="font-family:Verdana, Arial, Helvetica, sans-serif" /> 
        <input type="submit" name="finalizar" id="finalizar" value="Finalizar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
        <input type="submit" name="agregar" id="agregar" value="Otra pregunta" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </div>
        <?	

if (isset($_POST["finalizar"]))
{	
	$cont=1;
	$num = $_SESSION["numero"];
	$pregunta = $_SESSION["pregunta"];
	$eval = $_SESSION["nombre"];
	$respCorrecta = $_POST["respCorrecta"];

	while ($cont <= $num)
	{
		$res = $_POST["respuesta".$cont];
		
		
		if ($respCorrecta==$cont)
		{
			$tipo='CORRECTA';
		}else {
			$tipo="INCORRECTA";
		}

		if ($res == "")
		{
			$falta = 1;
		} else
		{
			$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
			mysql_select_db("metodologia", $conexion);
			
			
			$quePreg = "SELECT c.`id_pregunta` FROM metodologia.contenido_examen c,metodologia.evaluacion e
WHERE e.`nombre`='$eval' AND e.`idEVALUACION` = c.`EVALUACION_idEVALUACION` AND c.`pregunta` = '$pregunta'";
			$resPreg = mysql_query($quePreg, $conexion) or die(mysql_error()); 
		
			$totPreg = mysql_num_rows($resPreg); 
		
			if ($totPreg!=0){
				while ($id = mysql_fetch_assoc($resPreg)){
					$id = $id["id_pregunta"];
					
					$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
					mysql_select_db("metodologia", $conexion);
			
					
					$quePreg1 = "INSERT INTO `RESPUESTA` (`respuesta`, `tipo`, `CONTENIDO_EXAMEN_id_pregunta`) VALUES ( '$res', '$tipo', $id)";
					$resPreg1 = mysql_query($quePreg1, $conexion) or die(mysql_error()); 
				}
			
		}	
	$cont = $cont + 1;
	}
}

 ?>
	<script language="javascript">
		window.alert ( "El examen virtual ha sido agregado con éxito");
		window.location = "pagPpalAdmin";
	</script>		
	<? 

}
if (isset($_POST["agregar"]))
{	
		$cont=1;
	$num = $_SESSION["numero"];
	$pregunta = $_SESSION["pregunta"];
	$eval = $_SESSION["nombre"];
	$respCorrecta = $_POST["respCorrecta"];

	while ($cont <= $num)
	{
		$res = $_POST["respuesta".$cont];
		
		
		if ($respCorrecta==$cont)
		{
			$tipo='CORRECTA';
		}else {
			$tipo="INCORRECTA";
		}

		if ($res == "")
		{
			$falta = 1;
		} else
		{
			$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
			mysql_select_db("metodologia", $conexion);
			
			
			$quePreg = "SELECT c.`id_pregunta` FROM metodologia.contenido_examen c,metodologia.evaluacion e
WHERE e.`nombre`='$eval' AND e.`idEVALUACION` = c.`EVALUACION_idEVALUACION` AND c.`pregunta` = '$pregunta'";
			$resPreg = mysql_query($quePreg, $conexion) or die(mysql_error()); 
		
			$totPreg = mysql_num_rows($resPreg); 
		
			if ($totPreg!=0){
				while ($id = mysql_fetch_assoc($resPreg)){
					$id = $id["id_pregunta"];
					
					$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
					mysql_select_db("metodologia", $conexion);
			
					
					$quePreg1 = "INSERT INTO `RESPUESTA` (`respuesta`, `tipo`, `CONTENIDO_EXAMEN_id_pregunta`) VALUES ( '$res', '$tipo', $id)";
					$resPreg1 = mysql_query($quePreg1, $conexion) or die(mysql_error()); 
				}
			
		}	
	$cont = $cont + 1;
	}
}
 ?>
	<script language="javascript">
		window.location = "agregarExamenAdmin_2.php";
	</script>		
	<?
}

if ($falta == 1)
{
	?>
	<script language="javascript">
		window.alert ( "Debe llenar todos los campos");
	</script>		
	<?
}

if (isset($_POST["cancelar"]))
{

	$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
	mysql_select_db("metodologia", $conexion);
	
	$nombre = $_SESSION["nombre"];
	$pregunta = $_SESSION["pregunta"];
	
	$queEmp1 = "SELECT e.`idEVALUACION` as iden FROM metodologia.evaluacion e WHERE e.`nombre`='$nombre'";
	$resEmp1 = mysql_query($queEmp1, $conexion) or die(mysql_error());
	
	$totEmp = mysql_num_rows($resEmp1); 
		
	if ($totEmp!=0){
	$id = mysql_fetch_assoc($resEmp1);
	$id = $id["iden"];
	echo $id;
	
	$queEmp = "DELETE FROM METODOLOGIA.contenido_examen where `EVALUACION_idEVALUACION`= $id";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());  
		
		
	$queEmp2 = "DELETE FROM METODOLOGIA.evaluacion where `nombre`= '$nombre'";
	$resEmp2 = mysql_query($queEmp2, $conexion) or die(mysql_error()); 
	
	
	?>
	<script language="javascript">
		window.location = "pagPpalAdmin.php";
	</script>		
	<? 	
		
	} 
	
	
		
	
}
?>
         
         </div>
       
      </div>
    </div>
	 <div id="footer" style="position:absolute">
    <div class="the-site">
      <ul>
        <li><a>Derechos Reservados(C) CAD 2009</a></li>
      </ul>
    </div>
    <hr noshade size=1 />
  </div>
    <div id="sidebar">
      <ul class="categorytext">
        <li class="categories">
          <h2>
            <!-- -->
          </h2>
          <ul>
            <li><a href="agregarAlumnoAdmin_1.php">Agregar Alumnos</a> </li>
            <li><a href="modificarAlumnoAdmin_1.php">Modificar Alumno</a> </li>
            <li><a href="inhabilitarAlumnoAdmin_1.php">Inhabilitar Alumno</a> </li>
            <li><a href="eliminarAlumnoAdmin_1.php">Eliminar Alumnos</a> </li>
          </ul>
        </li>
      </ul>
      <div class="newcomments">
        <ul>
           <li><a href="agregarExamenAdmin_1.php">Agregar Examen Virtual</a></li>
        	<li><a href="modificarExamenAdmin_1.php">Modificar Examen Virtual</a></li>
        	<li><a href="eliminarExamenAdmin_1.php">Eliminar Examen Virtual</a></li>
        </ul>
      </div>
      <div class="linkstext">
        <ul>
		<li><a href="agregarEvaluacionAdmin.php">Agregar Evaluación</a></li>
          <li><a href="modificarEvaluacionAdmin.php">Modificar Evaluación</a></li>
          <li><a href="eliminarEvaluacionAdmin.php">Eliminar Evaluación</a></li>
          <li><a href="cargarNotasAdmin.php">Cargar Notas</a></li>
          <li><a href="consultarNotasAdmin.php">Consultar Notas</a></li>
          <li><a href="modificarNotasAdmin.php">Modificar Notas</a></li>
        </ul>
      </div>
      <div class="linkstext">
      <ul>
    	   <li><a href="gestionarForo.php">Ver Foro</a></li>
    	   <li><a href="crearTema.php">Crear un tema</a></li>
           <li><a href="borrarContenidoForo.php">Borrar Foro</a></li>
      </ul>
      </div>
	  
    </div>

  </div>
</div>


</body>
</html>