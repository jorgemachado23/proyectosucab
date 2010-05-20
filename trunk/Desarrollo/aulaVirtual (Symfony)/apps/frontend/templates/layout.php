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
            <h2><a href="<?php echo url_for('sesion/logout') ?>" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px; position:absolute; left: 249px; top: 250px;">Cerrar Sesión >></a></h2>
        </div>
        </form>
    </div>
    <div class="paperclip5"></div>
    <div class="paperclip2"></div>
    <div style="position:absolute; left: 70px; top: 334px;">
        <h2>Bienvenid@ <?php echo $_SESSION["usuario"] ?> </h2>
            <br />
            <br />
    </div>
  </div>
  <div id="container">
    <div id="contentPagPpal2">
      <div id="content_top">
        <div class="post">
     <div class="content">

        <?php echo $sf_content ?>
         
     </div>
        </div>
      </div>
    </div>
    <div id="sidebarPagPpal2">

      <div class="linkstext">
        <ul>
		<p></p>
		<p></p>
                <br />
		<a href="">Ver Temas</a>
        </ul>
      </div>
      <div class="linkstext">
      <ul>
	  <p></p>
	  <p></p>
          <br />
	       <a href="">Responder Exámen</a>
      </ul>
      </div>
    </div>
      
  </div>
    <div id="footer2" style="position:absolute">
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
