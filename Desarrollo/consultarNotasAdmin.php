<?php
session_start();
$_SESSION["usuario"];
$_SESSION["privilegio"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Aula Virtual - Colegio Santiago de Leon de Caracas</title>
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
            <h2><a href="" class="home" id="link_home" style="color:#666666;
                font-style:italic; font-size:18px; position:absolute; left: 400px;
                top: 250px;">Cerrar Sesion >></a></h2>
        </div>
        </form>
    </div>
    <div class="paperclip5"></div>
    <div class="paperclip2"></div>
    <div style="position:absolute; left:300px; top: 334px;">
        <h2>Bienvenid@ <?php echo $_SESSION["usuario"] ?></h2>
            <br />
            <br />
    </div>
  </div>
  <div id="container">
    <div id="content">
      <div id="content_top">
        <div class="post">
               <br />
               <br />
               <br />
               <br />
               <br />
               <h1 align="center">Seleccione la seccion a consultar</h1>
               <br />
               <br />
               <br />
          <form id="form1" name="form1" method="post" action="" style="font-family:Verdana, Arial, Helvetica, sans-serif">
            <div align="center">
              <select name="select" id="select">
                <option value="A">Seccion A</option>
                <option value="B">Seccion B</option>
                <option value="C">Seccion C</option>
                <option value="D">Seccion D</option>
              </select>

            <select name="evaluacion" id="evaluacion" style="font-family:Verdana, Arial, Helvetica, sans-serif">
                  <?php
			$conexion = mysql_connect("127.0.0.1", "root", "");
                        mysql_select_db("aulavirtual", $conexion);

			$queEmp = "SELECT e.`nombre` as nombre, e.`idEVALUACION` as idEvaluacion FROM aulavirtual.evaluacion e";
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

			$totEmp = mysql_num_rows($resEmp);


			if ($totEmp> 0) {
   				while ($rowEmp = mysql_fetch_assoc($resEmp)) {
     				echo "
            <option value=".$rowEmp['idEvaluacion'].">".$rowEmp['nombre']."</option>
          ";
		}}
		?>
                    </select>
              <br />
              <br />
              <input type="submit" name="button" id="button" value="Mostrar" style="font-family:Verdana, Arial, Helvetica, sans-serif"/>
             <input type="submit" name="pdf" id="pdf" value="Exportar a PDF" style="font-family:Verdana, Arial, Helvetica, sans-serif"/>
            </div>
        </form>
 
              <?php
		  if ((isset($_POST["pdf"]))!=NULL)
		  {
		  	$_SESSION["seccion"]=$_POST["select"];
                        $_SESSION["evaluacion"]=$_POST["evaluacion"];
			?>
				<script language="javascript">
					window.location="prueba3.php";
				</script>
			<?php
		  }

		  if ((isset($_POST["button"]))!=NULL)
		  {
		  	$_SESSION["seccion"]=$_POST["select"];
			?>
				<script language="javascript">
					window.open("prueba2.php","mywindow","status=0,toolbar=0,resizable=1,scrollbars=1");
				</script>
			<?php
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
            <li><a href="">&nbsp;&nbsp;Agregar Alumnos</a> </li>
            <li><a href="">&nbsp;&nbsp;Listar Alumnos</a> </li>
            <li><a href="">&nbsp;&nbsp;Eliminar Alumnos</a> </li>
            <li><a>&nbsp;&nbsp;</a></li>
          </ul>
        </li>
      </ul>
      <div class="newcomments">
        <ul>
            <li><a href="">&nbsp;&nbsp;Agregar Ex�men Virtual</a></li>
            <li><a href="">&nbsp;&nbsp;Modificar Ex�men Virtual</a></li>
            <li><a href="">&nbsp;&nbsp;Eliminar Ex�men Virtual</a></li>
        </ul>
      </div>
      <div class="linkstext">
        <ul>
          <li><a href="">&nbsp;&nbsp;Agregar Evaluaci�n</a></li>
          <li><a href="">&nbsp;&nbsp;Ver Evaluaciones</a></li>
          <li><a href="">&nbsp;&nbsp;Eliminar Evaluaci�n</a></li>
          <li><a href="">&nbsp;&nbsp;Cargar Notas</a></li>
          <li><a href="consultarNotasAdmin.php">&nbsp;&nbsp;Consultar Notas</a></li>
          <li><a href="modificarNotasAdmin.php">&nbsp;&nbsp;Modificar Notas</a></li>
        </ul>
      </div>
      <div class="linkstext">
      <ul>
    	   <li><a href="">&nbsp;&nbsp;Ver Foro</a></li>
    	   <li><a href="">&nbsp;&nbsp;Crear un tema</a></li>
           <li><a href="">&nbsp;&nbsp;Borrar Foro</a></li>
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