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
        <li><a href="" class="home" id="link_home">Home</a></li>
        <li><a href="" class="about" id="link_about">About</a></li>
        <li><a href="" class="contact" id="link_contact">Contact</a></li>
      </ul>
    </div><!--inner-->
    <h1 class="logo"><a href="">YourSite - Slogan Here!</a></h1>
   
       <div class="search">
      <form method="get" id="searchform">
        <div>
		  <h2><a href="cerrarSesion.php" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px; position:absolute; left: 249px; top: 243px;">Cerrar Sesión >></a></h2>
        </div>
      </form>
   	  </div><!--search-->
   
    <div class="paperclip"></div>
    <div class="paperclip2"></div>
	<div style="position:absolute; left: 238px; top: 334px;"><h2>Bienvenid@</h2></div>
	
  </div><!--header-->
  <div id="container">
    <div id="contentPagPpal3">
      <div id="content_top">
        <div class="post">
 
          <h2 style="position:absolute; left: 343px; top: 333px;"> 
	  	    <?php 
				echo $_SESSION["usuario"];
			?>
          </h2>
		  
		  <p>&nbsp;</p>
		 <h2 align="center">Responder Exámen Virtual</h2>
         <p>&nbsp;</p>
         <td align="left"><div align="center">Elija el exámen que desea responder</div></td>
        
       </div><!--post-->
        

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
        

		
		<form id="form1" name="form1" method="post" action="" style="font-family:Verdana, Arial, Helvetica, sans-serif">

            <tr width="179" height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <div align="center"></div>
            </tr>
            
             <form id="form1" name="form1" method="post" action="">
          
            <div align="center">
              <select name="examen" id="examen" style="font-family:Verdana, Arial, Helvetica, sans-serif">
                <option>Exámen Virtual 1</option>
                <option>Exámen Virtual 2</option>
                <option>Exámen Virtual 3</option>
                <option>Exámen Virtual 4</option>
               </select>         
              
              </div>
            <div align="center"><br />  
              <p>&nbsp;</p>
              <input type="submit" name="buscar" id="buscar" value="Buscar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </div>
          </form> 
          
<?
if (isset($_POST["buscar"]))
{
	$examen = $_POST["examen"];
	$_SESSION["examen"] = $examen
	?>
	<script language="javascript">
		window.location = "responderExamen_2.php";
	</script>
    <?		
}
?> 



		</div> <!--post-->  
      </div><!--content top-->
    </div><!--content pag pppal-->

    
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
    </div><!--sidebar-->
	
	
	 <div id="footer2" style="position:absolute">
<div class="the-site">
          <ul>
            <li><a>Derechos Reservados(C) CAD 2009</a></li>
          </ul>
        </div>
        <hr noshade size=1 />
  	</div><!--footer-->
    	
  </div><!--container-->
</div><!--wrapper-->
</body>
</html>