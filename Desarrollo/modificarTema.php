<?php 
session_start();

$_SESSION["usuario"];
$_SESSION["privilegio"];
$tema = $_GET['tema'];
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
        <li><a href="" class="home" id="link_home">Home</a></li>
        <li><a href="" class="about" id="link_about">About</a></li>
        <li><a href="" class="contact" id="link_contact">Contact</a></li>
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
          <h2 style="position:absolute; left: 343px; top: 335px;"> 
		  	<?php 
				echo $_SESSION["usuario"];
		
			?>
          </h2>
		  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		  <h2 align="center">Modificar Tema de Discusión</h2>
          
        </div>
        <div class="post">  
		
		<?php 
		
		$conexion = mysql_connect("127.0.0.1", "root", "12345");
		mysql_select_db("metodologia", $conexion); 
		$id= "SELECT p.`idtema`,p.`nombre`,p.`descripcion` FROM tema p WHERE p.`idtema`='$tema'";
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
              <input type="submit" name="agregar" id="agregar" value="Modificar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </div>
        </form> 
		  
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
	
	if (isset($_POST["agregar"]))
{
	
	$nombre = $_POST["nombreTema"];
	$descripcion = $_POST["descripcion"];
	
	$conexion = mysql_connect("127.0.0.1", "root", "12345");
	mysql_select_db("metodologia", $conexion); 
	
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
		$existe= "SELECT `idTEMA` FROM METODOLOGIA.tema WHERE `nombre`='$nombre'";
		$resEval = mysql_query($existe, $conexion) or die(mysql_error());
		$totEmp = mysql_num_rows($resEval); 
		if ($totEmp!=0 ){
		
			?>
		<script language="javascript">
			window.alert ( "El tema que está ingresando ya existe, por favor intente con otro nombre." );
		</script>		
			<?	
		}else
		{
			$queEval = "Update tema set nombre ='$nombre',descripcion='$descripcion' where idtema ='$id';";
		$resEval = mysql_query($queEval, $conexion) or die(mysql_error());
			?>
		<script language="javascript">
			window.alert ( "Ha modificado el tema exitosamente" );
		</script>		
		<script> window.location = "gestionarForo.php"; </script>
			<? 
			
		}
		
	}
	

}?>
		
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
	
	
	 <div id="footer" style="position:absolute">
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
