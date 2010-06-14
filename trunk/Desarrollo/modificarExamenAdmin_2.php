<?php 
session_start();

$usuario = $_SESSION["usuario"];
$_SESSION["privilegio"];
$_SESSION["examen"];

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
		 <h2 align="center">Modificar Exámen Virtual</h2>
         

		  
        </div>
		
        <div class="post">   
              <form id="form1" name="form1" method="post" action="">

		   
              <tr width="179" height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style4 style1">Nombre:</span></tr>
              <td width="370"><input name="nombre" type="text" id="nombre" size="40" value= "<? echo $_SESSION["examen"]; ?>" style="font-family:Verdana, Arial, Helvetica, sans-serif" /><span class="style1">*</span></td>
             <br /><br />
            
            <tr width="179" height="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style4 style1">Fecha de Vencimiento:</span></tr>
            <td width="370"><input name="fecha" type="text" id="fecha" size="40" value="21-12-09" style="font-family:Verdana, Arial, Helvetica, sans-serif" /><span class="style1">*</span></td>
            <br /><br />
     
            <tr width="179" height="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style4 style1">Tiempo para responder:</span> </tr>
             <td width="370"><input name="duracion" type="text" id="duracion" size="40" value="120 min" style="font-family:Verdana, Arial, Helvetica, sans-serif"/><span class="style1">*</span></td>
             <p>&nbsp;</p>
             
              <tr width="360" height="60"><input name="pre1" type="text" id="pre1" size="80" value="1) ¿Cuál de los siguientes números se lee como once enteros, tres décimos y un milésimo?" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res1_1" type="text" id="res1_1" size="20" value="a) 11.301" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res1_2" type="text" id="res1_2" size="20" value="b) 11.31" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res1_3" type="text" id="res1_3" size="20" value="c) 11.031" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res1_4" type="text" id="res1_4" size="20" value="d) 11.0103" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br /><br />
           
              <tr width="360" height="60"><input name="preg2" type="text" id="preg2" size="80" value="2) Una cubeta se llenó con 2 jarras de agua. Si cada jarra tiene una capacidad de 3 3/4 lt, ¿cuál es la capacidad de la cubeta?" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res2_1" type="text" id="res2_1" size="20" value="a) 4 1/2 litros" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res2_2" type="text" id="res2_2" size="20" value="b) 7 1/2 litros." style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res2_3" type="text" id="res2_3" size="20" value="c) 6 3/4 litros." style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res2_4" type="text" id="res2_4" size="20" value="d) 6 1/2 litros." style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br /><br />
             
              <tr width="360" height="60"><input name="preg3" type="text" id="preg3" size="80" value="3) Doña Luz compró 3 paquetes de 5 jabones cada uno, más 3 jabones sueltos. Si cada jabón cuesta $ 5.00, ¿cuánto pagó?" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res3_1" type="text" id="res3_1" size="20" value="a) $ 30.00" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res3_2" type="text" id="res3_2" size="20" value="b) $ 50.00" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res3_3" type="text" id="res3_3" size="20" value="c) $ 60.00" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res3_4" type="text" id="res3_4" size="20" value="d) $ 90.00" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br /><br />
         
              <tr width="360" height="60"><input name="preg4" type="text" id="preg4" size="80" value="4) Si una hormiga traslada un grano de trigo a su hormiguero en 5 minutos, ¿cuántos granos de trigo trasladarán 3 hormigas en 1 hora?" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res4_1" type="text" id="res4_1" size="20" value="a) 12" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res4_2" type="text" id="res4_2" size="20" value="b) 180" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res4_3" type="text" id="res4_3" size="20" value="c) 165" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br />
              <tr width="179"><input name="res4_4" type="text" id="res4_4" size="20" value="d) 36" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></tr><br /><br />
  
            <tr>
              <div align="center">
                <input type="submit" name="modificar" id="modificar" value="Modificar" style="font-family:Verdana, Arial, Helvetica, sans-serif" align="middle" />
                </div>
              <p>&nbsp;</p>
            <span class="style1">*</span> <span class="style2 style4 style1">Campos obligatorios</span>            </tr>  

          </form>
          
          

<?          
if (isset($_POST["modificar"]))
{
	$nom = $_POST["nombre"];
	$fec = $_POST["fecha"];
	$dur = $_POST["duracion"];
	
	if (($nom == "") || ($fec == "") || ($dur == ""))
	{
	?>
	<script language="javascript">
		window.alert ( "Debe llenar los campos obligatorios");
	</script>		
	<?	
	} else 
	{
	?>
	<script language="javascript">
		window.alert ( "Los datos se han modificado con éxito");
		window.location = "pagPpalAdmin";
	</script>		
	<?
	}
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
