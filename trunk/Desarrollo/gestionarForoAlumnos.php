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
	<div style="position:absolute; left: 238px; top: 334px;"> 
    <h2>Bienvenid@</h2></div>
	
  </div>
  <div id="container">
    <div id="contentPagPpal2">
      <div id="content_top">
        <div class="post">
          <h2 style="position:absolute; left: 343px; top: 333px;"> 
	  	    <?php 
				echo $_SESSION["usuario"];
			?>
          </h2>
		  
		  <p>&nbsp;</p>
		 <h2 align="center">Foro de Discusión</h2>
          
        </div>
        <div class="post">   
       <?php  
         if (isset($_POST["cerrarSesion"]))
			{
			?>
				<script language="javascript">
					window.location = "cerrarSesion.php";
				</script>
						
			<?
				
		}?>
		
		<?php 
	 		    $conexion = mysql_connect("127.0.0.1", "root", "12345");


	mysql_select_db("metodologia", $conexion); 
	   			$queEmp = "SELECT p.`nombre`,p.`fecha`,p.`descripcion`,p.`idtema` FROM metodologia.tema p";
				$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
				$totEmp = mysql_num_rows($resEmp); 
				if ($totEmp> 0) {
				
					while ($rowEmp = mysql_fetch_assoc($resEmp)) {
					
			 	echo "<tr style='background:url(images/content_extender.jpg)'><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href='mostrarComentariosAlumnos.php?tema=".$rowEmp['nombre']."' style='color:#666666; font-style:italic; font-size:14px;' >".$rowEmp ['nombre']."</a></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></tr>";
						
				echo "<tr style='background:url(images/content_extender.jpg)'><p style='font-size:20; font-style:italic;font-family:Arial, Helvetica, sans-serif' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rowEmp ['fecha']."</p></tr>";
				echo "<tr style='background:url(images/content_extender.jpg)'><p style='font-size:20; font-style:italic;font-family:Arial, Helvetica, sans-serif' class='entry-content' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descripción: ".$rowEmp ['descripcion']."</p>"; "</tr>&nbsp;&nbsp;&nbsp;&nbsp;";
				
					}
				}	
		?>
		</div>
       
      </div>
    </div>
    <div id="sidebarPagPpal2">

      <div class="linkstext">
        <ul>
		<p></p>
		<p></p>
		&nbsp;
		<li><a href="gestionarForoAlumnos.php">Ver Temas</a></li>
        </ul>
      </div>
      <div class="linkstext">
      <ul>
	  <p></p>
	  <p></p>
	       <li><a href="responderExamen.php">Responder Exámen</a></li>
      </ul>
      </div>

    </div>
	
	
	 <div id="footer2" style="position:absolute">
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
