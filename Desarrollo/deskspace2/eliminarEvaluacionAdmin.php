<?php 
session_start();

$_SESSION["usuario"];
$_SESSION["privilegio"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Aula Virtual</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="files/style.css" type="text/css" media="screen" />
<!--[if IE 7]>	<link rel="stylesheet" type="text/css" media="all" href="files/style_ie.css" /><![endif]-->
<!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="all" href="files/style_ie6.css" /><![endif]-->
</head>
<body>
<div id="wrapper">
  <div class="header">
    <div class="inner">
      <ul class="nav">
        <li><a href="http://www.free-css.com/" class="home" id="link_home">Home</a></li>
        <li><a href="http://www.free-css.com/" class="about" id="link_about">About</a></li>
        <li><a href="http://www.free-css.com/" class="contact" id="link_contact">Contact</a></li>
      </ul>
    </div>
    <h1 class="logo"><a href="http://www.free-css.com/">YourSite - Slogan Here!</a></h1>
    <div class="search">
      <form method="get" id="searchform" action="http://www.free-css.com/">
        <div>
		  <h2><a href="cerrarSesion.php" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px; position:absolute; left: 249px; top: 243px;">Cerrar Sesión >></a></h2>
        </div>
      </form>
    </div>
   
    <div class="paperclip"></div>
    <div class="paperclip2"></div>
    <div class="paperclip3"></div>
  </div>
  <div id="container">
    <div id="content">
      <div id="content_top">
        <div class="post">
          <h2>
          
          	<?php 
				echo $_SESSION["usuario"];
			?>
            <input type="submit" name="cerrarSesion" id="cerrarSesion" value="Cerrar Sesion" />
          </h2>
          
        </div>
        <div class="post">
        <form id="form1" name="form1" method="post" action="">

          <div align="center">
            <select name="select" id="select">
            
            <?php 
			$conexion = mysql_connect("localhost", "root", "12345");
			mysql_select_db("metodologia", $conexion); 
			
			$queEmp = "SELECT e.`nombre` as nombre, e.`idEVALUACION` as idEvaluacion FROM metodologia.evaluacion e";
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

			$totEmp = mysql_num_rows($resEmp); 
			
			
			if ($totEmp> 0) {
   				while ($rowEmp = mysql_fetch_assoc($resEmp)) {
     				echo "
            <option value=".$rowEmp['idEvaluacion'].">".$rowEmp['nombre']."</option>
          ";
					
				}
   			}
		
		?>    
            </select>
            <br />  
              <input type="submit" name="eliminar" id="eliminar" value="Eliminar" />
          </div>
        </form> 
         
         
         
<?php  


if (isset($_POST["eliminar"]))
{
	
	$evaluacion = $_POST["select"];

	$conexion = mysql_connect("localhost", "root", "12345");
	mysql_select_db("metodologia", $conexion); 
	

	$queEval = "delete from metodologia.evaluacion where idEVALUACION = $evaluacion";
	$resEval = mysql_query($queEval, $conexion) or die(mysql_error());
		
		?>
		<script language="javascript">
			window.alert("La evaluacion ha sido eliminada.");
			window.location = "pagPpalAdmin.php";
		</script>
				
	<?

}
	
	
?>
</div>
        <div class="post">
          <h2>&nbsp;</h2>
        </div>
        <div class="navigation"></div>
      </div>
    </div>
   <div id="sidebar">
      <ul class="categorytext">
        <li class="categories">
          <h2>
            <!-- -->
          </h2>
          <ul>
            <li><a href="">Agregar Alumno</a> </li>
            <li><a href="">Modificar Alumno</a> </li>
            <li><a href="">Inhabilitar Alumno</a> </li>
          </ul>
        </li>
      </ul>
      <div class="newcomments">
        <ul>
           <li><a href="http://www.free-css.com/">Agregar Examen Virtual</a></li>
        	<li><a href="http://www.free-css.com/">Modificar Examen Virtual</a></li>
        	<li><a href="http://www.free-css.com/">Eliminar Examen Virtual</a></li>
        </ul>
      </div>
      <div class="linkstext">
        <ul>
		<li><a href="agregarEvaluacionAdmin.php">Agregar Evaluación</a></li>
          <li><a href="modificarEvaluacionAdmin.php">Modificar Evaluación</a></li>
          <li><a href="eliminarEvaluacionAdmin.php">Eliminar Evaluación</a></li>
          <li><a href="cargarNotasAdmin.php">Cargar Notas</a></li>
          <li><a href="http://www.free-css.com/">Consultar Notas</a></li>
          <li><a href="http://www.free-css.com/">Modificar Notas</a></li>
        </ul>
      </div>
      <div class="linkstext">
      <ul>
    	   <li><a href="http://www.free-css.com/">Ver Foro</a></li>
           <li><a href="http://www.free-css.com/">Borrar Foro</a></li>
      </ul>
      </div>
	  
    </div>
	
  <div id="footer">
  <br />
    <br />
    <hr noshade size=1 />
    <div style="color: #669999;text-decoration: none;font-size:8pt;"><a href="http://www.free-css.com/" style="color: #669999;text-decoration: none;font-size:8pt;">Wordpress Theme</a> designed by DT <a href="http://www.dreamtemplate.com" style="color: #669999;text-decoration: none;font-size:8pt;">Website Templates</a></div>
    <br />
  </div>
</div>
</body>
</html>
