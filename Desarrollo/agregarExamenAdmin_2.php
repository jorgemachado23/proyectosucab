<?php 
session_start();

$_SESSION["usuario"];
$_SESSION["privilegio"];
$_SESSION["nombre"];
$_SESSION["numero"];
$_SESSION["pregunta"];
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
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif}
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
          
          <?php echo "Examen: ".$_SESSION["nombre"]."<br /><br />"; ?>
          
 <form action="" method="post" name="form1" class="style4" id="form1">
          <table width="559" height="33" border="0" align="center">
		   <tr>
              <td width="103" height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pregunta:</td>
              <td width="446"><input name="pregunta" type="text" id="pregunta" size="60" style="font-family:Verdana, Arial, Helvetica, sans-serif" /> 
                <span class="style1 ">*</span></td>
            </tr></table>
            <table width="559" height="33" border="0" align="center">
            <tr>
            <td width="247" height="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cantidad de posibles respuestas: </td>
              <td width="302"><label>
				  <select name="numero" id="numero" style="font-family:Verdana, Arial, Helvetica, sans-serif">
				    <option value="2">2</option>
				    <option value="3">3</option>
				    <option value="4">4</option>
				    <option value="5">5</option>
				  </select>
				</label></td>
            </tr>
            </table>
          <div align="center"><br /> 
          	  <input type="submit" name="cancelar" id="cancelar" value="Cancelar" style="font-family:Verdana, Arial, Helvetica, sans-serif" /> 
              <input type="submit" name="continuar" id="continuar" value="Continuar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </div>
          <p>&nbsp;</p>
          <span class="style1">*</span> <span class="style2" style="font-family:Verdana, Arial, Helvetica, sans-serif">Campos obligatorios</span>
          </form> 
          
          <?php  

if (isset($_POST["continuar"]))
{	
	$pregunta = $_POST["pregunta"];
	$numero = $_POST["numero"];
	$_SESSION["numero"] = $_POST["numero"];
	$_SESSION["pregunta"] = $pregunta;
		
	if ($pregunta == "")
	{
	?>
	<script language="javascript">
		window.alert ( "Debe ingresar la pregunta");
	</script>		
	<?	
	} else
	{
	
		$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
		mysql_select_db("metodologia", $conexion); 
		
		$nombre = $_SESSION["nombre"];
	
		
		$queEval1 = "SELECT e.`idEVALUACION` as iden FROM metodologia.evaluacion e WHERE e.`nombre`='$nombre'";
		$resEval1 = mysql_query($queEval1, $conexion) or die(mysql_error());
		
		$totEmp = mysql_num_rows($resEval1); 
		
		if ($totEmp!=0){
			while ($id = mysql_fetch_assoc($resEval1)){
				
				$ide = $id["iden"];
							
				$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
				mysql_select_db("metodologia", $conexion); 
				
				$queEval = "INSERT INTO METODOLOGIA.contenido_examen (PREGUNTA,EVALUACION_IDEVALUACION) VALUES ('$pregunta',$ide)";
			
				$resEval = mysql_query($queEval, $conexion) or die(mysql_error());
	
    			?>
    			<script language="javascript">
					window.location = "agregarExamenAdmin_3";
				</script>		
				<? 
				
			}
			
		
 		}
	}
}	

if (isset($_POST["cancelar"]))
{

	$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
	mysql_select_db("metodologia", $conexion);
	
	$nombre = $_SESSION["nombre"];
	
	$queEmp = "DELETE FROM METODOLOGIA.evaluacion where `nombre`= '$nombre'";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());  
		
	?>
	<script language="javascript">
		window.location = "pagPpalAdmin.php";
	</script>		
	<?
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