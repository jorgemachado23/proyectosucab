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
				$cantidad = $_SESSION["cantAlumno"];
				$seccion = $_SESSION["seccion"];
			?>
          </h2>		  
		  
		 <p>&nbsp;</p>
		 <h2 align="center">Agregar Alumnos</h2>
         <p>&nbsp;</p>
         <td align="left"><div align="center">Ingrese los datos requeridos de cada alumno</div></td>
		  
        </div>
		
        <div class="post">   
       
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

if (isset($_POST["agregar"]))
{
	$falta = 0;
	$cont=1;
	$cant=$_SESSION["cantAlumno"];
	
	while ($cont <= $cant)
	{
		
		$nom = strtoupper($_POST["nombres".$cont]);
		$ape = strtoupper($_POST["apellidos".$cont]);
	
		$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
		mysql_select_db("metodologia", $conexion); 
	
		$apellido = explode(chr(32),$ape);
	
		if (($apellido[0]!="")&&($apellido[1]!=""))
		{
			if ($nom == "")
			{	
				?>
				<script language="javascript">
					window.alert ( "Debe ingresar los datos obligatorios");
				</script>		
				<?	
		
			} else
			{
				$nombre = explode(chr(32),$nom);
		
				$primerNombre= $nombre[0];
				$segundoNombre = $nombre[1];
				$primerApellido = $apellido[0];
				$segundoApellido = $apellido[1];
				$cuenta = $primerNombre."_".$primerApellido;
		
				for ($i = 2; $i <= str_word_count($nom); $i++)
				{
					$segundoNombre = $segundoNombre." ".$nombre[$i];
				} 
			
			$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
			mysql_select_db("metodologia", $conexion); 
		
			$existe= "SELECT p.`idPERSONA` FROM metodologia.persona p WHERE p.`nombre`='$primerNombre' AND p.`apellido`='$primerApellido' AND p.`segundoNombre`='$segundoNombre' AND p.`segundoApellido`='$segundoApellido'";
			$resEval = mysql_query($existe, $conexion) or die(mysql_error());
			$totEmp = mysql_num_rows($resEval); 
			if ($totEmp!=0)
			{
				?>
				<script language="javascript">
					window.alert ( "El alumno ya esta ingresado, favor verificar datos" );
				</script>		
				<?	
			}else
			{
				$queEval = "INSERT INTO `PERSONA` (`nombre`, `segundoNombre`, `apellido`, `segundoApellido`, `tipo`, `cuenta`, `clave`, `seccion`, `estado`) VALUES ('$primerNombre', '$segundoNombre', '$primerApellido', '$segundoApellido', 'ALUM', '$cuenta', '$cuenta', '$_SESSION[seccion]', 'Activo')";
				$resEval = mysql_query($queEval, $conexion) or die(mysql_error());
			}
			$listo = 1;
			}/*fin del else del nom == ""*/
		}else
		{
			$falta = $falta + 1;
		}
	
		$cont = $cont + 1;
	}/*fin del while*/
}/*fin del if del boton*/

/*if ($listo == 1)
{
?>
	<script language="javascript">
		window.alert ( "El alumno ha sido agregado con éxito");
		window.location = "pagPpalAdmin";
	</script>		
	<?
}

if ($falta != 0)
{
	?>
		<script language="javascript">
			window.alert ( "Debe ingresar los datos obligatorios");
		</script>		
	<?
}*/

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