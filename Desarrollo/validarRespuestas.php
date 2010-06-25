<?php
    session_start();
    $examen = $_SESSION['examen'];
    $usuario = $_SESSION['usuario'];

    echo $usuario;
    echo $examen;

    $conexion = mysql_connect("127.0.0.1", "root");
    mysql_select_db("aulaVirtual", $conexion);

    $persona = "SELECT p.`idpersona` FROM persona p WHERE p.`cuenta`='$usuario';";
    $persona = mysql_query($persona, $conexion) or die(mysql_error());
    $idPersona = mysql_fetch_assoc($persona);

    $idPersona = $idPersona['idpersona'];
    $nota = "INSERT INTO nota (idpersona,idevaluacion,created_at) VALUES ($idPersona,$examen,'2010/05/12')";
    $nota = mysql_query($nota, $conexion) or die(mysql_error());

    //echo "<br/>Persona".$idPersona['idpersona']."<br/>";

    $idNota = "SELECT MAX(idnota) as nota FROM nota;";
    $idNota = mysql_query($idNota, $conexion) or die(mysql_error());
    $idNota = mysql_fetch_assoc($idNota);

    $idenNota = $idNota['nota'];

    $queEmp1 = "SELECT c.pregunta, c.idpregunta FROM contenido_examen c, evaluacion e WHERE e.idevaluacion=c.idevaluacion AND e.idevaluacion=$examen";
    $resEmp1 = mysql_query($queEmp1, $conexion) or die(mysql_error());
    $totEmp1 = mysql_num_rows($resEmp1);
    if ($totEmp1> 0) {
       while ($rowPreg = mysql_fetch_assoc($resEmp1)) {

           $var = $rowPreg['idpregunta'];
           $respDada = $_POST[$var];
           $resDada = "INSERT INTO res_dada (num_pregunta,respuesta,idnota,idpersona,idevaluacion)
           VALUES ($var,$respDada,$idenNota,$idPersona,$examen);";
           $resDada = mysql_query($resDada, $conexion) or die(mysql_error());

           echo $_POST[$var];

           $total = "SELECT COUNT(c.pregunta) as total FROM contenido_examen c, evaluacion e WHERE e.idevaluacion=c.idevaluacion AND e.idevaluacion=$examen";
           $total = mysql_query($total, $conexion) or die(mysql_error());
           $totalPreg = mysql_fetch_assoc($total);
           $total = $totalPreg['total'];
       }
    }



    function CorregirExamen($examen,$total){
        $notaAcum=0;
        $conexion = mysql_connect("127.0.0.1", "root");
        mysql_select_db("aulaVirtual", $conexion);

        $correcion1 = "SELECT r.`tipo`, r.`idrespuesta`, rd.`respuesta` FROM respuesta r,contenido_examen p,res_dada rd
        WHERE p.`idpregunta`=r.`idpregunta` AND p.`idevaluacion`=$examen AND rd.`num_pregunta`=r.`idpregunta` AND rd.`idevaluacion`=1 AND rd.`respuesta` = r.`idrespuesta`";
        $correccion = mysql_query($correcion1, $conexion) or die(mysql_error());

        $totResp = mysql_num_rows($correccion);
        if ($totResp> 0) {
            while ($rowResp = mysql_fetch_assoc($correccion)) {
                if ($rowResp['tipo']=='CORRECTA'){

                    $notaAcum = $notaAcum + 1;
                }

            }
        }

        $notaFinal= ($notaAcum * 20)/$total;

        return $notaFinal;
    }
	
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

        <?php

        echo "<br/><br/>";
        $notaFinal = CorregirExamen($examen,$total);
        echo "<br/>La nota obtenida es: ".$notaFinal;

        echo "<br/><br/>";
        $conexion = mysql_connect("127.0.0.1", "root");
	mysql_select_db("aulaVirtual", $conexion);

        $queEmp = "SELECT e.`nombre` FROM evaluacion e WHERE e.`idevaluacion`=$examen";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
	$totEmp = mysql_num_rows($resEmp);
	if ($totEmp> 0) {
            $rowEmp = mysql_fetch_assoc($resEmp);
            echo "Esta es la solucion del examen: ".$rowEmp ['nombre']."<br/>"."<br/>";
        }

        $queEmp0 = "SELECT c.pregunta, c.idpregunta FROM contenido_examen c, evaluacion e WHERE e.idevaluacion=c.idevaluacion AND e.idevaluacion=$examen";
	$resEmp0 = mysql_query($queEmp0, $conexion) or die(mysql_error());
	$totEmp0 = mysql_num_rows($resEmp0);
	if ($totEmp0> 0) {
            while ($rowEmp0 = mysql_fetch_assoc($resEmp0)) {
                echo $rowEmp0 ['pregunta']."<br/><br/>";
                $pregunta = $rowEmp0 ['idpregunta'];
               

               

                $queEmp1 = "SELECT r.`respuesta`, r.idrespuesta, r.`tipo` FROM respuesta r, contenido_examen c WHERE r.`idpregunta`=c.idpregunta AND c.idpregunta=$pregunta";
                $resEmp1 = mysql_query($queEmp1, $conexion) or die(mysql_error());
                $totEmp1 = mysql_num_rows($resEmp1);
                if ($totEmp1> 0) {
                    while ($rowEmp1 = mysql_fetch_assoc($resEmp1)) {


                       $queResDada = "SELECT re.`respuesta` FROM res_dada r,respuesta re
                        WHERE r.`idpersona`=$idPersona AND r.`idevaluacion`=$examen AND r.`num_pregunta`=$pregunta AND re.`idrespuesta`=r.`respuesta`;";
                        $resResDada = mysql_query($queResDada, $conexion) or die(mysql_error());
                        $rowResDada2 = mysql_fetch_assoc($resResDada);
                        
                        if ($rowEmp1 ['tipo']=="CORRECTA"){

                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Respuesta Dada: ".$rowResDada2['respuesta'];
                            echo "<br/><br/>";
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Respuesta Correcta: ".$rowEmp1 ['respuesta'];
                            echo "<br/><br/>";
                        }
                        
                        
                    }
                }
             
            }
        }
        ?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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

</body>
</html>