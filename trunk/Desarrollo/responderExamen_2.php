<?php
   session_start();
   $_SESSION['usuario'];
   $_SESSION['privilegio'];
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
        <br /><br /><br /><br /><br /><br />

        <form id="form1" name="form1" method="post" action="validarRespuestas.php" style="font-family:Verdana, Arial, Helvetica, sans-serif" align="center" >

        <?php
        $examen = $_POST['examen'];
        $_SESSION['examen']=$examen;
        $conexion = mysql_connect("127.0.0.1", "root");
	mysql_select_db("aulaVirtual", $conexion);

        $queEmp = "SELECT e.`nombre` FROM evaluacion e WHERE e.`idevaluacion`=$examen";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
	$totEmp = mysql_num_rows($resEmp);
	if ($totEmp> 0) {
            $rowEmp = mysql_fetch_assoc($resEmp);
            echo "En este memento te encuentras respondiendo el examen: ".$rowEmp ['nombre']."<br/>"."<br/>";
        }

        $queEmp0 = "SELECT c.pregunta, c.idpregunta FROM contenido_examen c, evaluacion e WHERE e.idevaluacion=c.idevaluacion AND e.idevaluacion=$examen";
	$resEmp0 = mysql_query($queEmp0, $conexion) or die(mysql_error());
	$totEmp0 = mysql_num_rows($resEmp0);
	if ($totEmp0> 0) {
            while ($rowEmp0 = mysql_fetch_assoc($resEmp0)) {
                echo $rowEmp0 ['pregunta']."<br/><br/>";
                $pregunta = $rowEmp0 ['idpregunta'];

                $queEmp1 = "SELECT r.`respuesta`, r.idrespuesta FROM respuesta r, contenido_examen c WHERE r.`idpregunta`=c.idpregunta AND c.idpregunta=$pregunta";
                $resEmp1 = mysql_query($queEmp1, $conexion) or die(mysql_error());
                $totEmp1 = mysql_num_rows($resEmp1);
                if ($totEmp1> 0) {
                    while ($rowEmp1 = mysql_fetch_assoc($resEmp1)) {
                        
                        echo "<input type='radio' name='".$rowEmp0 ['idpregunta']."' id='radio' value='".$rowEmp1 ['idrespuesta']."' />".$rowEmp1 ['respuesta'];
                        echo "<br/>";
                    }
                }
                echo "<br/><br/><br/>";
            }
        }
        ?>

            <div align="center">
                <input type="submit" name="aceptar" id="aceptar" value="Aceptar" style="font-family:Verdana, Arial, Helvetica, sans-serif" align="center" />
                <a href="responderExamen.php">Cancelar</a>
            </div>
        </form>

        </div><!--post-->
        

  
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
	       <li><a href="#">Responder ExÃ¡men</a></li>
      </ul>
      </div>
</div>
  </div>

    <div id="footer">
    <div class="the-site">
      <ul>
        <li><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;Derechos Reservados(C) CAD 2010</a></li>
      </ul>
    </div>
    <hr noshade size=1 />
  </div>
</div>
</body>
</html>
