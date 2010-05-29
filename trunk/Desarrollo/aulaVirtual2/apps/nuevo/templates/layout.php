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
@import url("../../../web/css/style.css");
-->

</style>
</head>
<body>
<div id="wrapper">
  <div class="header">
    <div class="paperclip"></div>
	<div style="position:absolute; left: 46px; top: 271px;">
    <h2>Bienvenido al Sistema de Aula Virtual</h2></div>
  </div>
    <?php echo $sf_content ?>
  <div id="container">
    <div id="contentInicioSesion">
      <div id="content_top">
            <div class="post">
                <td align="left">Para ingresar al sistema introduzca su usuario y contraseña y haga click en el</td>
                <h2>&nbsp;</h2>
                <td>botón "Iniciar Sesión" que aparece a continuación.</td>
            </div>
        <div class="post">
        <form id="form1" name="form1" method="post" action="<?php echo url_for('usuario/login')?>" style="font-family:Verdana, Arial, Helvetica, sans-serif">
          <table width="705" border="0" style="font-family:Verdana, Arial, Helvetica, sans-serif">
            <tr>
              <td width="151">Nombre de Usuario:</td>
              <td><input type="text" name="usuario" id="usuario" size="50" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></td>
            </tr>
            <tr>
              <td>Contraseña:</td>
              <td><input type="password" name="clave" id="clave" size="50" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></td>
            </tr>
          </table>
          <div align="center">
            <p>
              <input type="submit" name="inicioSesion" id="inicioSesion" value="Iniciar Sesión" style="font-family:Verdana, Arial, Helvetica, sans-serif"/>
            </p>
            <p><a href="olvidoContrasena.php">¿Olvidó su contraseña?</a></p>
          </div>
        </form>
        </div>
    </div>
   </div>
  </div>
  <div id="sidebarInicioSesion"></div>
  <div id="footer3">
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