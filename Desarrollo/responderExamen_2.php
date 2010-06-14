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
                <div align="center"><? echo $_SESSION["examen"]; ?> </div>
            </tr>
            <br />
             
              <tr width="360" height="60">1) ¿Cuál de los siguientes números se lee como once enteros, tres décimos y un milésimo?
              </tr><br />
              <tr width="370"><p>
                <label>
                  <input type="radio" name="RadioGroup1" value="1resc" id="1RadioGroup1_0" align="middle" />
                  11.301</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup1" value="1res1" id="1RadioGroup1_1" align="middle" />
                  11.031</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup1" value="1res2" id="1RadioGroup1_2" align="middle" />
                  11.0103</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup1" value="1res3" id="1RadioGroup1_3" align="middle" />
                  11.31</label>
                <br />
              </p></tr><br />

           
              <tr width="360" height="60">2) Una cubeta se llenó con 2 jarras de agua. Si cada jarra tiene una capacidad de 3 3/4 lt, ¿cuál es la capacidad de la cubeta?
              </tr><br />
              <tr width="370"><p>
                <label>
                  <input type="radio" name="RadioGroup2" value="2res1" id="2RadioGroup1_0" align="middle" />
                  4 1/2 litros</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup2" value="2resc" id="2RadioGroup1_1" align="middle" />
                  7 1/2 litros.</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup2" value="2res2" id="2RadioGroup1_2" align="middle" />
                  6 3/4 litros.</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup2" value="2res3" id="2RadioGroup1_3" align="middle" />
                  6 1/2 litros.</label>
                <br />
              </p></tr><br />
             
              <tr width="360" height="60">3) Doña Luz compró 3 paquetes de 5 jabones cada uno, más 3 jabones sueltos. Si cada jabón cuesta $ 5.00, ¿cuánto pagó?
              </tr><br />
              <tr width="370"><p>
                <label>
                  <input type="radio" name="RadioGroup3" value="3res1" id="3RadioGroup1_0" align="middle" />
                   $ 30.00</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup3" value="2res2" id="3RadioGroup1_1" align="middle" />
                   $ 50.00</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup3" value="3resc" id="3RadioGroup1_2" align="middle" />
                   $ 60.00</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup3" value="3res3" id="3RadioGroup1_3" align="middle" />
                   $ 90.00</label>
                <br />
              </p></tr><br />
                 
              <tr width="360" height="60">4) Si una hormiga traslada un grano de trigo a su hormiguero en 5 minutos, ¿cuántos granos de trigo trasladarán 3 hormigas en 1 hora?
              </tr><br />
              <tr width="370"><p>
                <label>
                  <input type="radio" name="RadioGroup4" value="4res1" id="4RadioGroup1_0" align="middle" />
                   12</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup4" value="4res2" id="4RadioGroup1_1" align="middle" />
                   180</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup4" value="4res3" id="4RadioGroup1_2" align="middle" />
                   165</label>
                <br />
                <label>
                  <input type="radio" name="RadioGroup4" value="4resc" id="4RadioGroup1_3" align="middle" />
                   36</label>
                <br />
              </p></tr><br />
              
            <tr>
              <div align="center">
                <input type="submit" name="aceptar" id="aceptar" value="Aceptar" style="font-family:Verdana, Arial, Helvetica, sans-serif" align="middle" />
              </div>
              <p>&nbsp;</p></tr> 

        </form>  
        
        
                  

<?          
if (isset($_POST["aceptar"]))
{
	?>
	<script language="javascript">
		window.alert ( "Las respuestas han sido cargadas exitosamente");
		window.location = "pagPpal";
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