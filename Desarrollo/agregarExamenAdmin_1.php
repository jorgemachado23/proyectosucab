<?php 
session_start();

$_SESSION["usuario"];
$_SESSION["privilegio"];
$_SESSION["nombre"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Aula Virtual</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="files/style.css" type="text/css" media="screen" />


<!--Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="jscalendar-1.0/calendar-blue2.css" title="win2k-cold-1" />

<!--Hoja de estilos del calendario -->
<!-- librería principal del calendario -->
<script type="text/javascript" src="jscalendar-1.0/calendar.js"></script>

  <!-- librería para cargar el lenguaje deseado -->
<script type="text/javascript" src="jscalendar-1.0/lang/calendar-es.js"></script>

  <!-- librería que declara la función Calendar.setup, que ayuda a generar un calendario en unas pocas líneas de código -->
<script type="text/javascript" src="jscalendar-1.0/calendar-setup.js"></script>



<style type="text/css">
<!--
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>

<script type="text/JavaScript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>

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
          <table width="559" height="66" border="0" align="center">
		   <tr>
              <td width="179" height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre:</td>
              <td width="370"><input name="nombre" type="text" id="nombre" size="50" style="font-family:Verdana, Arial, Helvetica, sans-serif" /> 
                <span class="style1">*</span></td>
            </tr><tr>
            <td width="179" height="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de Vencimiento: </td>
              <td width="370"><input name="fecha" type="text" id="fecha" size="12" maxlength="10"  readonly="true" style="font-family:Verdana, Arial, Helvetica, sans-serif"/> 
                <input name="button" type="button" id="lanzador" value="..." /><span class="style1">&nbsp;*</span></td>
            </tr><tr>
            <td width="179" height="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tiempo para responder: </td>
              <td width="370"><input name="duracion" type="text" id="duracion" size="6" style="font-family:Verdana, Arial, Helvetica, sans-serif" /> 
                <span class="style1">(minutos) *</span></td>
            </tr><tr>
            <td width="179" height="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Porcentaje: </td>
              <td width="370"><input name="porcentaje" type="text" id="porcentaje" size="6" style="font-family:Verdana, Arial, Helvetica, sans-serif" /> 
                <span class="style1">% *</span></td>
            </tr><tr>
            <td width="179" height="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descripción: </td>
              <td width="370"><textarea name="descripcion" cols="50" rows="4" id="descripcion" style="font-family:Verdana, Arial, Helvetica, sans-serif"></textarea>
                <span class="style1"></span></td>
            </tr>
          </table>
          <div align="center"><br />  
              <input type="submit" name="cancelar" id="cancelar" value="Cancelar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
              <input type="submit" name="continuar" id="continuar" value="Continuar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
              
          </div>
          <p>&nbsp;</p>
          <span class="style1">*</span> <span class="style2 style4">Campos obligatorios</span>
          
          <p align="center"><!-- script que define y configura el calendario-->
        <script type="text/javascript">
			     Calendar.setup({
		         inputField     :    "fecha",      // id del campo de texto
		         ifFormat       :    "%Y-%m-%d",       // formato de la fecha, cuando se escriba en el campo de texto
		         button         :    "lanzador"   // el id del botón que lanzará el calendario
		      });
			  </script>
      </p>
          </form> 
          
          <?php  

if (isset($_POST["continuar"]))
{	
	$nom = $_POST["nombre"];
	$fec = $_POST["fecha"];
	$dur = $_POST["duracion"];
	$por = $_POST["porcentaje"];
	$des = $_POST["descripcion"];
	
	echo $fec;
	
	if (($nom == "") || ($fec == "") || ($dur == "") || ($por == ""))
	{
	?>
	<script language="javascript">
		window.alert ( "Debe ingresar todos los datos obligarorios");
	</script>		
	<?	
	} else
	{	
		$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
		mysql_select_db("metodologia", $conexion); 
		
		$existe= "SELECT `idEVALUACION` FROM METODOLOGIA.evaluacion WHERE `nombre`='$nom'";
		$resEval = mysql_query($existe, $conexion) or die(mysql_error());
		$totEmp = mysql_num_rows($resEval); 
		if ($totEmp==0)
		{
		
			$queEval = "INSERT INTO METODOLOGIA.EVALUACION (NOMBRE,PORCENTAJE,TIPO,FECHA_FIN,DESCRIPCION,ESTADO,DURACION) VALUES ('$nom',$por,'VIRTUAL','$fec','$des','ACTIVO',$dur)";
			$resEval = mysql_query($queEval, $conexion) or die(mysql_error());
				
			$_SESSION["nombre"] = $nom;
			?>
			<script language="javascript">
				window.location = "agregarExamenAdmin_2";
			</script>		
			<?
		}else
		{
			?>
	<script language="javascript">
		window.alert ( "El nombre de la evaluación ya existe. Intente otro");
	</script>		
	<?
		}
	}
}
?>

<?php
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