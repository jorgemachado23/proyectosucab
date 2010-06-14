<?php 
session_start();

$_SESSION["usuario"];
$_SESSION["privilegio"];
$_SESSION["cantAlumno"];
$_SESSION["seccion"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Aula Virtual</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="files/style.css" type="text/css" media="screen" />
<!--[if IE 7]>	<link rel="stylesheet" type="text/css" media="all" href="files/style_ie.css" /><![endif]-->
<!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="all" href="files/style_ie6.css" /><![endif]-->
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
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
    <div id="contentPagPpalforo">
      <div id="content_top">
        <div class="post">

          <h2 style="position:absolute; left: 343px; top: 333px;"> 
	  	    <?php 
				echo $_SESSION["usuario"];
				$usuario = $_SESSION["usuario"];
			?>
          </h2>		  
		  
		 <p>&nbsp;</p>
		 <h2 align="center">Agregar Alumnos</h2>
         <p>&nbsp;</p>
         <td align="left"><div align="center">Ingrese la cantidad de alumnos que desea cargar y la sección a la cual corresponden</div></td>
		  
        </div>
		
        <div class="post">   
       
       <form id="form1" name="form1" method="post" action="">
<table width="559" height="67" border="0" align="center">
            <tr>
              <td width="148" height="28"><span class="style3">Sección:</span></td>
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
	
	$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
	mysql_select_db("metodologia", $conexion); 
	
	if ($cant == "")
	{
			?>
		<script language="javascript">
			window.alert ( "Debe ingresar lacantidad de alumnos correspondiente" );
		</script>		
			<?	
		
	} else
	{
		$_SESSION["cantAlumno"] = $cant;
		$_SESSION["seccion"] = $sec;
		?>
		<script language="javascript">
			window.location = "agregarAlumnoAdmin_2";
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
       
	   </div>
      </div>
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
		
		  <div id="footerForo">
  	  <div class="the-site">
      <ul>
        <li><a>Derechos Reservados(C) CAD 2009</a></li>
      </ul>
   	 </div>
    <hr noshade size=1 />
  </div>
	
  </div>
  
  
</div>
	
</body>
</html>
