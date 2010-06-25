<?php
   session_start();
   $_SESSION['usuario'] = $_GET['usuario'];
   $_SESSION['privilegio'] = $_GET['privilegio'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Aula Virtual - Colegio Santiago de León de Caracas</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="files/style.css" type="text/css" media="screen" />
<!--[if IE 7]>	<link rel="stylesheet" type="text/css" media="all" href="files/style_ie.css" /><![endif]-->
<!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="all" href="files/style_ie6.css" /><![endif]-->
<style type="text/css">
<!--
@import url("../../../web/css/style.css");
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
    <h1 class="logo"><a>CAD</a></h1>
    <div class="search">
        <form method="post" id="searchform">
        <div>
            <h2><a href="<?php //echo url_for('sesion/logout') ?>" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px; position:absolute; left: 425px; top: 250px;">Cerrar Sesi&oacute;n >></a></h2>
        </div>
        </form>
    </div>
    <div class="paperclip5"></div>
    <div class="paperclip2"></div>
    <div style="position:absolute; left: 250px; top: 334px;">
        <h2>Bienvenid@ <?php echo $_SESSION["usuario"] ?> </h2>
            <br />
            <br />
    </div>
  </div>
  <div id="container">
    <div id="content">
      <div id="content_top">
        <div class="post">
            <br/><br/><br/><br/>
            <?php



              echo "<form id='form1' name='form1' method='post' action='responderExamen_2.php' style='font-family:Verdana, Arial, Helvetica, sans-serif'>
";
		$conexion = mysql_connect("127.0.0.1", "root", "");
		mysql_select_db("aulavirtual", $conexion);

		$existe= "SELECT e.`idevaluacion` as idEval, e.`nombre` as nombreEval FROM evaluacion e";
		$resEval = mysql_query($existe, $conexion) or die(mysql_error());

		echo "<div align='center'>
              <select name='examen' id='examen' style='font-family:Verdana, Arial, Helvetica, sans-serif'>";

		$totEval = mysql_num_rows($resEval);
		if ($totEval!=0)
		{
                    while ($id = mysql_fetch_assoc($resEval)){
			echo "<option value=".$id["idEval"].">".$id["nombreEval"]."</option>";
                    }

		}

                echo "</select>";
		?>


            <br/><br/>

              <input type="submit" name="buscar" id="buscar" value="Buscar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          
          </form>

        </div>
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
          <p></p>
	       <li><a href="responderExamen.php">Responder ExÃ¡men</a></li>
      </ul>
      </div>
</div>
    <div id="footer">
    <div class="the-site">
      <ul>
        <li><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;Derechos Reservados(C) CAD 2010</a></li>
      </ul>
    </div></div>
    <hr noshade size=1 />
  </div>
</div>
</body>
</html>

