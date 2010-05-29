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
      <form method="get" id="searchform" action="http://www.free-css.com/">
        <div>
		  <h2><a href="cerrarSesion.php" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px; position:absolute; left: 249px; top: 243px;">Cerrar Sesión >></a></h2>
        </div>
      </form>
    </div>
   
    <div class="paperclip"></div>
    <div class="paperclip2"></div>
	<div style="position:absolute; left: 238px; top: 334px;"> 
 
    <h2>Bienvenid@  &nbsp;
	  	<?php 
				echo $_SESSION["usuario"];
		
			?>
          </h2>   
    
    </div>
	
  </div>
  <div id="container">
    <div id="contentPagPpal2">
      <div id="content_top">
        <div class="post">

        </div>
        <div class="post">



<?php 

			$cuenta = $_SESSION["usuario"];
			$conexion = mysql_connect("localhost", "root", "12345");
			mysql_select_db("metodologia", $conexion); 
			
			$queEmp = "SELECT p.`correo` as correo FROM metodologia.persona p WHERE p.`cuenta` = '$cuenta'";
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

			$totEmp = mysql_num_rows($resEmp); 
			
			if ($totEmp> 0) {
   				while ($rowEmp = mysql_fetch_assoc($resEmp)) {
     		
					if ($rowEmp['correo']=='')
					{
						echo " <form id='form1' name='form1' method='post' action=''>
            Correo alterno:
            <input type='text' name='correoAlum' id='correoAlum' />
            <br />
            <input type='submit' name='cargar' id='cargar' value='Cargar' />
            <br />
          </form>   ";
					}else {
						echo "tiene correo";
					}
				}
			
			}
			
			
			
 if (isset($_POST["cargar"]))
{
	$cuenta = $_SESSION["usuario"];
	$correo = $_POST["correoAlum"];
	
	
	$conexion = mysql_connect("localhost", "root", "12345");
	mysql_select_db("metodologia", $conexion); 
			
	$queEmp = "update metodologia.persona set correo = '$correo' where cuenta = '$cuenta'";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
	echo "Entro";

}

?>         
</div>
       
      </div>
    </div>
    <div id="sidebarPagPpal2">

   <?php 
   
   	$cuenta = $_SESSION["usuario"];
			$conexion = mysql_connect("localhost", "root", "12345");
			mysql_select_db("metodologia", $conexion); 
			
			$queEmp = "SELECT p.`correo` as correo FROM metodologia.persona p WHERE p.`cuenta` = '$cuenta'";
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

			$totEmp = mysql_num_rows($resEmp); 
			
			if ($totEmp> 0) {
   				while ($rowEmp = mysql_fetch_assoc($resEmp)) {
     		
					if ($rowEmp['correo']=='')
					{
						
					}else {
						echo "<ul class='categorytext'>
        <li class='categories'>
          <h2>
            <!-- -->
          </h2>
          <ul>
            <li><a href=''>Agregar Alumno</a> </li>
            <li><a href=''>Modificar Alumno</a> </li>
            <li><a href=''>Inhabilitar Alumno</a> </li>
          </ul>
        </li>
      </ul>
      <div class='newcomments'>
        <ul>
           <li><a href='http://www.free-css.com/'>Agregar Examen Virtual</a></li>
        	<li><a href='http://www.free-css.com/'>Modificar Examen Virtual</a></li>
        	<li><a href='http://www.free-css.com/'>Eliminar Examen Virtual</a></li>
        </ul>
      </div>
    ";
					}
				}
			
			}
			
			
   
   ?>
   
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
