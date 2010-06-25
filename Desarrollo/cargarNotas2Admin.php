<?php 
session_start();
$_SESSION["usuario"];
$_SESSION["privilegio"];
$_SESSION["seccion"];
$idsecc = $_SESSION["evaluacion"];
$conexion = mysql_connect("127.0.0.1", "root", "");
mysql_select_db("aulavirtual", $conexion);
$queEmp = "CREATE  TABLE IF NOT EXISTS `aulavirtual`.`TEMPORAL` (
  `idTemporal` INT NOT NULL AUTO_INCREMENT,
  `idpersona` INT NOT NULL,
  `fecha` date NOT NULL,
  `nota` varchar(3) NOT NULL,
  `idevaluacion` int not null,
  `lapso` int not null,
  PRIMARY KEY (`idTemporal`) )
ENGINE = InnoDB;";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$queEmpN="SELECT p.`nombre` FROM aulavirtual.evaluacion p WHERE p.`idevaluacion` = '$idsecc'";
$resEmpN = mysql_query($queEmpN, $conexion) or die(mysql_error());
$totEmpN = mysql_num_rows($resEmpN);
if ($totEmpN>0){
    while ($row = mysql_fetch_assoc($resEmpN)){
        $nombreEva= $row['nombre'];
    }
}
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
               <h1 align="center">Evaluacion: <?php echo $nombreEva ?></h1>
               <br />
               <h1 align="center">Seccion: <?php echo $_SESSION["seccion"] ?></h1>
               <br />
               <br />
               <br />
               <br />
               <br />

           <form id="form1" name="form1" method="post" action="" style="font-family:Verdana, Arial, Helvetica, sans-serif">
           <div align="center">
             <table width="200" border="0">
               <?php
			$seccion = $_SESSION["seccion"];
			$eval=$_SESSION["evaluacion"];
			$conexion = mysql_connect("127.0.0.1", "root", "");
                	mysql_select_db("aulavirtual", $conexion);
			$queEmp = "SELECT p.`idpersona` as ident,p.`nombre` as nombre, p.`apellido` as apellido, p.`segundoNombre` as nombre2, p.`segundoApellido` as apellido2 FROM aulavirtual.persona p WHERE p.`seccion` = '$seccion' and p.`idPERSONA` not in (SELECT p.`idPERSONA` as ident FROM aulavirtual.persona p,aulavirtual.nota n, aulavirtual.evaluacion e WHERE p.`seccion` = '$seccion' AND n.`nota` is not null AND n.`idevaluacion`=e.`idevaluacion` AND n.`idpersona`=p.`idpersona` AND e.`idevaluacion`=$eval)";
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
			$totEmp = mysql_num_rows($resEmp);

			if ($totEmp> 0) {
   				while ($rowEmp = mysql_fetch_assoc($resEmp)) {

					echo "

					<tr>
            <td width='270' align='left'>".$rowEmp['nombre']."&nbsp;".$rowEmp['nombre2']."&nbsp;".$rowEmp['apellido']."&nbsp;".$rowEmp['apellido2']."&nbsp;"."</td>
            <td width='184'><input type='text' style='font-family:Verdana, Arial, Helvetica, sans-serif' name=".$rowEmp['ident']." id=".$rowEmp['ident']." /></td>
          			</tr>";
                                }

                        }else{?>
                            <h2 align="justify">Esta seccion ya tiene las notas cargadas o no tiene almunos inscritos</h2><?php
                        }
		?>
             </table>
               <br />
               <br />
             <input type="submit" name="button" id="button" value="Cargar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
             </div>
         </form>
         <?php
   
		 if (isset($_POST["button"]))
		 {
		 	$conexion2 = mysql_connect("127.0.0.1", "root", "");
                        mysql_select_db("aulavirtual", $conexion2);
			$queEmp2 = "SELECT p.`idpersona`,p.`nombre` as nombre, p.`apellido` as apellido, p.`segundoNombre` as nombre2, p.`segundoApellido` as apellido2 FROM aulavirtual.persona p WHERE p.`seccion` = '$seccion' and p.`idPERSONA` not in (SELECT p.`idPERSONA` as ident FROM aulavirtual.persona p,aulavirtual.nota n, aulavirtual.evaluacion e WHERE p.`seccion` = '$seccion' AND n.`nota` is not null AND n.`idevaluacion`=e.`idevaluacion` AND n.`idpersona`=p.`idpersona` AND e.`idevaluacion`=$eval)";
			$resEmp2 = mysql_query($queEmp2, $conexion2) or die(mysql_error());
			$totEmpp = mysql_num_rows($resEmp2);


		 $eval=$_SESSION["evaluacion"];
		 $cont =1;
		 $fecha = date("Y-m-d");
		 $flag=0;
		 while ($id = mysql_fetch_assoc($resEmp2))
		  {
                      $var = $id['idpersona'];
		  	if ($_POST["$var"] == NULL)
			{
			}else
			{
                            $nota=strtoupper($_POST[$var]);

                            if ($nota == "A"){ $nota2=5;}
                            else if ($nota == "B"){ $nota2=4;}
                            else if ($nota == "C"){ $nota2=3;}
                            else if ($nota == "D"){ $nota2=2;}
                            else if ($nota == "E"){ $nota2=1;}
                            else {
                                $nota2=$nota;
                            }
                            echo $nota2;
                            $conexion = mysql_connect("127.0.0.1", "root", "");
                            mysql_select_db("aulavirtual", $conexion);


			if (($nota2==1)||($nota2==2)||($nota2==3)||($nota2==4)||($nota2==5)){
                            $queEmp = "INSERT INTO `NOTA` (`created_at`, `nota`, `idpersona`, `idevaluacion`) VALUES ('$fecha', $nota2, $var, $eval);";
                            $resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

			}else{

                             $queEmp5 = "SELECT * FROM `TEMPORAL` WHERE `idpersona`=$var";
                            $resEmp5 = mysql_query($queEmp5, $conexion) or die(mysql_error());

                            $totEmp5 = mysql_num_rows($resEmp5);

                            if ($totEmp5==0){
                                $queEmp = "INSERT INTO `TEMPORAL` (`fecha`,`nota`, `idpersona`, `idevaluacion`, `lapso`) VALUES ('$fecha','$nota2', $var, $eval, 1);";
                                $resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
                                $flag=1;
                            }else{
                                $queEmp7 = "UPDATE `TEMPORAL` SET `nota` = '$nota2' where `idpersona`=$var;";
                                $resEmp7 = mysql_query($queEmp7, $conexion) or die(mysql_error());
                                $flag=1;
                            }
			}
			}
			$cont = $cont+1;
		  }
		 
		 if ($flag==1)
		 {
                    ?>
                    <script language="javascript">
                            window.alert("Hubo errores en algunas notas ingresada. \nPor favor verifique los siguientes datos.");
                            window.location = "cargarNotas3Admin.php";
                    </script>
                    <?php
		 }
                 else {
                    ?>
                    <script language="javascript">
                        window.alert("Se han cargado las notas exitosamente");
                        window.location = "cargarNotasAdmin.php?usuario=<?php echo $_SESSION["usuario"] ?>&privilegio=<?php echo $_SESSION["privilegio"] ?>";
                    </script>
                    <?php
                 }
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
            <li><a href="">&nbsp;&nbsp;Agregar Exámen Virtual</a></li>
            <li><a href="">&nbsp;&nbsp;Modificar Exámen Virtual</a></li>
            <li><a href="">&nbsp;&nbsp;Eliminar Exámen Virtual</a></li>
        </ul>
      </div>
      <div class="linkstext">
        <ul>
          <li><a href="">&nbsp;&nbsp;Agregar Evaluación</a></li>
          <li><a href="">&nbsp;&nbsp;Ver Evaluaciones</a></li>
          <li><a href="">&nbsp;&nbsp;Eliminar Evaluación</a></li>
          <li><a href="">&nbsp;&nbsp;Cargar Notas</a></li>
          <li><a href="">&nbsp;&nbsp;Consultar Notas</a></li>
          <li><a href="">&nbsp;&nbsp;Modificar Notas</a></li>
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
