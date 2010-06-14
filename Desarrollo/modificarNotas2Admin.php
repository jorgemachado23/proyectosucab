<?php 
session_start();

$_SESSION["usuario"];
$_SESSION["privilegio"];
$_SESSION["seccion"];
$_SESSION["evaluacion"];

$conexion = mysql_connect("127.0.0.1", "root", "12345");
	mysql_select_db("metodologia", $conexion); 
$queEmp = "CREATE  TABLE IF NOT EXISTS `metodologia`.`TEMPORAL` (
  `idTemporal` INT NOT NULL AUTO_INCREMENT,
  `idPERSONA` INT NOT NULL,
  `nota` varchar(3) NOT NULL,
  `idEVALUACION` int not null,
  PRIMARY KEY (`idTemporal`) )
ENGINE = InnoDB;";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

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
    <h2>
	  	<?php 
				echo $_SESSION["usuario"];
		
			?>
          </h2>
	</div>
	
  </div>
  <div id="container">
    <div id="contentPagPpal">
      <div id="content_top">
        <div class="post"></div>
        <div class="post">
        
        
        
         <form id="form1" name="form1" method="post" action="">
           <div align="center">
             <table width="200" border="0">
               <?php 
		
			
			
			$seccion = $_SESSION["seccion"];
			echo $seccion;
			$eval=$_SESSION["evaluacion"];
			echo $eval;
			
			$conexion = mysql_connect("127.0.0.1", "root", "12345");
	mysql_select_db("metodologia", $conexion); 
			
			$queEmp = "SELECT n.`nota`,n.`PERSONA_idPERSONA` as ident, p.`nombre`, p.`apellido`, p.`segundoNombre`, p.`segundoApellido`
FROM metodologia.nota n, metodologia.persona p
WHERE n.`PERSONA_idPERSONA`=p.`idPERSONA` AND p.`seccion`='$seccion' AND n.`EVALUACION_idEVALUACION`=$eval";
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

			$totEmp = mysql_num_rows($resEmp); 
			
			echo $totEmp;
			
		 if ($totEmp> 0) {
   				while ($rowEmp = mysql_fetch_assoc($resEmp)) {
     				
					$nota=$rowEmp['nota'];
				
				
				if ($nota == 5){ $nota2="A";}
				else if ($nota == 4){ $nota2="B";}
				else if ($nota == 3){ $nota2="C";}
				else if ($nota == 2){ $nota2="D";}
				else if ($nota == 1){ $nota2="E";}
					
					echo "
					
					<tr>
            <td width='270' align='left'>".$rowEmp['ident']." ".$rowEmp['nombre']."&nbsp;".$rowEmp['nombre2']."&nbsp;".$rowEmp['apellido']."&nbsp;".$rowEmp['apellido2']."&nbsp;"."</td>
            <td width='184'><input type='text' name=".$rowEmp['ident']." id=".$rowEmp['ident']." value='$nota2' /></td>
          			</tr>";
					
					
		}}
		 
		
		?>
             </table>
             <input type="submit" name="button" id="button" value="Cargar" />
             </div>
         </form>
         
         
         <?php 
		 if (isset($_POST["button"]))
		 
		 {
		 
		 	$conexion = mysql_connect("127.0.0.1", "root", "12345");
	mysql_select_db("metodologia", $conexion); 
			
			$queEmp = "SELECT * FROM persona p WHERE p.`tipo`='ALUM';";
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

			$totEmp = mysql_num_rows($resEmp); 

		 
		 $eval=$_SESSION["evaluacion"];
		 $cont =1;
		 
	$flag=0;
		 
		  while ($cont <= ($totEmp+1))
		  {
		  	echo $cont;
			$_POST["$cont"];
		  	if ($_POST["$cont"] == "")
			{
				echo "vacio";
			}else
			{
				
				
				
				$nota=strtoupper($_POST["$cont"]);
				echo $nota;
				
				if ($nota == "A"){ $nota2=5;}
				else if ($nota == "B"){ $nota2=4;}
				else if ($nota == "C"){ $nota2=3;}
				else if ($nota == "D"){ $nota2=2;}
				else if ($nota == "E"){ $nota2=1;}
				else {
				
				$nota2=$nota;
				
				}
				$conexion = mysql_connect("127.0.0.1", "root", "12345");
	mysql_select_db("metodologia", $conexion); 
			
			
			if (($nota2==1)||($nota2==2)||($nota2==3)||($nota2==4)||($nota2==5)){
			
				$queEmp = "UPDATE metodologia.NOTA SET nota='$nota2' WHERE `PERSONA_idPERSONA`=$cont and `EVALUACION_idEVALUACION`=$eval" ;
				$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
				echo "entro";
			
			} else{	
				$queEmp = "INSERT INTO `TEMPORAL` (`nota`, `idPERSONA`, `idEVALUACION`) VALUES ('$nota2', $cont, $eval);";
				$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
				$flag=1;
			
			
				}
			}
			$cont = $cont+1;
		  
		  }
		 
		 
		 }
		 
		 
		 
		 if ($flag==1)
		 {
		 
			?>
				<script language="javascript">
					window.alert("Hubo errores en algunas notas ingresada. \nPor favor verifique los siguientes datos.");
					window.location = "modificarNotas3Admin.php";
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
